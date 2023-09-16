<?php
extract($_REQUEST);
include_once("./include/config.php");
$qry="DELETE FROM cart WHERE ID='".$cartid."'";
$res=mysqli_query($conn,$qry);
if($res){
    header("location:cart.php");
}
else{
    header("location:index.php");
}
?>