<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>
<div class="container pt-4" id="registerContainer">
    <h4 class="text-center mt-1">Create an account</h4>
    <div class="row">
        <div class="col-sm-12 col-md-4 offset-md-4">
            <form action="#" method="post" class="authForm p-3 mt-4" @submit="authRegister">
                <div class="form-group">
                    <label for="usernameInput" class="text-muted"><small>Choose a username</small></label>
                    <input type="text" v-model="username" class="form-control" name="username" id="usernameInput" placeholder="E.g: John Doe">
                </div>
                <div class="form-group">
                    <label for="usernameInput" class="text-muted"><small>Your E-Mail</small></label>
                    <input type="text" v-model="email" class="form-control" name="email" id="emailInput" placeholder="E-Mail">
                </div>
                
                <div class="form-group">
                    <label for="passwordInput" class="text-muted"><small>Password</small></label>
                    <input type="password" v-model="pass" class="form-control" name="password" id="passwordInput" placeholder="********">
                </div>
                
                <div class="form-group">
                    <label for="rePasswordInput" class="text-muted"><small>Retype the password</small></label>
                    <input type="password" v-model="repass" class="form-control" name="password" id="rePasswordInput" placeholder="********">
                </div>
                <button type="submit" class="btn btn-success btn-wide">Sign Up</button>
                <hr>
                <small class="text-muted">By Clicking Sign up, You agree on the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a>.</small>
            </form>
        </div>
    </div>
</div>
<?php require('partials/footer.php'); ?>
    