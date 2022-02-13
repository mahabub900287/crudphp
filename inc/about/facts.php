<?php 
  require "admin/bd.php";
  $qurey="SELECT * FROM aboutfacts";
  $result=mysqli_query($conn, $qurey);
  if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,1);
  } 
  ?> 
<!-- ======= Facts Section ======= -->
<section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">
        <?php 
         foreach ($datas as $key=>$data){ 
             ?> 
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?=$data['count'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$data['title'] ?></p>
          </div>
        <?php
         }
        ?>
        </div>

      </div>
    </section><!-- End Facts Section -->