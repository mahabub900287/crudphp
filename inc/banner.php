  <?php 
  require "admin/bd.php";
  $qurey="SELECT * FROM baners";
  $result=mysqli_query($conn, $qurey);
  if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,1);
  } 
  ?> 
  <style>
  .img{
    height:95vh;
    width:100%;
    overflow:hidden;
    background-image:linear-gradient(rgba(0, 0, 255, 0.5));
    border-radius: 0 0 40% 40%;
    
   }
   .carousel-item::after{
    content: '';
    position: absolute;
    width: 100%;
    height:100%;
    top:0;
    left:0;
    border-radius: 0 0 30% 30%;
    background-color: rgba(0, 0, 0, 0.4);
   }
  </style>
  
  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <!-- Slide 1 -->
      <?php 
      
        foreach ($datas as $key=>$data){
        if($data['status']==1){  
     ?>
     
      <div class="carousel-item <?=$key==0? "active":""?>">
      <img class="img" src="upload/image/<?=$data['photo']?>" alt="slide">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animate__animated animate__fadeInDown"><?=$data['title'] ?></h2>
          <p class="animate__animated animate__fadeInUp "><?=$data['discription'] ?></p>
          <a href="<?=$data['btnurl'] ?>" class="btn-get-started animate__animated animate__fadeInUp btn-info"><?=$data['btntext'] ?></a>
        </div>
      </div>
      <?php 
      }
    }
      ?>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  