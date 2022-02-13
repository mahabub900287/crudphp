<?php 
require_once '../bd.php';
$id=$_GET['id'];
$sql="SELECT status FROM sarvice_details WHERE id='$id'";
$data=mysqli_query($conn,$sql);
if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
    header("location:index.php");
}
if($data['status']==1){
    $sql="UPDATE sarvice_details SET status='2' WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("location:index.php");
}else{
    $sql="UPDATE sarvice_details SET status='1' WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("location:index.php");
}
?>