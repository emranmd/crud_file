
<?php

if(isset($_GET['delete_id']))
{
    $id = $_GET['delete_id'];
    $student = new StudentController;
    $result = $student->delete($id);
    
}

class StudentController
{
    public function __construct()
    {
        $db_connect = new Db_Connection;
        $this->conn = $db_connect->conn;
    }

    public function delete($id)
    {
        $user_id = $id ;
        $deleteQuery = "DELETE FROM login_table1 WHERE id=".$user_id;
        $result = $this->conn->query($deleteQuery);
        
    }
}



?>