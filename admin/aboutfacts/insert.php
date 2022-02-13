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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Facts</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Facts</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form action="about_post.php" method="POST" enctype="multipart/form-data">        
                             <div class="form-group">
                                   <input  type="text" placeholder="Title" name="title" class="form-control">
                               </div>
                               <?php 
                                    if (isset($_SESSION['titleerr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['titleerr'] . "</p>"; 
                                                
                                    };?>
                                <div class="form-group">
                                   <input type="text" placeholder="number One" name="number" class="form-control">
                               </div> 
                               <?php 
                                    if (isset($_SESSION['numbererr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['numbererr'] . "</p>"; 
                                                
                                    };?>
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