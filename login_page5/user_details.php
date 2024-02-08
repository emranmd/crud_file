<?php include "important/header.php"; ?>

<?php include "user_detail_code.php"; ?>
<?php include "user_detail_delete.php"; ?>


<section class="ditailsSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="log-lg-10">
                <table class="tableStyle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Birthday</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $userData = new UserData();
                            $myData = $userData->my_data();
                            if($myData){
                                $i = 0;
                                foreach ($myData as $data) {
                                    $i++;
                        ?>
                        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['date']; ?></td>
                            <td>
                                <a href="registration.php?edit_id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                                <a href="user_details.php?delete_id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php 
                            } 
                                }else
                                {
                                    echo "No Record Found";
                                }; 
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?php include "important/footer.php"; ?>
