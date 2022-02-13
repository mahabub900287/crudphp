<!DOCTYPE html>
<?php 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontaswam/css/all.css">
    <title>Document</title>
    <style>
        body{
            background-image:url("assets/img/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
        }
        .card1{
            margin-top:90px;
            background:rgba(0,0,0,0.5);
    }
        .card1 img{
            height:120px;
            width:120px;
            padding:10px;
            display: block;
            border-radius:50%;
            margin: 0px auto;
        }
    </style>
</head>
<body>
<h4 class="bg-info text-white p-4 text-center m-0">LOGIN PAGE</h4>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto my-auto">
            <div class="card1">
                <div class="card-body">
                    <img width="50" src="upload/image.jpeg" alt="">
                    <form action="login_submit.php" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div> 
                            <input class="form-control" type="text" name="email" placeholder="Enter Your user name:">
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        </div> 
                        <input class="form-control" type="password" name="password" placeholder="Enter Your Password:">
                        </div>
                        <button type="submit" class="btn btn-info btn-lg btn-block" name="login">LOGIN</button>
                        <p class="text-light p-2">Don't have an accound?   ----<a class="text-praimary" href="singup.php">Registration</a></p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>