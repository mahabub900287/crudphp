<?php
ob_start();
require_once '../inc/heder.php';
require "../bd.php";
if(isset($_GET['id']) && $_GET['id']!=NULL){
   $id=$_GET['id'];
}
$sql="select*from sarvice_details where id='$id'";
$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
}
if(isset($_POST['submit'])){
    $title=test_input($_POST['title']);
    $discription=test_input($_POST['discription']);
    $btn_url=test_input($_POST['btn_url']);
    $photo=$_FILES['photo'];
    if($photo['name']){
        $ext=explode(".",$photo['name']) ;
        $exp=end( $ext);
        $photoname=$title."-".".". $exp;
        $upload=move_uploaded_file($photo["tmp_name"],"../../upload/details/".$photoname);
        $ext="../../upload/details/".$data['photo'];
        if(file_exists($ext)){
           
          }
         $sql="UPDATE sarvice_details SET title='$title',discription='$discription',btn_url='$btn_url',photo='$photoname' WHERE id=$id";            
         $database=mysqli_query($conn, $sql);
                            if($database){
                                header("Location:index.php");
                            }else{
                                echo"samethig is wrong";
                            }  
        
              
    }else{
    $sql="UPDATE tetstimonals SET title='$title',discription='$discription',btn_url='$btn_url' WHERE id=$id";           
     $database=mysqli_query($conn, $sql);
                    if($database){
                         header("Location:index.php");
                    }else{
                        echo"samethig is wrong";
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

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-header  bg-success">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Tetstimonals</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Skills</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">                                
                           <div class="form-group">
                                   <input  type="text"  name="title" class="form-control"  value="<?=$data['title']?>">
                               </div>
                             
                                <div class="form-group">
                                   <textarea type="text" name="discription" class="form-control"><?=$data['discription']?></textarea>
                               </div>  
                               <div class="form-group">
                                   <input  type="text"  name="btn_url" class="form-control"  value="<?=$data['btn_url']?>">
                               </div>                                                       
                               <div class="form-group">
                                   <label for="file"><h4>Image</h4></label>
                                   <input type="file"name="photo"value="<?=$data['photo']?>" class="form-control">
                               </div>
                               <div class="form-group">
                                   <input type="submit"name="submit" value="SUBMIT" class="form-control">
                               </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once '../inc/footer.php';
?>