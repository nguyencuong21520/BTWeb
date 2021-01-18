<?php
    require("getCurrentName.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Cv Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../img/titlelogo.png">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <style>
        body{
            /* font-family: 'Roboto', sans-serif !important; */
            font-family: 'Roboto', sans-serif;
        }
        .log-out span{
            margin-left: 20px;
            border-left: 2px solid white;
            padding-left: 20px;
            cursor: pointer;
        }
        .navbar-nav{
            padding: 0px 50px;
        }
        .add{
            width: 150px;
        }
        .table-responsive{
            margin-top: 50px;
        }
        .strong-text{
            font-weight: 500;
        }
        .color-white{
            color: white !important;
        }
        .btn a{
            color: white !important;
        }
        td i{
            margin: 0px 7px
        }
        .borderr{
            border-left: 5px solid #F33155;

        }
        .img-av{
            height: 150px;
    width: 150px;
    display: block;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="../index.php">
                        <b class="logo-icon">
                            <img height="50px" src="../img/logo_black.png" alt="homepage" />
                        </b>
                    </a>
                </div>

                <div class="navbar-collapse collapse" data-navbarbg="skin5">
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li>
                            <span class="text-white font-medium">Xin Chào, <?php echo $currentUserName ?></span>
                        </li>
                        <li class="log-out">
                           <a href="../logout.php"> <span class="text-white">Đăng Xuất</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
