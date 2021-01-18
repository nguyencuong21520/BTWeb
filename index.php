<?php
    require("./getData/getDataAboutme.php");
    require("./getData/getDataSocial.php");
    require("./getData/getDataSkill.php");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Nguyễn Cường</title>
    <meta name="description" content="NgX Cuong CV 2020">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="./img/titlelogo.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./packet/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="./packet/sweetalert2.css">
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="outer">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Safari and others -->
            <div class="infinity">
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <!-- desktop header -->
    <header class="desktop-header-3 fixed-top">

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="./login.php"><img id="logo_" src="./img/logo_white.png"
                        alt="NguyenCuong"></a>
                <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto scrollspy">
                        <li class="nav-item"><a class="nav-link" href="#home">Trang Chủ</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">Giới Thiệu</a></li>
                        <li class="nav-item"><a href="#experience" class="nav-link">Tóm Tắt</a></li>
                        <li class="nav-item"><a href="#works" class="nav-link">Sản Phẩm</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Liên Hệ</a></li>
                    </ul>
                </div>
            </nav>

        </div>

    </header>

    <!-- main layout -->
    <main class="content-3">

        <!-- section home -->
        <section id="home" class="home d-flex align-items-center">
            <div class="container">

                <!-- intro -->
                <div class="intro">
                    <!-- avatar image -->
                    <img src="./img/<?php echo $dataAboutMe['img']?>" alt="Avatar of NgX Cuong" class="mb-4" />

                    <!-- info -->
                    <h1 class="mb-2 mt-0"><?php echo $dataAboutMe['name']?></h1>
                    <span>Mình là <span class="text-rotating"><?php echo $dataAboutMe['shortInfo']?></span></span>

                    <!-- social icons -->
                    <ul class="social-icons light list-inline mb-0 mt-4">

                    <?php
                        foreach($dataSocial as $d){
                            echo "
                            <li class='list-inline-item'><a href='$d[2]'><i class='fab $d[1]'></i></a></li>
                            ";
                        }
                    ?>

                    </ul>

                    <!-- buttons -->
                    <div class="mt-4">
                        <a href="#contact" class="btn btn-default">Liên hệ với tôi</a>
                    </div>
                </div>

                <!-- scroll down mouse wheel -->
                <div class="scroll-down">
                    <a href="#about" class="mouse-wrapper">
                        <span>Cuộn xuống</span>
                        <span class="mouse">
                            <span class="wheel"></span>
                        </span>
                    </a>
                </div>

                <!-- parallax layers -->
                <div class="parallax" data-relative-input="true">

                    <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                            fill="#FFD15C" fill-rule="evenodd" /></svg>

                    <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3"
                            fill="none" fill-rule="evenodd" /></svg>

                    <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                            fill="#44D7B6" fill-rule="evenodd" /></svg>

                    <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                            fill="#FFD15C" fill-rule="evenodd" /></svg>

                    <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                            fill="#6C6CE5" fill-rule="evenodd" /></svg>

                    <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#FF4C60" fill-rule="evenodd">
                            <path
                                d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                            <path
                                d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                        </g>
                    </svg>

                    <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3"
                            fill="none" fill-rule="evenodd" /></svg>

                    <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5"
                            fill="#6C6CE5" fill-rule="evenodd" /></svg>

                    <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                            fill="#6C6CE5" fill-rule="evenodd" /></svg>

                    <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#44D7B6" fill-rule="evenodd">
                            <path
                                d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                            <path
                                d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                        </g>
                    </svg>

                    <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                            fill="#FFD15C" fill-rule="evenodd" /></svg>

                </div>
            </div>

        </section>

        <!-- section about -->
        <section id="about">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Giới Thiệu</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="text-center text-md-left">
                            <!-- avatar image -->
                            <img id="avatar" src="./img/<?php echo $dataAboutMe['img']?>" alt="Avatar of NgX Cuong" />
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-9 triangle-left-md triangle-top-sm">
                        <div class="rounded bg-white shadow-dark padding-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- about text -->
                                    <span class="des">
                                    </span>
                                    <div class="mt-3">
                                        <!-- <form action="./cuongcv.pdf" method="get">
                                            <button type="submit" class="btn btn-default">Tải về CV</button></form> -->
                                        <a href="./cv/<?php echo $dataAboutMe['cv']?>" class="btn btn-default">Tải về CV</a>
                                    </div>
                                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                                </div>
                                <div class="col-md-6">
                                    <!-- skill item -->

                                    <?php
                                        foreach($dataSkill as $d){
                                            echo "
                                            <div class='skill-item'>
                                            <div class='skill-info clearfix'>
                                                <h4 class='float-left mb-3 mt-0'><i class='fab $d[2]'></i>  $d[1]</h4>
                                                <span class='float-right'>$d[3]%</span>
                                            </div>
                                            <div class='progress'>
                                                <div class='progress-bar data-background' role='progressbar'
                                                    aria-valuemin='0' aria-valuemax='100' aria-valuenow='$d[3]'
                                                    data-color='$d[4]'>
                                                </div>
                                            </div>
                                            <div class='spacer' data-height='20'></div>
                                        </div>
                                            ";
                                        }
                                    
                                    ?>
                                    

                                    <!-- skill item -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- row end -->

                <div class="spacer" data-height="70"></div>
                <h2 class="nn_h2_center">Mình có biết về</h2>
                <div class="row">

                    <div class="col-md-3 col-6 wow fadeInUp">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/jquery.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/bootstrap.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/react.svg" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/nodejs.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/firebase.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/sql.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/photoshop.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.8s">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="./img/figma.svg" alt="" />
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </section>


        <!-- section experience -->
        <section id="experience">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Tóm Tắt</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-6">

                        <!-- timeline wrapper -->
                        <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">08/2018 - Nay</span>
                                    <h3 class="title">Sinh viên đại học Thủy Lợi</h3>
                                    <p>Chuyên ngành công nghệ thông tin
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">11/2019 - 05/2020</span>
                                    <h3 class="title">MINDX-TECHNOLOGY & SCHOOL</h3>
                                    <p>Khóa học lập trình Website
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">10/2018 - 12/2018</span>
                                    <h3 class="title">Zent Code</h3>
                                    <p>Khóa học giải thuật C và C++
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">04/2018 - 12/2018</span>
                                    <h3 class="title">Excel English Scholl</h3>
                                    <p>Chương trình học IELTS Buffet Premium
                                    </p>
                                </div>
                            </div>

                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <!-- responsive spacer -->
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                        <!-- timeline wrapper -->
                        <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">07/2020 - Nay</span>
                                    <h3 class="title">MINDX-TECHNOLOGY & SCHOOL</h3>
                                    <p>Part time Team teaching LEADER
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">06/2020 - Nay</span>
                                    <h3 class="title">MINDX-TECHNOLOGY & SCHOOL</h3>
                                    <p>Giảng viên dạy lập trình cho học sinh ở các độ tuổi kid và teen.
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->


                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- section works -->
        <section id="works">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Sản Phẩm</h2>

                <div class="spacer" data-height="40"></div>

                <!-- portfolio filter (desktop) -->


                <!-- portfolio filter (mobile) -->

                <!-- <ul class="portfolio-filter list-inline wow fadeInUp">
                    <li class="current list-inline-item" data-filter="*">Everything</li>
                </ul> -->
                <h4 class="wow fadeInUp">Các pet project mà mình đã làm</h4>
                <!-- portolio wrapper -->
                <div class="row portfolio-wrapper">

                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item creative design wow fadeInUp">
                        <a href="#small-dialog" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">Website</span>
                                    <h4 class="title">Where to go</h4>
                                    <p>Trang web về du lịch</p>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="./img/wtg.png" alt="Trang web du lịhc" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="./img/wtg.png" alt="Title" />
                            <h2>Where to goo</h2>
                            <p>Đây là một trang web về du lịch giúp mọi người có thể truy cập và chia sẽ những địa điểm
                                du lịch, ăn chơi
                                .Trang web cũng sẽ tổng hợp những địa điểm mà mọi người chia sẽ và đưa ra các gợi ý cho
                                mọi người về địa điểm mới
                            </p>
                            <p>Trang web được xây dựng bằng HTML, CSS, JS, Bootstrap, Firebase
                            </p>
                            <a href="https://wheretogoo.github.io/" class="btn btn-default">Truy Cập Where to go</a>
                        </div>
                    </div>

                    <!-- div -->
                    <div class="col-md-4 col-sm-6 grid-item creative design wow fadeInUp">
                        <a href="#small-dialog2" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">Website</span>
                                    <h4 class="title">Eat What</h4>
                                    <p>Trang web ẩm thực</p>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="./img/ew.png" alt="Trang web ẩm thực" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-dialog2" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="./img/ew.png" alt="Title" />
                            <h2>Eat What</h2>
                            <p>Đây là một trang web về du lịch giúp mọi người có thể truy cập và chia sẽ những địa điểm
                                du lịch, ăn chơi
                                .Trang web cũng sẽ tổng hợp những địa điểm mà mọi người chia sẽ và đưa ra các gợi ý cho
                                mọi người về địa điểm mới
                            </p>
                            <p>Trang web được xây dựng bằng HTML, CSS, JS Vanilla
                            </p>

                            <a href="https://cuong-project1.herokuapp.com/" class="btn btn-default">Truy Cập Eat
                                What</a>
                        </div>
                    </div>

                    <!-- MindX-GPA -->
                    <div class="col-md-4 col-sm-6 grid-item creative design wow fadeInUp">
                        <a href="#small-dialog3" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">Website</span>
                                    <h4 class="title">Quizz</h4>
                                    <p>Trang web trả lời câu hỏi tính điểm</p>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="./img/gpa.png" alt="Trang web quizz" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-dialog3" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="./img/gpa.png" alt="Title" />
                            <h2>Quizz</h2>
                            <p>Đây là một trang web về du lịch giúp mọi người có thể truy cập và chia sẽ những địa điểm
                                du lịch, ăn chơi
                                .Trang web cũng sẽ tổng hợp những địa điểm mà mọi người chia sẽ và đưa ra các gợi ý cho
                                mọi người về địa điểm mới
                            </p>
                            <p>Trang web được xây dựng bằng HTML, CSS, JS Vanilla, jQuery
                            </p>

                            <a href="https://mindx-gpa.herokuapp.com/" class="btn btn-default">Truy Cập Quizz</a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 grid-item creative design wow fadeInUp" data-wow-delay="0.3s">

                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">C#, Winform</span>
                                <h4 class="title">Oder Food</h4>
                                <p>Phần mền quản lý bán hàng</p>
                                <span class="more-button"><i class="icon-link"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="./img/pos.png" alt="Pos" />
                                <div class="mask"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 grid-item creative design wow fadeInUp" data-wow-delay="0.3s">

                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Love</span>
                                <h4 class="title">My Love</h4>
                                <p></p>
                                <span class="more-button"><i class="icon-link"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="./img/love.png" alt="Pos" />
                                <div class="mask"></div>
                            </div>
                        </div>

                    </div>


                    <!-- portfolio item -->


                    <!-- portfolio item -->


                    <!-- portfolio item -->


                    <!-- portfolio item -->


                    <!-- portfolio item -->


                </div>

                <!-- more button -->
                <div class="load-more text-center mt-4">
                    <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Tải thêm</a>
                    <!-- numbered pagination (hidden for infinite scroll) -->
                    <ul class="portfolio-pagination list-inline d-none">
                        <li class="list-inline-item">1</li>
                        <li class="list-inline-item"><a href="#">1</a></li>
                    </ul>
                </div>

            </div>

        </section>

        <!-- section prices -->


        <!-- section testimonials -->


        <!-- section blog -->

        <!-- section contact -->
        <section id="contact">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Liên Hệ</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-4">
                        <!-- contact info -->
                        <div class="contact-info">
                            <h3 class="wow fadeInUp">Bạn còn muốn biết thêm gì về mình?</h3>
                            <p class="wow fadeInUp">Đừng ngại ngần liên hệ với mình nhé <a
                                    href="mailto:nguyencuong21520@gmail.com">email</a>. 👋</p>
                        </div>
                    </div>

                    <div class="col-md-8 ">
                        <!-- Contact Form -->
                        <form id="contact-form" class="contact-form mt-6 wow fadeInRight" action="" method="post">

                            <div class="messages"></div>

                            <div class="row">
                                <div class="column col-md-6">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="InputName" id="InputName"
                                            placeholder="Tên của bạn" required="required"
                                            data-error="Tên không được để trống">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                            placeholder="Email" required="required" data-error="Email không được để trống">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="column col-md-12">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                            placeholder="Tiêu đề" required="required" data-error="Tiêu đề không được để trống">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="column col-md-12">
                                    <!-- Message textarea -->
                                    <div class="form-group">
                                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                            placeholder="Tin nhắn" required="required"
                                            data-error="Tin nhắn không được để trống"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Gửi
                                tin nhắn</button><!-- Send Button -->

                        </form>
                        <!-- Contact Form end -->
                    </div>

                </div>

            </div>

        </section>

        <div class="spacer" data-height="96"></div>

        <footer class="footer">
            <div class="container">
                <span class="copyright">@Nguyen Cuong CV 2020</span>
            </div>
        </footer>

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <!-- <script src="./packet/jquery-1.12.3.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./packet/jquery.easing.min.js"></script>
    <script src="./packet/jquery.waypoints.min.js"></script>
    <script src="./packet/jquery.counterup.min.js"></script>
    <script src="./packet/popper.min.js"></script>
    <script src="./packet/bootstrap.min.js"></script>
    <script src="./packet/isotope.pkgd.min.js"></script>
    <script src="./packet/infinite-scroll.min.js"></script>
    <script src="./packet/imagesloaded.pkgd.min.js"></script>
    <script src="./packet/slick.min.js"></script>
    <script src="./js/contact.js"></script>
    <script src="./packet/validator.js"></script>
    <script src="./packet/wow.min.js"></script>
    <script src="./packet/morphext.min.js"></script>
    <script src="./packet/parallax.min.js"></script>
    <script src="./packet/jquery.magnific-popup.min.js"></script>
    <script src="./packet/sweetalert2.all.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./packet/typed.min.js"></script>
    
    <script>
        let description = "<?php echo $dataAboutMe['description']?>";
        var typed = new Typed('.des', {
            strings: ['', description
            ],
            typeSpeed: 80,
            backSpeed: 60,
            loop: false,
            backDelay: 1000,
        });
        function sweetAlert(icon, content) {
         const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
           })

       Toast.fire({
        icon: icon,
        title: content
       })
}   

        $('#contact-form').on('submit', function (e) {
            e.preventDefault()

            var name = $("#InputName");
            var email = $("#InputEmail");
            var subject = $("#InputSubject");
            var body = $("#InputMessage");
            var time = new Date()

            $.ajax({
                url: './sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val(),
                    time: time
                },
                success: function (data) {
                    sweetAlert(data.status,data.response);
                    console.log("alo")
                    console.log(data)
                }
            });
            return false;

        })
    </script>


</body>

</html>