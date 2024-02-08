<?php include "db_connection.php"; ?>
<?php

session_start();
session_unset();
session_destroy();
header("location: login.php");

?>