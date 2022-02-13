<?php
require_once '../inc/heder.php';
require "../bd.php";
$qurey="SELECT * FROM why_us";  
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $data=mysqli_fetch_assoc($result);
} 
?>
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-dark mt-5" width="100%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav px-2" style="font-size:20px;">
      <a class="nav-item nav-link  text-light px-4 active" href="../sarvice/index.php">Sarvice<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link  text-light px-4" href="../whyus/index.php">Why Us</a>
      <a class="nav-item nav-link  text-light px-4" href="../ServiceDetails/index.php">Service Details</a>     
    </div>
  </div>
</nav>
    <div class="container-fluit ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header  bg-dark">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>All Why US</h3></div>         
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Video Url</th>
                                <th>Title_One</th>
                                <th>Discription_One</th>
                                <th>Icon_One</th>
                                <th>Title_Two</th>
                                <th>Discription_Two</th>
                                <th>Icon_Two</th>
                                <th>status</th>
                            
                            </tr>
                            <tr>
                           
                                <td><?=$data['id']; ?></td>
                                <td><img width="50" height="50"style="border-radius:50%;" src="../../upload/whyus/<?=$data['photo'];?>"alt="no img"></td>
                                <td><?=$data['video_url']; ?></td>
                                <td><?=$data['title_one']; ?></td>
                                <td><?=substr($data['discription_one'],0,30)."<a> read more...</a>"?></td>    
                                <td><?=$data['icon_one']; ?></td>
                                <td><?=$data['title_two']; ?></td>
                                <td><?=substr($data['discription_two'],0,30)."<a> read more...</a>"?></td>    
                                <td><?=$data['icon_two']; ?></td>
                                <td>
                                     <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-info">Eidit</a>
                                    
                                </td>
                            </tr>
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