<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php 
 require_once '../inc/heder.php';
 require "../bd.php";
 $qurey="SELECT * FROM baners";
 $result=mysqli_query($conn, $qurey);
 if(mysqli_num_rows($result)>0){
   $datas=mysqli_fetch_all($result,1);
 } 
 
?>
    <div class="container-fluit m-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card1">
                    <div class="card-body">
                        <table class="table table-striped table-bordered p-4 text-center table-dark">
                            <thead>
                            <tr>
                               <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>BtnText</th>
                                <th>BtnUrl</th>
                                <th>Status</th> 
                            </tr>
                            </thead>
                            <?php 
                           foreach ($datas as $key=>$data){  
                            if($data['status']==2){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><img width="50" height="50"style="border-radius:50%;" src="../../upload/image/<?=$data['photo'];?>"alt="no img"></td>
                                <td><?=$data['title']; ?></td>
                                <td><?=substr($data['discription'],0,50)."<a> read more...</a>"?></td>    
                                <td><?=$data['btnurl']; ?></td>
                                <td><?=$data['btntext']; ?></td>
                                <td>
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