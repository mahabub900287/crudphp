<?php
session_start();
if(isset($_POST['login'])){
   $uname=trim(htmlentities($_POST['uname']));
    $email=trim(htmlentities($_POST['email']));
    $password=$_POST['password'];
    require_once 'admin/bd.php';
    $sql="SELECT id,name,uname,email,password FROM sinup WHERE email='$email' and password='$password'";
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data)>0){
      $data=mysqli_fetch_assoc( $data);
      $_SESSION['id']=$data['id'];
      $_SESSION['name']=$data['name'];
      $_SESSION['uname']=$data['uname'];
      $_SESSION['email']=$data['email'];
      header("location:admin/index.php");
    }else{
      header("location:login.php");
    }
} 
?>