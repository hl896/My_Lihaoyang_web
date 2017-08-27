<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 13/07/2017
 * Time: 8:48 AM
 */


?>

<!DOCTYPE html>
<html>
<head>
    <title>Yang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <script src="http://www.5imoban.net/download/jquery/jquery-1.11.0.min.js"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!-- dropdown -->
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/scripts.js" type="text/javascript"></script>
    <!--js-->
    <!--/js-->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- slider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <!-- slider -->
</head>
<body>
<div id="home" class="header">
    <div class="header-top">
        <!-- container -->
        <div class="container">
            <div class="top-nav">
                <ul class="nav1">
                    <li><a href="login.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right">
                <p>Subscribe by <a href="#">RSS</a> or <a href="mailto:example@email.com">Emaiil</a> for updates!
            </div>
            <div class="clearfix"> </div>
            <!-- script-for-menu -->
        </div>
        <!-- //container -->
    </div>
    <div class="container">
        <div class="header-bottom">
            <!-- container -->

            <div class="head-logo">
                <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
            </div>
            <div class="logo-right">
                <img src="images/468x60.gif" class="img-responsive" alt="" />
            </div>
            <div class="clearfix"> </div>

            <!-- //container -->
        </div>
    </div>
</div>
<!-- //header -->
<!-- bg-banner -->
<div class="container">
    <div class="bg-banner">
        <div class="banner-bottom-bg">
            <div class="banner-bg">

                <!-- banner -->
                <div class="banner">
                    <div class="banner-grids">
                        <div class="banner-top">
                            <span class="menu">MENU</span>
                            <ul class="nav banner-nav">
                                <li class="dropdown1"><a href="index.php">Home</a></li>
                                <li class="dropdown1"><a href="culture.php">Culture</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="lifestyle.php">Lifestyle</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="archives.php">Archives</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="sports.php">Sport</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="travel.php">Travel</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="celebrity.php">Celebrity</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="fullwidth.php">Full Width </a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="404.php">World News</a>
                                    <ul class="dropdown2">
                                        <li><a href="lifestyle.php">Lifestyle</a></li>
                                        <li><a href="archives.php">Archives</a></li>
                                        <li><a href="fullwidth.php">Fullwidth</a></li>
                                        <li><a href="404.php">Worldnews</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1"><a href="contact.php">Contact</a></li>
                            </ul>
                            <script>
                                $("span.menu").click(function(){
                                    $(" ul.nav").slideToggle("slow" , function(){
                                    });
                                });
                            </script>
                        </div>
                        <div class="banner-middle">
                            <!-- contact -->
                            <div class="contact">
                                <h2>Our Location</h2>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBdVXKFS8bnjP1jZQO-iby1Mp_UMfaZh2k&q=Burwood,Sydney+Australiafmap" frameborder="0" style="border:0"></iframe>
                                </div>
                                <div class="mail-info-grids">
                                    <div class="col-md-6 mail-info-grid">
                                        <h3>Contact Information</h3>
                                        <p>In pharetra dui vitae odio maximus vulputate. Nul
                                            am finibus dui more neque dui vitae odio maximu.
                                            In pharetra dui vitae odio maximus vulputate. Null
                                            finibus dui more neque.odio maximus vulputate.
                                            Nulla odio maximus vulputate. Nulla odio maxi.
                                        </p>
                                        <h6>The Company Name agi.
                                            <span>756 gt globel Place,</span>
                                            CD-Road,M 07 435.
                                        </h6>
                                        <p>Telephone: +1 234 567 9871
                                            <span>FAX: +1 234 567 9871</span>
                                            E-mail: <a href="mailto:info@example.com">mail@example.com</a>
                                        </p>
                                    </div>
                                    <div class="col-md-6 contact-form">
                                        <form>
                                            <input type="text" placeholder="Name" required="">
                                            <input type="text" placeholder="Email" required="">
                                            <input type="text" placeholder="Subject" required="">
                                            <textarea placeholder="Message" required></textarea>
                                            <input type="submit" value="SEND">
                                        </form>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <!-- //contact -->
                        </div>
                    </div>
                </div>
                <!-- //banner -->
            </div>
        </div>
    </div>
    <div class="up-arrow">
        <div class="up-arrow-left">
            <ul>
                <li><a href="404.php">Elements</a></li> //
                <li><a href="fullwidth.php">Full Width </a></li> //
                <li><a href="archives.php">Archives</a></li> //
                <li><a href="contact.php">Contact Form</a></li> //
                <li><a href="404.php">Another 3.0 Menu</a></li>
            </ul>
        </div>
        <div class="up-arrow-right">
            <a class="scroll" href="#home">Back to Top</a>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //bg-banner -->
    <div class="footer">
        <!-- container -->
        <div class="footer-grids">

            <div class="col-md-4 viewport">
                <h3>关于<a href="http://www.google.com" target="_blank" title="link">relative link</a></h3>
                <p>test content
                    <span>testing testing<a href="http://www.google.net/" target="_blank" title="google.com.au">testing</a>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
                            testtesttesttesttesttest
                </p>
            </div>
            <div class="col-md-4 recent-posts footer-left">
                <h3>最新文章</h3>
                <ul>
                    <li><a target="_blank" href="http://www.baidu.com">Baidu</a></li>
                    <li><a target="_blank" href="http://www.sina.com">Sina</a></li>
                    <li><a target="_blank" href="http://www.google.com">Google</a></li>
                    <li><a target="_blank" href="http://www.qq.com">Tecent QQ</a></li>
                    <li><a target="_blank" href="http://www.qq,com">Tencent QQ -v 2.0.0</a></li>
                    <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/2013123198.html">蓝色+暗灰色印刷企业站dedecms模版</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer-flick">
                <h3>Flickr Photostream</h3>
                <div class="fb-page" data-href="https://www.facebook.com/网页模板" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/网页模板">Facebook</a></blockquote></div></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
            </div>
            <div class="clearfix"> </div>
            <div class="copyright">
                <p><a href="http://www.facebook.net/" target="_blank" title="facebook">facebook</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
