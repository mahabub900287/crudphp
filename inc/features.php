<?php
$qurey="SELECT * FROM features";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $datas=mysqli_fetch_all($result,1);
} 
?>
 
 <!-- ======= Features Section ======= -->
 <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Features</h2>
          </div>
  <?php 
      foreach ($datas as $key=>$data){  
        if($data['id']%2==1){
          if($data['staus']==1){
        ?>
          <p><?=$data['discription_top']; ?></p>
        <div class="row pd-4" data-aos="fade-up">
          <div class="col-md-5">
            <img src="upload/features/<?=$data['photo']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?=$data['titile_one']; ?></h3>
            <p class="fst-italic">
            <?=$data['discription_one']; ?>
            </p>
            <ul>
              <li><i class="bi bi-check"></i>  <?=$data['list_one']; ?></li>
              <li><i class="bi bi-check"></i>  <?=$data['list_two']; ?></li>
            </ul>
          </div>
        </div>
       <?php 
        }
      }
        if($data['id']%2==0){
          if($data['staus']==1){
       ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <img src="upload/features/<?=$data['photo']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3><?=$data['titile_one']; ?></h3>
            <p class="fst-italic">
            <?=$data['discription_one']; ?>
            </p>
            <p>
            <?=$data['discription_two'];?>
            </p>
          </div>
        </div>
        <?php 
        }
      }
      }
      ?>
      </div>
    </section><!-- End Features Section -->