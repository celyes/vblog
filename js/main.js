// Login App 
var login = new Vue({
    el: "#loginContainer", 
    data: {
        username: "",
        password: "",
        rememberMe: false
    }, 
    methods: {
        authCheck: function(e){
            e.preventDefault();
            // Ajax Request
            
        }
    }
});

// register app
var register = new Vue({
    el: '#registerContainer',
    data: {
        username : "",
        email : "", 
        pass : "", 
        repass : "",
        errorMessage : "errorComp",
        is_error: false
    },
    methods: {
        authRegister: function(e){
            e.preventDefault();
            if(this.pass === this.repass && this.pass !== ""){
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function (){
                    if(ajax.readyState == 4 && ajax.status == 200){
                    }else{

                    }
                }
                ajax.open('POST', 'inc/register.controller.php', true);
                ajax.send()
            }else{
                alert('Passwords doesn\'t match');
            }
        }
    }
});
