<?php 
require "../bd.php";
if(isset($_POST['submit'])){
    $title=test_input($_POST['title']);
    $discription=test_input($_POST['discription']);
    $icon_class_name=test_input($_POST['icon_class_name']);
    $box_class_name=test_input($_POST['box_class_name']);
   
    if(empty($title)){
        $_SESSION['title']="Enter Your Title";
    }
    if(empty($icon_class_name)){
        $_SESSION['photo']="Upload Your Icon";
    }
    if(!empty($title) && !empty($icon_class_name)){
        $qurey="INSERT INTO sarvice (title,discription,icon_class_name,box_class_name) VALUES ('$title','$discription','$icon_class_name','$box_class_name')";
        print_r($qurey);
        $result=mysqli_query($conn,$qurey);
        if($result){    
          $_SESSION['succes']="Data added Sussusfuly";
            header("Location:index.php");
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