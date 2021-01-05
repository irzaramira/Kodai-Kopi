<?php
session_start();
?>
<html lang="en">


<body>
    <?php
    include 'View/header.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="login-wrapper my-auto">
                    <h1 class="login-title mt-5">Register</h1>
                    <form action="/Logic/signup.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="tel" id="phone" pattern="[0-9]{2-11}" name="phone" class="form-control" placeholder="your phone number">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                        </div>
                        <div class="form-group mb-4">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="confrim your passsword">
                        </div>
                        <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="img/ambience.JPG" alt="login image" class="register-img">
            </div>
        </div>
    </div>
    <?php
    include 'View/footer.php';
    ?>
</body>

</html>