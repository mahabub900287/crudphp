<?php
require_once '../inc/heder.php';
 require_once'../bd.php';
 if(isset($_GET['id']) && $_GET['id']!=NULL){
    $id=$_GET['id'];
 }
 $sql="select*from why_us where id='$id'";
 $view=mysqli_query($conn,$sql);

 if(mysqli_num_rows($view)>0){
     $data=mysqli_fetch_assoc($view);
 }
 if(isset($_POST['submit'])){
    $title_one=test_input($_POST['title_one']);
    $discription_one=test_input($_POST['discription_one']);
    $icon_one=test_input($_POST['icon_one']);
    $title_two=test_input($_POST['title_two']);
    $discription_two=test_input($_POST['discription_two']);
    $icon_two=test_input($_POST['icon_two']); 
    $video_url=test_input($_POST['video_url']); 
    $photo=$_FILES['photo'];

    if($photo['name']){
        $ext=explode(".",$photo['name']) ;
        $exp=end( $ext);
        $photoname=$title_one."-".".". $exp;
        $upload=move_uploaded_file($photo["tmp_name"],"../../upload/whyus/".$photoname);
        $ext="../../upload/whyus/".$data['photo'];
        if(file_exists($ext)){
            unlink($ext) ;
          }
          $sql="UPDATE why_us SET title_one='$title_one',discription_one='$discription_one',icon_one='$icon_one', title_two='$title_two',discription_two='$discription_two',icon_two='$icon_two',video_url='$video_url',photo='$photoname' WHERE id=$id";            
          $database=mysqli_query($conn, $sql);
                             if($database){
                                 header("Location:index.php");
                             }else{
                                 echo"samethig is wrong";
                             } 
        }
        else{
            $sql="UPDATE why_us SET title_one='$title_one',discription_one='$discription_one',icon_one='$icon_one', title_two='$title_two',discription_two='$discription_two',icon_two='$icon_two',video_url='$video_url' WHERE id=$id";            
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
                        <div class="col-md-6 pl-4 text-light"><h3>Edit Banners</h3></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="text" name="title_one" class="form-control" value="<?=$data['title_one']?>">
                               </div>
                               <div class="form-group">
                                   <textarea  type="text" name="discription_one" class="form-control"><?=$data['discription_one']?></textarea>
                               </div>
                               <div class="form-group">
                               <select type="text" name="icon_one"  class="form-control" id="">
                                       <option value="bx bx-fingerprint"><?=$data['icon_one']?></option>
                                       <option value="bx bx-gift">bx bx-gift</option>
                                   </select>
                                  
                               </div>
                               <div class="form-group">
                                   <input type="text" name="title_two" class="form-control" value="<?=$data['title_two']?>">
                               </div>
                               <div class="form-group">
                                   <textarea  type="text" name="discription_two" class="form-control"><?=$data['discription_two']?></textarea>
                               </div>
                               <div class="form-group">
                               <select type="text" name="icon_two"  class="form-control" id="">
                                       <option value="bx bx-fingerprint"><?=$data['icon_two']?></option>
                                       <option value="bx bx-gift">bx bx-gift</option>
                                   </select>
                               </div>  
                               <div class="form-group">
                                   <input type="url"name="video_url" class="form-control" value="<?=$data['video_url']?>">
                               </div>
                               <div class="form-group">
                                   <input type="file"name="photo" class="form-control mb-2">
                                   <img src="../../upload/whyus/<?=$data['photo']?>" width="70" height="50" alt="">
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
<?php
require_once '../inc/footer.php';
?>