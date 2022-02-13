<?php require '../admin/inc/heder.php';
require "../admin/bd.php";
$qurey="SELECT * FROM sinup";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $datas=mysqli_fetch_all($result,1);
} 
?>
<section>
    <div class="container-fluit mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header  bg-dark">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>All User</h3></div>
                        <div class="col-md-6 pr-4"><a href="../singup.php"style="float:right;" class="btn btn-info">Add User</a></div>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Uname</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                            <?php 
                           foreach ($datas as $key=>$data){  
                            if($data['status']==1){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><?=$data['name']; ?></td>
                                <td><?=$data['uname']; ?></td>
                                <td><?=$data['email']; ?></td>
                                <td>
                                     <a href="update.php?id=<?= $data['id'];?>" class="btn btn-info">Update</a>
                                     <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger">Detete</a>
                                     <a href="status.php?id=<?=$data['id'];?>" class="btn btn-primary"><?=$data['status']==1? "Dactive":"Active" ?></a>
                                </td>
                            </tr>
                                          
                                <?php 
                            }
                           }
                           ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require '../admin/inc/footer.php'?>