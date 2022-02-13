<?php
ob_start();
require_once '../inc/heder.php';
if(isset($_POST['submit'])){
    $discription_top=test_input($_POST['discription_top']);
    $titile_one=test_input($_POST['titile_one']);
    $discription_one=test_input($_POST['discription_one']);
    $list_one=test_input($_POST['list_one']);
    $list_two=test_input($_POST['list_two']);
    $discription_two=test_input($_POST['discription_two']);  
    $photo=$_FILES['photo'];
    if(empty($photo['name'])){
        $_SESSION['photo']="Upload Your Image";
    }
    if(!empty($photo['name'])){
       require "../bd.php";
       $ext=explode(".",$photo['name']) ;
       $exp=end( $ext);
       $photoname=substr($titile_one,0,5)."-".".". $exp;
       $upload=move_uploaded_file($photo["tmp_name"],"../../upload/features/".$photoname);
       if( $upload){
        $qurey="INSERT INTO features (discription_top,titile_one,discription_one,list_one,list_two,discription_two,photo) VALUES ( '$discription_top','$titile_one','$discription_one','$list_one','$list_two','$discription_two','$photoname')";
        $result=mysqli_query($conn,$qurey);
        print_r($result);
        if($result){    
          $_SESSION['succes']="Data added Sussusfuly";
            header("Location:index.php");
            ob_end_flush();
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