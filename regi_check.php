<?php
session_start();
extract($_POST);
$p=$_POST['password'];
include_once("./include/config.php");
$p = $_POST["password"];
$qry="INSERT INTO user (name,email,password) VALUES ('".$name."','".$email."','".$p ."')";
echo $qry;
$res=mysqli_query($conn,$qry);
if($res){
    header("location:login.php");
}
else{
    header("location:index.php");
}
?>