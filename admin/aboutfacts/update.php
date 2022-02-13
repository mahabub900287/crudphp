<?php
ob_start();
require_once '../inc/heder.php';
require "../bd.php";
if(isset($_GET['id']) && $_GET['id']!=NULL){
   $id=$_GET['id'];
}
$sql="select*from aboutfacts where id='$id'";
$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)>0){
    $data=mysqli_fetch_assoc($data);
}
if(isset($_POST['submit'])){
    $number=test_input($_POST['number']);
    $title=test_input($_POST['title']);
    if(!empty($number) && !empty($title)){
          $sql="UPDATE aboutfacts SET title='$title',count='$number' WHERE id=$id";            
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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Facts</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Facts</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form method="POST" enctype="multipart/form-data">        
                             <div class="form-group">
                                   <input  type="text" name="title" class="form-control" value="<?=$data['title']?>">
                               </div>
                                <div class="form-group">
                                   <input type="text" name="number" class="form-control" value="<?=$data['count']?>">
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