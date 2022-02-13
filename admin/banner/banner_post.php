<?php 
if(isset($_POST['submit'])){
    $title=test_input($_POST['title']);
    $discription=test_input($_POST['discription']);
    $btn_text=test_input($_POST['btn_text']);
    $btn_url=test_input($_POST['btn_url']);
    $photo=$_FILES['photo'];
    if(empty($title)){
        $_SESSION['title']="Enter Your Title";
    }
    if(empty($photo)){
        $_SESSION['photo']="Upload Your Image";
    }
    if(!empty($title) && !empty($photo['name'])){
       require "../bd.php";
       $ext=explode(".",$photo['name']) ;
       $exp=end( $ext);
       $photoname=$title."-".time().".". $exp;
       $upload=move_uploaded_file($photo["tmp_name"],"../../upload/image/".$photoname);
       if( $upload){
        $qurey="INSERT INTO baners(title,discription,btntext,btnurl,photo) VALUES ( '$title','$discription','$btn_text','$btn_url','$photoname')";
        $result=mysqli_query($conn,$qurey);
        print_r($result);
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