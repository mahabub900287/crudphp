<?php
require_once '../inc/heder.php';
require "../bd.php";
$qurey="SELECT * FROM tetstimonals";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $datas=mysqli_fetch_all($result,1);
} 
?>
<section>
    <div class="container-fluit">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark mt-5" width="100%">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav px-2" style="font-size:20px;">
                <a class="nav-item nav-link  text-light px-4 active" href="../about/index.php">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link  text-light px-4" href="../aboutfacts/">About Facts</a>
                <a class="nav-item nav-link  text-light px-4" href="../skills/index.php">Skills</a>
                <a class="nav-item nav-link  text-light px-4" href="../tetstimonials/index.php">Tetstimonials</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header  bg-dark">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>All About Facts</h3></div>
                        <div class="col-md-6 pr-4"><a href="insert.php"style="float:right;" class="btn btn-info">Add About Facts</a></div>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th> 
                                <th>Photo</th> 
                                <th>Name</th>                          
                                <th>Title</th>
                                 <th>Discription</th>                   
                                 <th>Status</th>
                            </tr>
                            <tr>
                            <?php 
                           foreach ($datas as $key=>$data){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><img width="50" height="50"style="border-radius:50%;" src="../../upload/tetstimonals/<?=$data['photo'] ?>"alt="no img"></td>
                                <td><?=$data['name']; ?></td>
                                <td><?=$data['title']; ?></td>
                                <td><?=substr($data['discription'],0,20); ?></td>
                                <td class="">
                                     <a href="update.php?id=<?= $data['id'];?>" class="btn btn-info">Eidit</a>
                                     <a href="status.php?id=<?=$data['id'];?>" class="btn btn-primary"><?=$data['status']==1? "Dc":"AC" ?></a>
                                </td>
                            </tr>
                                          
                                <?php 
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