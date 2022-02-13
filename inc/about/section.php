<?php
$conn = mysqli_connect('localhost', 'root', '','moderna');
$qurey="SELECT * FROM aboutsection";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $data=mysqli_fetch_assoc($result);
} 
?>
 <!-- ======= About Section ======= -->
 <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="upload/about/<?=$data['photo']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          <?php 
          if($data['staus']==1){
        ?>
            <h3><?=$data['title']; ?></h3>
            <p class="fst-italic">
              <?=$data['discription_one']; ?>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i><?=$data['list_one']; ?></li>
              <li><i class="bi bi-check2-circle"></i> <?=$data['list_two']; ?></li>
              <li><i class="bi bi-check2-circle"></i> <?=$data['list_three']; ?></li>
            </ul>
            <p>
            <?=$data['discription_two']; ?></li>
            </p>

            <?php 
          }
          ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->