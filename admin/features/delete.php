<?php
require '../bd.php';
if(isset($_GET['id'])){
   $dlid=$_GET['id'];
   $sql="delete from features where id= '$dlid'";
   mysqli_query($conn,$sql);
   header("Location:index.php");
}

?>