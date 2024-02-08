
<?php



class Update_ditais
{
    public function __construct()
    {
        $db_connect = new Db_Connection;
        $this->conn = $db_connect->conn;
    }

    public function edit($id){

        $user_id = mysqli_real_escape_string($this->conn, $id);
        $selectQuery = "SELECT * FROM login_table1 WHERE id='$user_id' LIMIT 1";
        $result = $this->conn->query($selectQuery);
        $array_run = $result->fetch_array();
        return $array_run;

    }

    public function update($inputData, $id){
        $user_id = mysqli_real_escape_string($this->conn, $id);
        $name = $inputData['name'];
        $email = $inputData['email'];
        $adderss = $inputData['adderss'];
        $date = $inputData['date'];

        $updateQuery = "UPDATE login_table1 SET `name`='$name', `email`='$email', `address`='$adderss', `date`='$date' WHERE id='$user_id' LIMIT 1 ";

        $results = $this->conn->query($updateQuery);
        if($results){
            return true;
        }else{
            return false;
        }
    }

}

if (isset($_POST['update_btn'])) {
    $id = mysqli_real_escape_string($db_connect->conn, $_POST['update_id']);
    $inputData = [
        'name' => mysqli_real_escape_string($db_connect->conn, $_POST['name']),
        'email' => mysqli_real_escape_string($db_connect->conn, $_POST['email']),
        'adderss' => mysqli_real_escape_string($db_connect->conn, $_POST['adderss']),
        'date' => mysqli_real_escape_string($db_connect->conn, $_POST['date']),
    ];
    $d_update = new Update_ditais;
    $result = $d_update->update($inputData, $id);

    if($result)
    {
        header("Location: user_details.php");
    }
    else
    {
        return "error!!!";
    }
}


?>