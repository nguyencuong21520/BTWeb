<?php
include('loginProcess.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/loginout.css">


</head>
<body>
<div class="container">

    <div class="col-md-4 col-sm-6 sign_wrap">
    <a href="./index.php"><h2 style="text-align:center"><i class="fas fa-home-lg-alt"></i></h2></a>
        <h1>Đăng Nhập</h1>
        <div class="space-40"></div>
        <form action="" method="post">
            <div  class="form-group" >
                <label for="exampleInputEmail1">Email</label>
                <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Nhập email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password">
            </div>
            <p class="error"><?php echo $error; ?></p>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <input name="submit" class="btn btn-primary" type="submit" value=" Đăng Nhập ">
            <div class="space-40"></div>
            <p>Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a></p>
        </form>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>

</html>