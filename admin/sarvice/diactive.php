<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php 
 require_once '../inc/heder.php';
 require "../bd.php";
 $qurey="SELECT * FROM sarvice";
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
                        <div class="col-md-6 pl-4 text-light"><h3>All Sarvice</h3></div>
                        <div class="col-md-6 pr-4"><a href="insert.php"style="float:right;" class="btn btn-info">Add Sarvice</a></div>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Icon_class_name</th>
                                <th>Box_class_name</th>
                                <th>status</th>
                            
                            </tr>
                            <tr>
                            <?php 
                           foreach ($datas as $key=>$data){  
                            if($data['status']==2){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><?=$data['title']; ?></td>
                                <td><?=substr($data['discription'],0,30)."<a> read more...</a>"?></td>    
                                <td><?=$data['icon_class_name']; ?></td>
                                <td><?=$data['box_class_name']; ?></td>
                                <td>
                                     <a href="update.php?id=<?= $data['id'];?>" class="btn btn-info">Up</a>
                                     <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger">Dt</a>
                                     <a href="status.php?id=<?=$data['id'];?>" class="btn btn-primary"><?=$data['status']==1? "Dc":"AC" ?></a>
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
<?php
require_once '../inc/footer.php';
?>