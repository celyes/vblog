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
    },
    methods: {
        authRegister: function(e){
            e.preventDefault();
            if(this.pass === this.repass && this.pass !== ""){
               // Axios ajax request
            }else{
                alert('Passwords doesn\'t match');
            }
        }
    }
});
