<?php

session_start();

class Db_Connection{
    public $hostname ="localhost";
    public $db_user ="root";
    public $db_password ="";
    public $db_name ="firsttable";
    public $conn;

    public function __construct(){

        $conn = new mysqli($this->hostname, $this->db_user, $this->db_password, $this->db_name);

        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        // echo "Database Connected Successfully";
        return $this->conn = $conn;
    }

    

}

// class Message{
    
//     public function notify($mgs = ''){
//         echo "hello";
//         if (!empty(trim($mgs))) {
//             $_SESSION['time_start'] = time();
//             $_SESSION['message'] = $mgs;

//             if (time() - $_SESSION['time_start'] < 300) { // 300 seconds = 5 minutes
//                 // they're within the 5 minutes so save the details to the database
//                 return $_SESSION['message'];
//             } else {
//                 // sorry, you're out of time
//             unset($_SESSION[$mgs]); // and unset any other session vars for this task
//             }
//         }
        

//     }

// }


?>