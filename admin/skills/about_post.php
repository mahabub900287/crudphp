<?php 
ob_start();
session_start();
require_once '../inc/heder.php';
if(isset($_POST['submit'])){
    $title_top=test_input($_POST['title_top']);
    $discription=test_input($_POST['discription']); 
    $title_one=test_input($_POST['title_one']);
    $title_two=test_input($_POST['title_two']);
    $title_three=test_input($_POST['title_three']); 
    $title_four=test_input($_POST['title_four']);   
    if(empty($title_top)){
        $_SESSION['title_top']="Enter Your Top Title";
    }
    if(empty($discription)){
        $_SESSION['discription']="Enter Your Discription";
    }
    if(empty($title_one)){
      $_SESSION['title_one']="Enter Your title one";
  }
    if(!empty($title_top) && !empty($discription)  && !empty($title_one)){
       require "../bd.php";
        $qurey="INSERT INTO skills (title_top,discription,title_one,title_two,title_three,title_four) VALUES ('$title_top','$discription','$title_one','$title_two','$title_three','$title_four')";
        $result=mysqli_query($conn,$qurey);
        if($result){   
          $_SESSION['succes']="Data added Sussusfuly";
          header('location:index.php');
          ob_end_flush();
        }else{
            $_SESSION['erro']="Samething is worng";
        }
  
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