<?php
include("../Db_Connection/connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.png">

    <meta name="author" content="codepixer">

    <meta name="description" content>

    <meta name="keywords" content>

    <meta charset="UTF-8">

    <title>Home - Delivio</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/hexagons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <?php include("navbar.html"); ?>


    <section class="home-banner-area">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="home-banner-content col-lg-6 col-md-6">
                    <h1>
                        App That <br> Suits You Better
                    </h1>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards.</p>
                    <div class="download-button d-flex flex-row justify-content-start">
                        <div class="buttons flex-row d-flex">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="buttons dark flex-row d-flex">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-img col-lg-4 col-md-6">
                    <img class="img-fluid" src="img/banner-img.png" alt>
                </div>
            </div>
        </div>
    </section>


    <section class="fact-area">
        <div class="container">
            <div class="fact-box">
                <div class="row align-items-center">
                    <div class="col single-fact">
                        <h2>100K+</h2>
                        <p>Total Downloads</p>
                    </div>
                    <div class="col single-fact">
                        <h2>10K+</h2>
                        <p>Positive Reviews</p>
                    </div>
                    <div class="col single-fact">
                        <h2>50K+</h2>
                        <p>Daily Visitors</p>
                    </div>
                    <div class="col single-fact">
                        <h2>0.02%</h2>
                        <p>Uninstallation Rate</p>
                    </div>
                    <div class="col single-fact">
                        <h2>15K+</h2>
                        <p>Pro User</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area section-gap-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Unique Features</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-book"></span>
                            <h3>Expert Technicians</h3>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-book"></span>
                            <h3>Professional Service</h3>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-book"></span>
                            <h3>Great Support</h3>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 home-about-left">
                    <img class="img-fluid" src="img/iphone.png" alt>
                </div>
                <div class="offset-lg-1 col-lg-5 home-about-right">
                    <h1>
                        We Believe that <br>
                        Interior beautifies the <br>
                        Total Architecture
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.Ut
                        enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <a class="primary-btn text-uppercase" href="#">Get Details</a>
                </div>
                <div class="col-lg-6 home-about-right home-about-right2">
                    <h1>
                        We Believe that <br>
                        Interior beautifies the <br>
                        Total Architecture
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.Ut
                        enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <div class="download-button d-flex flex-row justify-content-start">
                        <div class="buttons flex-row d-flex">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="buttons dark flex-row d-flex">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 home-about-left">
                    <img class="img-fluid" src="img/iphone.png" alt>
                </div>
            </div>
        </div>
    </section>


    <section class="about-video-area section-gap">
        <div class="vdo-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 about-video-right justify-content-center align-items-center d-flex relative">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play-btn.png" alt></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials-area section-gap-top">
        <div class="container">
            <div class="testi-slider owl-carousel" data-slider-id="1">
                <div class="item">
                    <div class="testi-item">
                        <img src="img/quote.png" alt>
                        <h4>Fanny Spencer</h4>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth.
                                If you think about it,
                                you travel
                                across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-item">
                        <img src="img/quote.png" alt>
                        <h4>Fanny Spencer</h4>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth.
                                If you think about it,
                                you travel
                                across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-item">
                        <img src="img/quote.png" alt>
                        <h4>Fanny Spencer</h4>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth.
                                If you think about it,
                                you travel
                                across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-item">
                        <img src="img/quote.png" alt>
                        <h4>Fanny Spencer</h4>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth.
                                If you think about it,
                                you travel
                                across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                <div class="owl-thumb-item">
                    <div>
                        <img class="img-fluid" src="img/testimonial/t1.jpg" alt>
                    </div>
                    <div class="overlay overlay-grad"></div>
                </div>
                <div class="owl-thumb-item">
                    <div>
                        <img class="img-fluid" src="img/testimonial/t2.jpg" alt>
                    </div>
                    <div class="overlay overlay-grad"></div>
                </div>
                <div class="owl-thumb-item">
                    <div>
                        <img class="img-fluid" src="img/testimonial/t3.jpg" alt>
                    </div>
                    <div class="overlay overlay-grad"></div>
                </div>
                <div class="owl-thumb-item">
                    <div>
                        <img class="img-fluid" src="img/testimonial/t4.jpg" alt>
                    </div>
                    <div class="overlay overlay-grad"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="screenshot-area section-gap-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Featured Screens</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-screenshot">
                    <div class="single-screenshot">
                        <img class="img-fluid" src="img/screenshots/s1.jpg" alt>
                    </div>
                    <div class="single-screenshot">
                        <img class="img-fluid" src="img/screenshots/s2.jpg" alt>
                    </div>
                    <div class="single-screenshot">
                        <img class="img-fluid" src="img/screenshots/s3.jpg" alt>
                    </div>
                    <div class="single-screenshot">
                        <img class="img-fluid" src="img/screenshots/s4.jpg" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Suitable Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Standard</h4>
                                <p>For the <br>individuals</p>
                            </div>
                            <div class="top-right">
                                <h1>£199</h1>
                            </div>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Business</h4>
                                <p>For <br>small Company</p>
                            </div>
                            <div class="top-right">
                                <h1>£399</h1>
                            </div>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Ultimate</h4>
                                <p>For <br>large Company</p>
                            </div>
                            <div class="top-right">
                                <h1>£499</h1>
                            </div>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.html"); ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/hexagons.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"8117c8c29b355fff","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

</html>