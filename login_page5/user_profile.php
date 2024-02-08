<?php include "important/header.php"; ?>
<?php include "db_connection.php"; ?>

<section class="profile_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h3>User Profile</h3>
                    </div>
                    <div class="card-body">
                        <h4>Name :</h4>
                        <p>Email :</p>
                        <p>Address :</p>
                        <p>Date of birth :</p>
                    </div>
                    <div class="card-footer">
                        <a href="log_out.php" class="btn btn-danger">log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

<?php include "important/footer.php"; ?>
