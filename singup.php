<?php require 'admin/inc/heder.php';
require "admin/bd.php";
if(isset($_POST['submit'])){
    $name=test_input($_POST['name']);
    $uname=test_input($_POST['uname']);
    $email=test_input($_POST['email']);
    $password=test_input($_POST['password']);
         {
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
          }
    $conpassword=test_input($_POST['conpassword']);
    if(empty($name)){
        $_SESSION['nameerr']= "Enter Your Name!";
    }
    // elseif(!preg_match("/^[a-zA-Z]+$/",$name)){
    //     $_SESSION['nameerr'] =$error['name'] = "Only alphabets and whitespace are allowed.!";
    // }
    if(empty($uname)){
        $_SESSION['unameerr'] ="Enter Your User Name!";
    }
    // elseif(!preg_match("/^[a-z 0-9 @]+$/",$uname)) {
    //     $_SESSION['unameerr'] =$error['uname'] = "Only alphabets and number allow!";    
    // }
    if(empty($email)){
        $_SESSION['emailerr']="Enter your email!";
    }elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['emailerr']="Email is not valid.!";
       }
    }
    if(empty($password)){
        $_SESSION['passworderr'] =$error['passworderr']="Enter your password!";
    }elseif(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars){
        $_SESSION['passworderr']= "Password must be at least 8 characters in length and must contain at least one number, 
        one upper case letter, one lower case letter and one special character.!";
    }
   if(empty($password==$conpassword)){
    $_SESSION['conpassworderr']="password not match!";    
    }
   if(!empty($email) && !empty($password) && !empty($name)&& !empty($uname)){  
            $select_email= "SELECT COUNT(*) as email_exist FROM sinup WHERE email='$email'";
            $select_email_result=mysqli_query($conn,$select_email);
            $after_assoc=mysqli_fetch_assoc( $select_email_result);
            if($after_assoc['email_exist']==1){
              $_SESSION['email']="Email is alredy useing.!";
              header("location:singup.php");
            }
    else{
           $sql="INSERT INTO sinup(name,uname,email,password) VALUES ('$name','$uname','$email','$password')";
            $database=mysqli_query($conn, $sql);
            if($database){
               header("location:login.php");
          }
 }
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>



<div class="card-header mt-4  bg-dark">
                        <div class="row">
                        <div class="col-md-6 pl-4 text-light"><h3>Add User</h3></div>
                        <div class="col-md-6 pr-4"><a href="add/add.php"style="float:right;" class="btn btn-info">All User</a></div>
                        </div>
<form action="" method="POST">
       <div class="form-group">
         <input type="text" placeholder="Name" name="name" class="form-control">
       </div>
       <?php 
        if (isset($_SESSION['nameerr'])) {
            echo "<p class='text-danger mr-auto'>" . $_SESSION['nameerr'] . "</p>"; 
                       
        };
       ?>
       <div class="form-group">
         <input type="text" placeholder="Use Name" name="uname" class="form-control">
       </div>
       <?php 
        if (isset($_SESSION['unameerr'])) {
            echo "<p class='text-danger mr-auto'>" . $_SESSION['unameerr'] . "</p>"; 
                       
        };
       ?>
       <div class="form-group">
         <input type="email" placeholder="email" name="email" class="form-control">
       </div>
       <?php 
        if (isset($_SESSION['emailerr'])) {
            echo "<p class='text-danger mr-auto'>" . $_SESSION['emailerr'] . "</p>"; 
                       
        };
        if (isset($_SESSION['email'])) {
          echo "<p class='text-danger mr-auto'>" . $_SESSION['email'] . "</p>"; 
                     
        };
       ?>
       <div class="form-group">
         <input type="password" placeholder="Password" name="password" class="form-control">
       </div>
       <?php 
        if (isset($_SESSION['passworderr'])) {
            echo "<p class='text-danger mr-auto'>" . $_SESSION['passworderr'] . "</p>"; 
                       
        };
       ?>
       <div class="form-group">
         <input type="password" placeholder="Confrim Password" name="conpassword" class="form-control">
       </div>
       <?php 
        if (isset($_SESSION['conpassworderr'])) {
            echo "<p class='text-danger mr-auto'>" . $_SESSION['conpassworderr'] . "</p>"; 
                       
        };
       ?>   
       <div class="form-group">
          <input type="submit"name="submit" value="SUBMIT" class="form-control">
       </div>


</form>
<?php require 'admin/inc/footer.php'?>