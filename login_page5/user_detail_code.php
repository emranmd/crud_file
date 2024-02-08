<?php include "db_connection.php"; ?>
<?php 

$db_connect = new Db_Connection;

class UserData{

    public function __construct(){
        $db_connect = new Db_Connection;
        $this->conn = $db_connect->conn;
    }

    public function my_data(){


        $dataSelect = "SELECT * FROM login_table1";
        $result = $this->conn->query($dataSelect);
        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }

}




?>