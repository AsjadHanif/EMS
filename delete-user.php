<?php
include "conn.php";
session_start();
 if($_SESSION["role"] == '0'){
    header("location: {$hostname}/home.php");

 }

$userid = $_GET["id"];

$sql = "DELETE FROM ems WHERE user_id = {$userid}";

if(mysqli_query($conn,$sql)){
    header("location: {$hostname}/home.php");
}else{
    echo "<p style='color:red;margin:10px 0px;'>Can't Delete this user record</p>";
}

mysqli_close($conn);
?>