<?php 
ob_start();
session_start();
require_once '../inc/heder.php';
if(isset($_POST['submit'])){
  $title=test_input($_POST['title']);
  $discription=test_input($_POST['discription']);
  $name=test_input($_POST['name']);
  $photo=$_FILES['photo'];
  if(empty($name)){
    $_SESSION['nameerr']="Enter Your Name";
  }
  if(empty($title)){
      $_SESSION['titlerr']="Enter Your Title";
  }
  if(empty($photo)){
      $_SESSION['photoerr']="Upload Your Image";
  }
  if(!empty($title) && !empty($photo['name'])){
    require "../bd.php";
    $ext=explode(".",$photo['name']) ;
    $exp=end( $ext);
    $photoname=$name."-".".". $exp;
    $upload=move_uploaded_file($photo["tmp_name"],"../../upload/tetstimonals/".$photoname);
    if( $upload){
     $qurey="INSERT INTO tetstimonals(name,title,discription,photo) VALUES ( '$name','$title','$discription','$photoname')";
     $result=mysqli_query($conn,$qurey);
     if($result){    
       $_SESSION['succes']="Data added Sussusfuly";
         header("Location:index.php");
     }else{
         $_SESSION['erro']="Samething is worng";
     }
 }else{

    }
 }else{
     header("Location:insert.php");
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