<?php 
  $qurey="SELECT * FROM sarvice_details";
  $result=mysqli_query($conn, $qurey);
  if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,1);
  } 
  ?> 
  
  <section class="service-details">
      <div class="container">

        <div class="row">
        <?php   
                foreach ($datas as $data){
                if($data['status']==1){  
           ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <img src="upload/details/<?=$data['photo']?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?=$data['title']?></a></h5>
                <p class="card-text"><?=$data['discription']?></a></p>
                <div class="read-more"><a href="<?=$data['btn_url']?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <?php 
                }
              }
              ?>
   
        </div>

      </div>
    </section><!-- End Service Details Section -->