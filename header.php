<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="blog, lil, visions, wave, misfits">
    <meta name="description" content="blog lifestyles lessons">
    <meta name="author" content="demartirx mobby">
   



    
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans%7COpen+Sans&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assests/img/doo.jpg" type="image/jpg">
    
    


    <?php

    wp_head();

    ?>


    <style>
      html  { margin-top: 0px !important; }
    </style>

    <script src="assests/js/font_awesome.js" defer></script>
    <script src="assests/js/jquery.min.js"></script>
    <script src="assests/js/script.js" defer></script></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="top">
    
    <header>       
        <div class="top-header d-flex justify-content-between align-items-center">
            <a href="index.html" class="logo">WAVE BLOGS</a>
            <div class="sign-up one">
                <ul class="account-links">
                    <li><a href="#"><i class=" fas fa-user"></i> login</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#"><i class=" fas fa-hand-point-right"></i> Subscribe</a></li>
                </ul>
            </div>  
            <div class="barmenu-container">
                <ul class="bar-container">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>          
        <nav>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary'
                )
            );


        ?>
            <ul>
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="#">Philosophic Works</a>
                    <ul>
                        <li><a href="#">Spectical poems</a></li>
                        <li><a href="#">Nostaglic album</a></li>
                        <li><a href="#">Spectical mindsets</a></li>
                    </ul>
                </li>
                <li><a href="pages/poems.html">Poetism and lyricism </a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Essays</a></li>
                <li><a href="#">Podcast</a></li>
            </ul>
        </nav> 
        
        
        <div class="mobileNav">
            <ul>
                <li><a href="./index.html" class="current">Home</a></li>
                <li><a href="#">Philosophic Works</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Poetism and lyricism</a></li>
                <li><a href="#">Photography</a></li>
                
            </ul>
        </div>
    </header>