<?php include "important/header.php"; ?>
<?php include "db_connection.php"; ?>
<?php

$login = new Login();

if(isset($_POST['login_btn'])){

    $result = $login->user_login($_POST['email'], $_POST['password']);

}

?>

<section class="loginSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <span>Login</span>
                        </div>
                        <div class="card-body">

                            <div class="form_group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email..">
                            </div>

                            <div class="form_group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password..">
                            </div>

                        </div>
                        <div class="card-footer">
                            <input type="submit" name="login_btn" class="btn btn-success" value="Login">
                            <a href="registration.php">Registration now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "important/footer.php"; ?>
