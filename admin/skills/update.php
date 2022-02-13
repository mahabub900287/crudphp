<?php
ob_start();
require_once '../inc/heder.php';
require "../bd.php";
if(isset($_GET['id']) && $_GET['id']!=NULL){
   $id=$_GET['id'];
}
$sql="select*from skills where id='$id'";
$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
}
if(isset($_POST['submit'])){
    $title_top=test_input($_POST['title_top']);
    $discription=test_input($_POST['discription']); 
    $title_one=test_input($_POST['title_one']);
    $title_two=test_input($_POST['title_two']);
    $title_three=test_input($_POST['title_three']); 
    $title_four=test_input($_POST['title_four']);   
    if(!empty($title_top) && !empty($discription)  && !empty($title_one)){
          $sql="UPDATE skills SET title_top='$title_top',discription='$discription',title_one='$title_one',title_two='$title_two',title_three='$title_three',title_four='$title_four' WHERE id=$id";            
          $database=mysqli_query($conn,$sql);
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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Skills</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Skills  75 </a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">        
                             <div class="form-group">
                                   <input  type="text"  name="title_top" class="form-control"  value="<?=$data['title_top']?>">
                               </div>
                             
                                <div class="form-group">
                                   <textarea type="text" name="discription" class="form-control"><?=$data['discription']?></textarea>
                               </div> 
                              
                                <div class="form-group">
                                   <input  type="text" name="title_one" class="form-control" value="<?=$data['title_one'] ?>">
                               </div>
                              
                                <div class="form-group">
                                   <input  type="text"  name="title_two" class="form-control" value="<?=$data['title_two'] ?>">
                               </div>  
                               <div class="form-group">
                                   <input  type="text" name="title_three" class="form-control"value="<?=$data['title_three'] ?>">
                               </div>  
                               <div class="form-group">
                                   <input  type="text" name="title_four" class="form-control" value="<?=$data['title_four']?>">
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