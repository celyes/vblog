<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>
<div class="container pt-4" id="loginContainer">
    <h4 class="text-center mt-4">Login to your account</h4>
    <div class="row">
        <div class="col-sm-12 col-md-4 offset-md-4">
            <form action="#" method="post" class="authForm p-3 mt-4" @submit="authCheck">
                <div class="form-group">
                    <label for="usernameInput" class="text-muted"><small>Username</small></label>
                    <input type="text" v-model="username" class="form-control" name="username" id="usernameInput" placeholder="E.g: John Doe">
                </div>
                <div class="form-group">
                    <label for="passwordInput" class="text-muted"><small>Password</small></label>
                    <input type="password" v-model="password" class="form-control" name="password" id="passwordInput" placeholder="********">
                </div>
                
                <div class="form-group">
                    <input type="checkbox" v-model="rememberMe" name="rememberMe" id="rememberMe"> 
                    <label for="rememberMe"><small>Remember Me</small></label>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <a href="#" class="float-right mt-2"><small>Forgot password ?</small></a>
            </form>
        </div>
    </div>
</div>
<?php require('partials/footer.php'); ?>
    