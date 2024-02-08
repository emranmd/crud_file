<?php include "db_connection.php"; ?>
<?php include "message.php"; ?>

<?php

$db_connect = new Db_Connection;




if (isset($_POST['reg_btn'])) {
    $inputData = [
        'name' => mysqli_real_escape_string($db_connect->conn, $_POST['name']),
        'email' => mysqli_real_escape_string($db_connect->conn, $_POST['email']),
        'adderss' => mysqli_real_escape_string($db_connect->conn, $_POST['adderss']),
        'date' => mysqli_real_escape_string($db_connect->conn, $_POST['date']),
        'password' => mysqli_real_escape_string($db_connect->conn, $_POST['password']),
        'confirm_password' => mysqli_real_escape_string($db_connect->conn, $_POST['confirm_password']),
    ];
    

    $myData = new dataController;
    $result = $myData->create($inputData);
    if($result)
    {
        header("Location: registration.php");
    }
    else
    {
       header("Location: registration.php");
    }
    

}

class dataController{

    public function __construct(){
        $db_connect = new Db_Connection;
        $this->conn = $db_connect->conn;
    }

    public function create($inputData){
        $msg = '';
        $name = $inputData['name'];
        $email = $inputData['email'];
        $adderss = $inputData['adderss'];
        $date = $inputData['date'];
        $password = $inputData['password'];
        $confirm_password = $inputData['confirm_password'];
        
        if (empty(trim($name))) {
            $msg = "Your name is empty";
        }elseif (empty(trim($email))) {
            $msg = "Your email is empty";
        }elseif (empty(trim($adderss))) {
            $msg = "Your adderss is empty";
        }elseif (empty(trim($date))) {
            $msg= "Your date is empty";
        }elseif (empty(trim($password))) {
            $msg = "Your password is empty";
        }elseif (empty(trim($confirm_password))) {
            $msg = "Your confirm_password is empty";
        }

        if ($password == $confirm_password) {
             $password  = $password;
        }else{
            $msg = "Password dosen't match";
           
        }

        if (isset($msg) && $msg=='') {
            $data_insert = "INSERT INTO login_table1 (`name`,`email`,`address`,`date`,`password`) VALUES ('$name','$email','$adderss','$date','$password')";
            

            $query_run = $this->conn->query($data_insert);
            if ($query_run == true) {
                $_SESSION['message'] = "Register successful";
            }else{
                $_SESSION['message'] = "Register error!!";
            }
        }else{
            $notify = new Message;
            $user_message = $notify->notification($msg);

        }

    }

}


?>