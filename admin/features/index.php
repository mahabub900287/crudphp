<?php
require_once '../inc/heder.php';
require "../bd.php";
$qurey="SELECT * FROM features";
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
                        <div class="col-md-6 pl-4 text-light"><h3>All Features</h3></div>
                        <div class="col-md-6 pr-4"><a href="insert.php"style="float:right;" class="btn btn-info">Add Features</a></div>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th>
                                <th>photo</th>
                                <th>discrip_top</th>
                                <th>titile_one</th>
                                <th>discrip_one</th>
                                <th>list_one</th>
                                <th>list_two</th>
                                <th>discrip_two</th>
                                <th>----------Status--------</th>
                            </tr>
                            <tr>
                            <?php 
                           foreach ($datas as $key=>$data){  
                              ?>
                                <td><?=$data['id']; ?></td>
                                <td><img width="50" height="50"style="border-radius:50%;" src="../../upload/features/<?=$data['photo']; ?>"alt="no img"></td>
                                <td><?=substr($data['discription_top'],0,20)."<a> read more...</a>"?></td>    
                                <td><?=$data['titile_one']; ?></td>
                                <td><?=substr($data['discription_one'],0,20)."<a> read more...</a>"?></td>
                                <td><?=substr($data['list_one'],0,20)."<a> read more...</a>"?></td>
                                <td><?=substr($data['list_two'],0,20)."<a> read more...</a>"?></td>
                                <td><?=substr($data['discription_two'],0,20)."<a> read more...</a>"?></td>
                                <td class="">
                                     <a href="update.php?id=<?= $data['id'];?>" class="btn btn-info">Up</a>
                                     <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger">Dt</a>
                                     <a href="status.php?id=<?=$data['id'];?>" class="btn btn-primary"><?=$data['staus']==1? "Dc":"AC" ?></a>
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