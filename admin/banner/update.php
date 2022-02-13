<link rel="stylesheet" href="../css/bootstrap.min.css">
<main>
<?php 
 require_once'../bd.php';
 if(isset($_GET['id']) && $_GET['id']!=NULL){
    $id=$_GET['id'];
 }
 $sql="select*from baners where id='$id'";
 $view=mysqli_query($conn,$sql);

 if(mysqli_num_rows($view)>0){
     $data=mysqli_fetch_assoc($view);
 }
 if(isset($_POST['submit'])){
    $title=test_input($_POST['title']);
    $discription=test_input($_POST['discription']);
    $btn_text=test_input($_POST['btn_text']);
    $btn_url=test_input($_POST['btn_url']);
    $photo=$_FILES['photo'];
   if($photo['name']){
            $ext=explode(".",$photo['name']) ;
            $exp=end( $ext);
            $photoname=$title."-".".". $exp;
            $upload=move_uploaded_file($photo["tmp_name"],"../../upload/image/".$photoname);
            $ext="../../upload/image/".$data['photo'];
            if(file_exists($ext)){
                unlink($ext) ;
              }
             $sql="UPDATE baners SET title='$title',discription='$discription',btntext='$btn_text', btnurl='$btn_url',photo='$photoname' WHERE id=$id";            
             $database=mysqli_query($conn, $sql);
                                if($database){
                                    header("Location:../../index.php");
                                }else{
                                    echo"samethig is wrong";
                                }  
            
                  
        }else{
         $sql="UPDATE baners SET title='$title',discription='$discription',btntext='$btn_text', btnurl='$btn_url' WHERE id=$id";           
         $database=mysqli_query($conn, $sql);
                        if($database){
                             header("Location:../../index.php");
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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD Banners</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All Banner</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="text" name="title" class="form-control" value="<?=$data['title']?>">
                               </div>
                               <div class="form-group">
                                   <textarea  type="text"name="discription" class="form-control"><?=$data['discription']?></textarea>
                               </div>
                               <div class="form-group">
                                   <input type="text" name="btn_text" class="form-control" value="<?=$data['btntext']?>">
                               </div>
                               <div class="form-group">
                                   <input type="url"name="btn_url" class="form-control" value="<?=$data['btnurl']?>">
                               </div>
                               <div class="form-group">
                                   <label for="file"><h4>Image</h4></label>
                                   <input type="file"name="photo"value="<?=$data['photo']?>" class="form-control">
                               </div>
                               <div class="form-group">
                                   <input type="submit"name="submit" value="UPDATE" class="form-control">
                               </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
