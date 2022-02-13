<?php 
  $qurey="SELECT * FROM tetstimonals";
  $result=mysqli_query($conn, $qurey);
  if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,1);
  } 
  ?> 
  
  <!-- ======= Tetstimonials Section ======= -->
  <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Tetstimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
          <?php 
         foreach ($datas as $key=>$data){
             if($data['status']==1) {
             ?> 
            <div class="testimonial-item swiper-slide">
              <img src="upload/tetstimonals/<?=$data['photo']?>" class="testimonial-img" alt="">
              <h3><?=$data['name']?></h3>
              <h4><?=$data['title']?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?=$data['discription']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
         <?php
         }
        }
         ?>
           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->