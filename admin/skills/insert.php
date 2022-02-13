<?php
session_start();
require_once '../inc/heder.php';
?>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-header  bg-success">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Skills</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Skills  75 </a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form action="about_post.php" method="POST" enctype="multipart/form-data">        
                             <div class="form-group">
                                   <input  type="text" placeholder="Title Top" name="title_top" class="form-control">
                               </div>
                               <?php 
                                    if (isset($_SESSION['titlerr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['titilerr'] . "</p>"; 
                                                
                                    };?>
                                <div class="form-group">
                                   <textarea type="text" placeholder="Discription" name="discription" class="form-control"></textarea>
                               </div> 
                               <?php 
                                    if (isset($_SESSION['numbererr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['numbererr'] . "</p>"; 
                                                
                                    };?>
                                <div class="form-group">
                                   <input  type="text" placeholder="Title One" name="title_one" class="form-control">
                               </div>
                               <?php 
                                    if (isset($_SESSION['titlerr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['titilerr'] . "</p>"; 
                                                
                                    };?>
                                <div class="form-group">
                                   <input  type="text" placeholder="Title two" name="title_two" class="form-control">
                               </div>  
                               <div class="form-group">
                                   <input  type="text" placeholder="Title Three" name="title_three" class="form-control">
                               </div>  
                               <div class="form-group">
                                   <input  type="text" placeholder="Title Four" name="title_four" class="form-control">
                               </div>   
                               <div class="form-group">
                                   <input type="submit"name="submit" value="SUBMIT" class="form-control">
                               </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once '../inc/footer.php';
?>