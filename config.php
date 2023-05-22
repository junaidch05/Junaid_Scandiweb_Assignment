<?php 
$server ="localhost";
$username="id20787273_root";
$password="Cd6785a1@";
$database= "id20787273_scandiweb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
?>