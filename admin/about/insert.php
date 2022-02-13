<?php
require_once '../inc/heder.php';
?>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-header  bg-success">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>ADD About Section</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All About Section</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form action="about_post.php" method="POST" enctype="multipart/form-data">
                                     
                             <div class="form-group">
                                   <input  type="text" placeholder="Titile" name="titile" class="form-control">
                               </div>
                               <?php 
                                    if (isset($_SESSION['titilerr'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['titilerr'] . "</p>"; 
                                                
                                    };?>
                               <div class="form-group">
                                   <textarea type="text" placeholder="Discriptio One" name="discription_one" class="form-control"></textarea>
                               </div>
                               <div class="form-group">
                                   <input type="text" placeholder="List One" name="list_one" class="form-control">
                               </div>
                               <div class="form-group">
                                   <input type="text" placeholder="List Two" name="list_two" class="form-control">
                               </div>
                               <div class="form-group">
                                   <input type="text" placeholder="List Three" name="list_three" class="form-control">
                               </div>
                               <div class="form-group">
                                   <textarea type="text" placeholder="Discriptio Two" name="discription_two" class="form-control"></textarea>
                               </div>
                               <div class="form-group">
                                   <label for="file"><h4>Image</h4></label>
                                   <input type="file"name="photo" class="form-control">
                               </div>
                               <?php 
                                    if (isset($_SESSION['photo'])) {
                                        echo "<p class='text-danger mr-auto'>".$_SESSION['photo'] . "</p>"; 
                                                
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