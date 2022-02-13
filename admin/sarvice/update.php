<link rel="stylesheet" href="../css/bootstrap.min.css">
<main>
<?php 
 require_once'../bd.php';
 if(isset($_GET['id']) && $_GET['id']!=NULL){
    $id=$_GET['id'];
 }
 $sql="select*from sarvice where id='$id'";
 $view=mysqli_query($conn,$sql);

 if(mysqli_num_rows($view)>0){
     $data=mysqli_fetch_assoc($view);
 }
 if(isset($_POST['submit'])){
    $title=test_input($_POST['title']);
    $discription=test_input($_POST['discription']);
    $icon_class_name=test_input($_POST['icon_class_name']);
    $box_class_name=test_input($_POST['box_class_name']);
    if(!empty($title) && !empty($icon_class_name) && !empty($discription) && !empty($box_class_name)){
         $sql="UPDATE sarvice  SET title='$title',discription='$discription',icon_class_name='$icon_class_name', box_class_name='$box_class_name' WHERE id=$id";           
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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD Sarvice</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All Sarvice</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form
                         method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="text" name="title" class="form-control" value="<?=$data['title']?>">
                               </div>
                               <?php
                                    if (isset($_SESSION['title'])) {
                                        echo "<p class='text-danger mr-auto'>" . $_SESSION['title'] . "</p>"; 
                                                   
                                    };
                                    ?>
                               <div class="form-group">
                                   <textarea  type="text"name="discription" class="form-control"><?=$data['discription']?></textarea>
                               </div>
                               <div class="form-group">
                                   
                               <div class="form-group">
                               <select type="text" name="icon_class_name"  class="form-control" id="">
                                       <option value="bx bxl-dribbble"><?=$data['icon_class_name']?></option>
                                       <option value="bx bx-world">bx bx-world</option>
                                       <option value="bx bx-tachometer">bx bx-tachometer</option>
                                       <option value="bx bx-file">bx bx-file</option>
                                   </select>
                                  
                               </div>
                               <?php
                                    if (isset($_SESSION['icon_class_name'])) {
                                        echo "<p class='text-danger mr-auto'>" . $_SESSION['icon_class_name'] . "</p>"; 
                                                   
                                    };
                                    ?>
                               <div class="form-group">
                               <select name="box_class_name"  class="form-control">
                                      <option><?=$data['box_class_name']?></option>
                                       <option>cyan</option>
                                       <option>green</option>
                                       <option>blue</option>
                                   </select>                                 
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