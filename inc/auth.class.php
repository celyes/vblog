<?php 
require 'config.class.php';
class Auth {
    public $message;
    private $conn;

    // Connect to database
    public function __construct(){
        $dbconn = new db();
        $db = $dbconn->dbconnect();
        $this->conn = $db;
    }

    //Register new user
    public function register($user, $pass, $mail){
        try{
            $stmt = $this->conn->prepare('SELECT user, email FROM users WHERE user=:user OR email=:email');
            $stmt->execute([
                ':user'=>$user,
                ':email'=>$mail
            ]);
            if($stmt->rowCount()){
                echo "Username / email already taken";
            }else{
                $options = array('cost' => 11);
                $pass = password_hash($pass, PASSWORD_DEFAULT, $options);
                $stmt = $this->conn->prepare('INSERT INTO users(user, pass, email) VALUES (:user, :pass, :email)');
                $stmt->execute([
                    ':user' => $user,
                    ':pass' => $pass,
                    ':email' => $mail
                ]);  
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // Login 
    public function login($user,$pass){
		try
		{
			$stmt = $this->conn->prepare("SELECT id, user, pass, email  FROM users WHERE user=:user");
			$stmt->execute([
                ':user'=> $user
            ]);
			if($stmt->rowCount()){
                foreach($stmt->fetchAll() as $value){
					if(password_verify($pass, $value['pass'])){
                        $_SESSION['logged_in'] = true;
                        $_SESSION['username']  = $value['user'];
                        $_SESSION['email'] 	   = $value['email'];
                        $_SESSION['id'] 	   = $value['id'];
                        setcookie('log', 'true', time() + 3600); // expires after  1 hour
                        header("Location: admin.php");
                    }else{
                        $this->message = "Error : Username / password not correct";      
                    }
                }
			}else{
                echo "No such user";
            }
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
        }
        return $this->message;
    }

    // checks if user is logged in
    
    public function check(){
        if(isset($_SESSION['logged_in'])){
            return true;
        }else{
            return false;
        }
    }
    // log out function 

    public function logout(){
        session_destroy();
        session_unset();
        return true;
    }
	
}

?>