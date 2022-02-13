<?php
require "../bd.php";
if(isset($_GET['id'])){
   $id=$_GET['id'];
   $sql="DELETE FROM baners WHERE id= '$id'";
   mysqli_query($conn,$sql);
   header("Location:index.php");
}

?>