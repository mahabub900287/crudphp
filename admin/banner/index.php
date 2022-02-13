<?php
require_once '../inc/heder.php';
require "../bd.php";
$qurey="SELECT * FROM baners";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $datas=mysqli_fetch_all($result,1);
} 
?>
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-dark mt-5" width="100%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav px-2" style="font-size:20px;">
      <a class="nav-item nav-link  text-light px-4 active" href="../banner/index.php">Banner<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link  text-light px-4" href="../sarvice/index.php">Sarvice</a>
      <a class="nav-item nav-link  text-light px-4" href="../whyus/index.php">Why Us</a>
      <a class="nav-item nav-link  text-light px-4" href="../features/index.php">Features</a>
    </div>
  </div>
</nav>
    <div class="container-fluit">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header  bg-dark">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>All Banners</h3></div>
                        <div class="col-md-6 pr-4">
                            <a href="insert.php"style="float:right;" class="btn btn-info">Add Banner</a>
                            <a href="diactive.php"style="float:right;" class="btn btn-success mr-2">Diactive</a>
                       </div>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>BtnText</th>
                                <th>BtnUrl</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                            <?php 
                           foreach ($datas as $key=>$data){  
                            if($data['status']==1){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><img width="50" height="50"style="border-radius:50%;" src="../../upload/image/<?=$data['photo'];?>"alt="no img"></td>
                                <td><?=$data['title']; ?></td>
                                <td><?=substr($data['discription'],0,50)."<a> read more...</a>"?></td>    
                                <td><?=$data['btnurl']; ?></td>
                                <td><?=$data['btntext']; ?></td>
                                <td>
                                     <a href="update.php?id=<?= $data['id'];?>" class="btn btn-info">Up</a>
                                     <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger">Dt</a>
                                     <a href="view.php?id=<?=$data['id'];?>" class="btn btn-primary">Vw</a>
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