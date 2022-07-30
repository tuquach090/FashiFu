<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-us/style.css">
    <link rel="stylesheet" href="css/model/style.css">
    <link rel="stylesheet" href="js/bootrap-datepicker/css/bootstrap-datepicker3.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="slider/owl.carousel.css" rel="stylesheet">
    <link href="slider/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Page 1 - 9 Style & responsive -->
    <link rel="stylesheet" href="css/page1-9/page1-9-import.css?v=<?php echo time() ?>">
    <!-- Page 10 - 18 Style & responsive -->
    <link rel="stylesheet" href="css/page10-18/page10-18-import.css?v=<?php echo time() ?>">

</head>

<body>

    <!------------------------------Header Start-------------------->


    <header>

        <div class="middle-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 p-0">
                        <div class="site-logo">
                            <img src="images/logo.png">
                        </div>
                        <nav id='cssmenu'>
                            <div id="head-mobile"></div>
                            <div class="button"></div>
                            <ul>
                                <li <?php if ($page == 'home') echo "class='active'" ?>><a href='?page=home'>HOME</a></li>
                                <li <?php if ($page == 'page10') echo "class='active'" ?>><a href='?page=page10'>Sports</a></li>
                                <li <?php if ($page == 'page9') echo "class='active'" ?>><a href='?page=page9'>Live casino</a></li>
                                <li <?php if ($page == 'page11') echo "class='active'" ?>><a href='?page=page11'>Slots</a></li>
                                <li <?php if ($page == 'page18') echo "class='active'" ?>><a href='?page=page18'>4D</a></li>
                                <li><a href='#'>FISHING</a></li>
                                <li class="promotion"><a href='#'>PROMOTIONS</a></li>
                                <div class="bottom-header login-mobile">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="user-form user-form-mobile">
                                                    <form action="/action_page.php">
                                                        <input type="name" id="name" name="username" placeholder="Username">
                                                        <input type="password" id="pwd" name="pwd" minlength="8" placeholder="Password">
                                                        <button class="login-btn " type="login">Login</button>
                                                        <button class="join-btn" type="joinnow">Join Now</button>
                                                    </form>

                                                    <div class="lan">
                                                        <select class="selectpicker" data-width="fit">
                                                            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                                                            <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                                                        </select>
                                                    </div>

                                                    <div class="header-date">
                                                        <p>2022/10/10 00:10:40 (GMT +8)</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-md-3 notify p-0">
                        <div class="looping-here">
                            <a href="#"><i class="fa fa-bullhorn d-block" aria-hidden="true"></i> This is an announcement, looping here.....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-header login-desktop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="user-form">
                            <form action="">
                                <span class="username">{Username}</span>
                                <button type="button" class="join-btn" data-toggle="modal" data-target="#joinIn">LOGOUT</button>
                            </form>

                            <div class="lan">
                                <select class="selectpicker" data-width="fit">
                                    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>EN</option>
                                    <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>ES</option>
                                </select>
                            </div>

                            <div class="header-date">
                                <p>2022/10/10 00:10:40 (GMT +8)</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <div id="content">
        <div class="container-fluid">
            <!-- Sidebar -->
            <?php 
                if($page == 'page16' || $page == 'page17' || $page == 'page18'){
                    echo "";
                }else{
                    require "sidebar-left.php";
                }
            ?>

            <!-- Main-content -->
            <div class="main-content">

            <!-- header main-content -->
                <?php if($page == 'page16' || $page == 'page17' || $page == 'page18'){
                    echo "";
                }else{
                    require "informations.php";
                }  ?>
                
                <div class="content-body">
                    
                <!-- required any Page here -->