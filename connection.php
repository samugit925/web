<?php
$host="localhost";
$user="root";
$password="";
$db="contact";

$con = mysqli_connect($host,$user,$password,$db);
if($con){
    echo "Connected";
}
else{
    echo "Not Connected";
}
?>