<?php
$qurey="SELECT * FROM skills";
$result=mysqli_query($conn, $qurey);
if(mysqli_num_rows($result)>0){
  $datas=mysqli_fetch_assoc($result);
} 
?>

 <!-- ======= Our Skills Section ======= -->
 <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2><?=$datas['title_top']?></h2>
          <p><?=$datas['discription']?></p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$datas['title_one']?><i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$datas['title_two']?><i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$datas['title_three']?><i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$datas['title_four']?><i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->