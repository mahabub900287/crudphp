<?php
ob_start();
require_once '../inc/heder.php';
require "../bd.php";
if(isset($_GET['id']) && $_GET['id']!=NULL){
   $id=$_GET['id'];
}
$sql="select*from aboutsection where id='$id'";
$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
}
if(isset($_POST['submit'])){
    $titile=test_input($_POST['title']);
    $discription_one=test_input($_POST['discription_one']);
    $list_one=test_input($_POST['list_one']);
    $list_two=test_input($_POST['list_two']);
    $list_three=test_input($_POST['list_three']);
    $discription_two=test_input($_POST['discription_two']);  
    $photo=$_FILES['photo'];
    if(!empty($photo['name'])){
        $ext=explode(".",$photo['name']);
        $exp=end($ext);
        $photoname=substr($titile,0,5)."-".".". $exp;
        $upload=move_uploaded_file($photo["tmp_name"],"../../upload/about/".$photoname);
        print_r($upload);
        $ext="../../upload/about/".$data['photo'];
        // if(file_exists($ext)){
        //     unlink($ext) ;
        //   }
          $sql="UPDATE aboutsection SET title='$titile',discription_one='$discription_one', list_one='$list_one',list_two='$list_two',list_three='$list_three',discription_one='$discription_one',photo='$photoname' WHERE id=$id";            
          $database=mysqli_query($conn, $sql);
                             if($database){
                                header("Location:index.php");
                             }else{
                                 echo"samethig is wrong";
                             }  
    }else{
        $sql="UPDATE aboutsection SET title='$titile',discription_one='$discription_one', list_one='$list_one',list_two='$list_two',list_three='$list_three',discription_one='$discription_one'WHERE id=$id";             
        $database=mysqli_query($conn, $sql);
                           if($database){
                            header("Location:index.php");
                            ob_end_flush();

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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD Features</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All Features</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">
                                       
                             <div class="form-group">
                                   <input  type="text" name="title" class="form-control"  value="<?=$data['title']?>">
                               </div>
                               <div class="form-group">
                                   <input type="text" name="discription_one" class="form-control"  value="<?=$data['discription_one']?>">
                               </div>
                               <div class="form-group">
                                   <input type="text"name="list_one" class="form-control" value="<?=$data['list_one']?>" >
                               </div>
                               <div class="form-group">
                                   <input type="text"name="list_two" class="form-control" value="<?=$data['list_two']?>">
                               </div>
                               <div class="form-group">
                                   <input type="text"name="list_three" class="form-control" value="<?=$data['list_three']?>">
                               </div>
                               <div class="form-group">
                                   <input type="text" name="discription_two" class="form-control" value="<?=$data['discription_two']?>">
                               </div>
                               <div class="form-group">
                                   <label for="file"><h4>Image</h4></label>
                                   <input type="file"name="photo" class="form-control" value="<?=$data['photo']?>">
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