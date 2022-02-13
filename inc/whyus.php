<?php
$qurey="SELECT * FROM why_us";  
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $data=mysqli_fetch_assoc($result);
} 
?>
 
 <!-- ======= Why Us Section ======= -->
 <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="upload/whyus/<?=$data['photo']?>" class="img-fluid" alt="">
            <a href="<?=$data['video_url']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="<?=$data['icon_one']?>"></i></div>
              <h4 class="title"><a href=""><?=$data['title_one']?></a></h4>
              <p class="description"><?=$data['discription_one']?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="<?=$data['icon_two']?>"></i></div>
              <h4 class="title"><a href=""><?=$data['title_two']?></a></h4>
              <p class="description"><?=$data['discription_two']?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
