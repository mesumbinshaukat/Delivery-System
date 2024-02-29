<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admindek | Admin Template</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <?php include("./style.php") ?>
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include("partials.php"); ?>


            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="./files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class>
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                                </p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class>
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="./files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class>
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include("./sidebar.php") ?>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">

                                            <div class="col-md-12 col-xl-8">
                                                <div class="card sale-card">
                                                    <div class="card-header">
                                                        <h5>Deals Analytics</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Impressions</h6>
                                                                <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-eye bg-c-blue"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Goal</h6>
                                                                <h3 class="f-w-700 text-c-green">30,564</h3>
                                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-bullseye bg-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Impact</h6>
                                                                <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Published Project</h6>
                                                                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Completed Task</h6>
                                                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Successfull Task</h6>
                                                                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Ongoing Project</h6>
                                                                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 col-xl-4">
                                                <div class="card card-blue text-white">
                                                    <div class="card-block p-b-0">
                                                        <div class="row m-b-50">
                                                            <div class="col">
                                                                <h6 class="m-b-5">Sales In July</h6>
                                                                <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <p class="m-b-5">Direct Sale</p>
                                                                <h6 class="m-b-0">$1768</h6>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <p class="m-b-5">Referal</p>
                                                                <h6 class="m-b-0">$897</h6>
                                                            </div>
                                                        </div>
                                                        <div id="sec-ecommerce-chart-line" class style="height:60px">
                                                        </div>
                                                        <div id="sec-ecommerce-chart-bar" style="height:195px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>What’s New</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="scroll-widget">
                                                            <div class="latest-update-box">
                                                                <div class="row p-t-20 p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <img src="./files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Your Manager Posted.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>You have 3 pending Task.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>New Order Received.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <img src="./files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Your Manager Posted.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>You have 3 pending Task.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>New Order Received.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>Latest Activity</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="scroll-widget">
                                                            <div class="latest-update-box">
                                                                <div class="row p-t-20 p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-primary update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Devlopment & Update</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem ipsum dolor
                                                                            sit amet, <a href="#!" class="text-c-blue">
                                                                                More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-primary update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Showcases</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem dolor sit
                                                                            amet, <a href="#!" class="text-c-blue">
                                                                                More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-success update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Miscellaneous</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem ipsum dolor
                                                                            sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-danger update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Your Manager Posted.</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem ipsum dolor
                                                                            sit amet, <a href="#!" class="text-c-red">
                                                                                More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-primary update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Showcases</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem dolor sit
                                                                            amet, <a href="#!" class="text-c-blue">
                                                                                More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-auto text-right update-meta p-r-0">
                                                                        <i class="b-success update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!">
                                                                            <h6>Miscellaneous</h6>
                                                                        </a>
                                                                        <p class="text-muted m-b-0">Lorem ipsum dolor
                                                                            sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>New Products</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Product Code</th>
                                                                        <th>Customer</th>
                                                                        <th>Status</th>
                                                                        <th>Rating</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Sofa</td>
                                                                        <td>#PHD001</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7110131231161c10181d5f121e1c">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-danger">Out
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Computer</td>
                                                                        <td>#PHD002</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d3d4d3f0d7ddd1d9dc9ed3dfdd">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-success">In
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mobile</td>
                                                                        <td>#PHD003</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a1a1b182a0d070b030644090507">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-danger">Out
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Coat</td>
                                                                        <td>#PHD004</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="791b1a0a391e14181015571a1614">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-success">In
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Watch</td>
                                                                        <td>#PHD005</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9cacdcae9cec4c8c0c587cac6c4">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-success">In
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Shoes</td>
                                                                        <td>#PHD006</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdcdcccffddad0dcd4d193ded2d0">[email&#160;protected]</a>
                                                                        </td>
                                                                        <td><label class="label label-danger">Out
                                                                                Stock</label></td>
                                                                        <td>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include("./script.php") ?>
</body>

</html>