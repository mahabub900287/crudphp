<?php 
  $qurey="SELECT * FROM sarvice";
  $result=mysqli_query($conn, $qurey);
  if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,1);
  } 
  ?> 
  
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="row">
                 <?php   
                foreach ($datas as $key=>$data){
                if($data['status']==1){  
            ?>
   
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-<?=$data['box_class_name']?>">
              <div class="icon"><i class="<?=$data['icon_class_name']?>"></i></div>
              <h4 class="title"><a href=""><?=$data['title']?></a></h4>
              <p class="description"><?=$data['discription']?></a></p>
            </div>
          </div>

       <?php 

                }
            }
                ?>
        </div>

      </div>
    </section><!-- End Services Section -->