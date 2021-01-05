<html lang="en">
<?php
session_start();
?>

<body>
    <?php
    include 'View/header.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="login-wrapper my-auto">
                    <h1 class="login-title mt-5">Login</h1>
                    <form action="/Logic/login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                        </div>
                        <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
                    </form>
                    <a href="#!" class="forgot-password-link">Forgot password?</a>
                    <p class="login-wrapper-footer-text">Don't have an account?
                        <a href="register.php" class="text-reset">Register here</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="img/ambience.JPG" alt="login image" class="login-img">
            </div>
        </div>
    </div>
    <?php
    include 'View/footer.php';
    ?>
</body>

</html>