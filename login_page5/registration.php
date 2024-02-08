<?php include "important/header.php"; ?>
<?php include "register_code.php"; ?>
<?php include "user_detail_update.php"; ?>

<section class="registrationSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <?php if(!isset($_GET['edit_id'])): ?>
                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong></strong><?php echo $_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php
                
                    if (isset($_GET['edit_id'])) {
                        $user_id = mysqli_real_escape_string($db_connect->conn, $_GET['edit_id']);
                        $user_data = new Update_ditais;
                        $result = $user_data->edit($user_id);
                    }
                ?>
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <span>Registration</span>
                        </div>
                        <div class="card-body">

                            <div class="form_group mb-3">
                                <input type="hidden" name="update_id" value="<?= isset($result['id'])?$result['id']:''; ?>">
                                <input type="text" name="name" class="form-control" value="<?= isset($result['name'])?$result['name']:''; ?>" placeholder="Enter your full name...">
                            </div>

                            <div class="form_group mb-3">
                                <input type="email" name="email" class="form-control" value="<?= isset($result['email'])?$result['email']:''; ?>" placeholder="Email...">
                            </div>

                            <div class="form_group mb-3">
                                <input type="adderss" name="adderss" class="form-control" value="<?= isset($result['address'])?$result['address']:''; ?>" placeholder="Enter your adderss...">
                            </div>

                            <div class="form_group mb-3">
                                <input type="date" name="date" value="<?= isset($result['date'])?$result['date']:''; ?>" class="form-control">
                            </div>
                            <?php if(!isset($_GET['edit_id'])): ?>
                            <div class="form_group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password...">
                            </div>

                            <div class="form_group mb-3">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password...">
                            </div>
                            <?php endif; ?>

                        </div><!-- card-body -->
                        <div class="card-footer">
                            <div class="reg_btn">
                                <?php if(isset($_GET['edit_id'])): ?>
                                    <input type="submit" name="update_btn" class="btn btn-primary" value="Update">
                                    <a href="user_details.php" class="btn btn-success">Back</a>
                                <?php else: ?>
                                    <input type="submit" name="reg_btn" class="btn btn-primary" value="Submit">
                                    <a href="login.php">Login</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "important/footer.php"; ?>
