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
                        <div class="col-md-6 pl-4 text-light"><h3>ADD Sarvice</h3></div>
                        <div class="col-md-6 pr-4"><a href="index.php"style="float:right;" class="btn btn-dark">All Sarvice</a></div>
                        </div>
                    </div>
                    <div class="card-boby mt-2">
                        <form action="sarvice_post.php" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="text" placeholder="Title" name="title" class="form-control">
                               </div>
                               <?php
                                    if (isset($_SESSION['title'])) {
                                        echo "<p class='text-danger mr-auto'>" . $_SESSION['title'] . "</p>"; 
                                                   
                                    };
                                    ?>
                               <div class="form-group">
                                   <textarea  type="text" placeholder="Discription" name="discription" class="form-control"></textarea>
                               </div>
    
                               <div class="form-group">
                               <select type="text" name="icon_class_name"  class="form-control" id="">
                                       <option value="bx bxl-dribbble">bx bxl-dribbble</option>
                                       <option value="bx bx-world">bx bx-world</option>
                                       <option value="bx bx-tachometer">bx bx-tachometer</option>
                                       <option value="bx bx-file">bx bx-file</option>
                                   </select>
                                  
                               </div>
                               <?php
                                    if (isset($_SESSION['icon_class_name'])) {
                                        echo "<p class='text-danger mr-auto'>" . $_SESSION['icon_class_name'] . "</p>"; 
                                                   
                                    };
                                    ?>
                               <div class="form-group">
                               <select type="text" name="box_class_name"  class="form-control" id="">
                                       <option value="pink">pink</option>
                                       <option value="cyan">cyan</option>
                                       <option value="green">green</option>
                                       <option value="blue">blue</option>
                                   </select>
                                  
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