<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php 
 require_once '../inc/heder.php';
 require "../bd.php";
 if(isset($_GET['id']) && $_GET['id']!=NULL){
    $id=$_GET['id'];
 }
 $sql="select*from baners where id='$id'";
 $view=mysqli_query($conn,$sql);
 if(mysqli_num_rows( $view)>0){
     $data=mysqli_fetch_assoc($view);
 }
?>
<main>
    <div class="container mt-2">
        <div class="row">
        <div class="col-md-4 p-0 m-0 ">
            <div class="view-img">
           <h4 class="bg-dark mr-auto">
               <img height="200" width="300" style="border-radius:50%;padding-left:15px" src="../../upload/image/<?=$data['photo'];?>"alt=""></h4>
           </div>
        </div>   
            <div class="col-md-8 p-0 m-0">              
                            <table  height="200" class="table table-dark table-striped table-bordered">
                                <tr>
                                    <th>Title:</th>
                                    <td><?php echo $data['title']?></td>
                                </tr>
                                <tr>
                                    <th>Discription:</th>
                                    <td><?php echo $data['discription']?></td>
                                </tr>
                            </table>             
                </div>
            </div>
        </div>
    </div>
</main>
<?php  require_once '../inc/footer.php';?>