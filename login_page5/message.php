<?php

class Message{
    
    public function notification($msg = ''){
       
        if (!empty(trim($msg))) {

            if(!isset($_SESSION['start_time'])){
                $_SESSION['start_time'] = time();
            }

            if(time() - $_SESSION['start_time'] > 5){
                session_unset();
                session_destroy();
            }else{
                $_SESSION['message'] = $msg;
            }
           
        }
        
      

    }

}

?>