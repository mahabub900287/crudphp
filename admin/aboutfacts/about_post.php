<?php 
ob_start();
session_start();
require_once '../inc/heder.php';
if(isset($_POST['submit'])){
    $number=test_input($_POST['number']);
    $title=test_input($_POST['title']);    
    if(empty($number)){
        $_SESSION['numbererr']="Enter Your Number";
    }
    if(empty($title)){
        $_SESSION['titleerr']="Enter Your Title";
        
    }
    if(!empty($number) && !empty($title)){
       require "../bd.php";
        $qurey="INSERT INTO aboutfacts (title,count) VALUES ( '$title','$number')";
        $result=mysqli_query($conn,$qurey);
        if($result){   
          $_SESSION['succes']="Data added Sussusfuly";
          header('location:index.php');
          ob_end_flush();
        }else{
            $_SESSION['erro']="Samething is worng";
            header('location:insert.php');
            ob_end_flush();
        }
  
}
else{
  header('location:insert.php');
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<?php
require_once '../inc/footer.php';
?>