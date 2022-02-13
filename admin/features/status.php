<?php 
require_once '../bd.php';
$id=$_GET['id'];
$sql="SELECT staus FROM features WHERE id='$id'";
$data=mysqli_query($conn,$sql);
if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
    header("location:index.php");
}
if($data['staus']==1){
    $sql="UPDATE features SET staus='2' WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("location:index.php");
}else{
    $sql="UPDATE features SET staus='1' WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("location:index.php");
}
?>