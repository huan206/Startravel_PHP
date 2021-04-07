<!doctype html>
<html lang="en">

<head>
    <title>Hotel Listing Right Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                        <!-- end input-group -->
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end form-center -->
        </div>
        <!-- end overlay-content -->
    </div>
    <!-- end overlay -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                            <li><a href="logout.php" id="thanh3"><span><i class="fa fa-sign-out"></i></span>Logout</a></li>
                            <li><a href="cart.php" id="thanh4"><span><i class="fa fa-shopping-cart"></i></span>Cart</a>
                            <li>
                                <form>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="form-group currency">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                            </div>
                                            <!-- end form-group -->
                                        </li>

                                        <li>
                                            <div class="form-group language">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                            </div>
                                            <!-- end form-group -->
                                        </li>
                                        <li>
                                            <a id="ten"><span><i class="fa fa-circle blackiconcolor"></i></span>
                                                <?php
                                                include('login_set.php');
                                                $ten = new user();
                                                $rows = $ten->fetch();
                                                if (!empty($rows)) {
                                                    foreach ($rows as $row) {
                                                        $name = $row['activity_name'];
                                                    }
                                                    echo $name;
                                                }
                                                ?></a>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- end links -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->
    <script type="text/javascript">
        function inten() {
            document.getElementById("ten").style.display = "block";
            document.getElementById("thanh3").style.display = "block";
            document.getElementById("thanh4").style.display = "block";
            document.getElementById("thanh1").style.display = "none";
            document.getElementById("thanh2").style.display = "none";
        }
        <?php
        $rows = $ten->fetch();
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $name = $row['activity_name'];
            }
            echo "inten();";
        }
        ?>
    </script>
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Main Homepage</a></li>
                            <li><a href="flight-homepage.php">Flight Homepage</a></li>
                            <li><a href="hotel-homepage.php">Hotel Homepage</a></li>
                            <li><a href="tour-homepage.php">Tour Homepage</a></li>
                            <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                            <li><a href="car-homepage.php">Car Homepage</a></li>
                            <li><a href="landing-page.php">Landing Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flights<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="flight-homepage.php">Flight Homepage</a></li>
                            <li><a href="flight-listing-left-sidebar.php">List View Left Sidebar</a></li>
                            <li><a href="flight-listing-right-sidebar.php">List View Right Sidebar</a></li>
                            <li><a href="flight-grid-left-sidebar.php">Grid View Left Sidebar</a></li>
                            <li><a href="flight-grid-right-sidebar.php">Grid View Right Sidebar</a></li>
                            <li><a href="flight-detail-left-sidebar.php">Detail Left Sidebar</a></li>
                            <li><a href="flight-detail-right-sidebar.php">Detail Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="hotel-homepage.php">Hotel Homepage</a></li>
                            <li><a href="hotel-listing-left-sidebar.php">List View Left Sidebar</a></li>
                            <li class="active"><a href="#">List View Right Sidebar</a></li>
                            <li><a href="hotel-grid-left-sidebar.php">Grid View Left Sidebar</a></li>
                            <li><a href="hotel-grid-right-sidebar.php">Grid View Right Sidebar</a></li>
                            <li><a href="hotel-detail-left-sidebar.php">Detail Left Sidebar</a></li>
                            <li><a href="hotel-detail-right-sidebar.php">Detail Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="tour-homepage.php">Tour Homepage</a></li>
                            <li><a href="tour-listing-left-sidebar.php">List View Left Sidebar</a></li>
                            <li><a href="tour-listing-right-sidebar.php">List View Right Sidebar</a></li>
                            <li><a href="tour-grid-left-sidebar.php">Grid View Left Sidebar</a></li>
                            <li><a href="tour-grid-right-sidebar.php">Grid View Right Sidebar</a></li>
                            <li><a href="tour-detail-left-sidebar.php">Detail Left Sidebar</a></li>
                            <li><a href="tour-detail-right-sidebar.php">Detail Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                            <li><a href="cruise-listing-left-sidebar.php">List View Left Sidebar</a></li>
                            <li><a href="cruise-listing-right-sidebar.php">List View Right Sidebar</a></li>
                            <li><a href="cruise-grid-left-sidebar.php">Grid View Left Sidebar</a></li>
                            <li><a href="cruise-grid-right-sidebar.php">Grid View Right Sidebar</a></li>
                            <li><a href="cruise-detail-left-sidebar.php">Detail Left Sidebar</a></li>
                            <li><a href="cruise-detail-right-sidebar.php">Detail Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="car-homepage.php">Car Homepage</a></li>
                            <li><a href="car-listing-left-sidebar.php">List View Left Sidebar</a></li>
                            <li><a href="car-listing-right-sidebar.php">List View Right Sidebar</a></li>
                            <li><a href="car-grid-left-sidebar.php">Grid View Left Sidebar</a></li>
                            <li><a href="car-grid-right-sidebar.php">Grid View Right Sidebar</a></li>
                            <li><a href="car-detail-left-sidebar.php">Detail Left Sidebar</a></li>
                            <li><a href="car-detail-right-sidebar.php">Detail Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Standard <span>Pages</span></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="blog-listing-left-sidebar.php">Blog Listing Left Sidebar</a></li>
                                            <li><a href="blog-listing-right-sidebar.php">Blog Listing Right Sidebar</a></li>
                                            <li><a href="blog-detail-left-sidebar.php">Blog Detail Left Sidebar</a></li>
                                            <li><a href="blog-detail-right-sidebar.php">Blog Detail Right Sidebar</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">User <span>Dashboard</span></li>
                                            <li><a href="dashboard.php">Dashboard</a></li>
                                            <li><a href="user-profile.php">User Profile</a></li>
                                            <li><a href="booking.php">Booking</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="cards.php">Cards</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Special <span>Pages</span></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="registration.php">Registration</a></li>
                                            <li><a href="forgot-password.php">Forgot Password</a></li>
                                            <li><a href="error-page.php">404 Page</a></li>
                                            <li><a href="coming-soon.php">Coming Soon</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Extra <span>Pages</span></li>
                                            <li><a href="before-you-fly.php">Before Fly</a></li>
                                            <li><a href="travel-insurance.php">Travel Insurance</a></li>
                                            <li><a href="holidays.php">Holidays</a></li>
                                            <li><a href="thank-you.php">Thank You</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div>
            <!-- end navbar collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <!-- end close-btn -->

                <div class="list-group panel">

                    <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="index.php" class="list-group-item">Main Homepage</a>
                        <a href="flight-homepage.php" class="list-group-item">Flight Homepage</a>
                        <a href="hotel-homepage.php" class="list-group-item">Hotel Homepage</a>
                        <a href="tour-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="car-homepage.php" class="list-group-item">Car Homepage</a>
                        <a href="landing-page.php" class="list-group-item">Landing Page</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="flight-homepage.php" class="list-group-item">Flight Homepage</a>
                        <a href="flight-listing-left-sidebar.php" class="list-group-item">List View Left Sidebar</a>
                        <a href="flight-listing-right-sidebar.php" class="list-group-item">List View Right Sidebar</a>
                        <a href="flight-grid-left-sidebar.php" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="flight-grid-right-sidebar.php" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="flight-detail-left-sidebar.php" class="list-group-item">Detail Left Sidebar</a>
                        <a href="flight-detail-right-sidebar.php" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#hotels-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="hotel-homepage.php" class="list-group-item">Hotel Homepage</a>
                        <a href="hotel-listing-left-sidebar.php" class="list-group-item">List View Left Sidebar</a>
                        <a href="#" class="list-group-item active">List View Right Sidebar</a>
                        <a href="hotel-grid-left-sidebar.php" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="hotel-grid-right-sidebar.php" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="hotel-detail-left-sidebar.php" class="list-group-item">Detail Left Sidebar</a>
                        <a href="hotel-detail-right-sidebar.php" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>


                    <div class="collapse sub-menu" id="tours-links">
                        <a href="tour-homepage.php" class="list-group-item">Tour Homepage</a>
                        <a href="tour-listing-left-sidebar.php" class="list-group-item">List View Left Sidebar</a>
                        <a href="tour-listing-right-sidebar.php" class="list-group-item">List View Right Sidebar</a>
                        <a href="tour-grid-left-sidebar.php" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="tour-grid-right-sidebar.php" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="tour-detail-left-sidebar.php" class="list-group-item">Detail Left Sidebar</a>
                        <a href="tour-detail-right-sidebar.php" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                        <a href="cruise-listing-left-sidebar.php" class="list-group-item">List View Left Sidebar</a>
                        <a href="cruise-listing-right-sidebar.php" class="list-group-item">List View Right Sidebar</a>
                        <a href="cruise-grid-left-sidebar.php" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="cruise-grid-right-sidebar.php" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="cruise-detail-left-sidebar.php" class="list-group-item">Detail Left Sidebar</a>
                        <a href="cruise-detail-right-sidebar.php" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cars-links">
                        <a href="car-homepage.php" class="list-group-item">Car Homepage</a>
                        <a href="car-listing-left-sidebar.php" class="list-group-item">List View Left Sidebar</a>
                        <a href="car-listing-right-sidebar.php" class="list-group-item">List View Right Sidebar</a>
                        <a href="car-grid-left-sidebar.php" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="car-grid-right-sidebar.php" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="car-detail-left-sidebar.php" class="list-group-item">Detail Left Sidebar</a>
                        <a href="car-detail-right-sidebar.php" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                        <a href="about-us.php" class="list-group-item">About Us</a>
                        <a href="contact-us.php" class="list-group-item">Contact Us</a>
                        <a href="blog-listing-left-sidebar.php" class="list-group-item">Blog Listing Left Sidebar</a>
                        <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Listing Right Sidebar</a>
                        <a href="blog-detail-left-sidebar.php" class="list-group-item">Blog Detail Left Sidebar</a>
                        <a href="blog-detail-right-sidebar.php" class="list-group-item">Blog Detail Right Sidebar</a>
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                        <a href="dashboard.php" class="list-group-item">Dashboard</a>
                        <a href="user-profile.php" class="list-group-item">User Profile</a>
                        <a href="booking.php" class="list-group-item">Booking</a>
                        <a href="wishlist.php" class="list-group-item">Wishlist</a>
                        <a href="cards.php" class="list-group-item">Cards</a>
                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                        <a href="login.php" class="list-group-item">Login</a>
                        <a href="registration.php" class="list-group-item">Registration</a>
                        <a href="forgot-password.php" class="list-group-item">Forgot Password</a>
                        <a href="error-page.php" class="list-group-item">404 Page</a>
                        <a href="coming-soon.php" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                        <a href="before-you-fly.php" class="list-group-item">Before Fly</a>
                        <a href="travel-insurance.php" class="list-group-item">Travel Insurance</a>
                        <a href="holidays.php" class="list-group-item">Holidays</a>
                        <a href="thank-you.php" class="list-group-item">Thank You</a>
                    </div>
                    <!-- end sub-menu -->
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>
        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->


    <!--=================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-hotel-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Hotel Listing Right Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Hotel Listing Right Sidebar</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="hotel-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-1.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-2.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-3.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-4.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-5.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.php">
                                        <img src="images/hotel-6.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.php">Herta Berlin Hotel</a></h3>
                                    <p class="block-minor">From: Scotland</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <a href="hotel-detail-right-sidebar.php" class="btn btn-orange btn-lg">View More</a>
                                </div>
                                <!-- end h-list-info -->
                            </div>
                            <!-- end list-content -->
                        </div>
                        <!-- end h-list-block -->

                        <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div>
                        <!-- end pages -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                        <div class="side-bar-block filter-block">
                            <h3>Sort By Filter</h3>
                            <p>Find your dream flights today</p>

                            <div class="panels-group">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-1" data-toggle="collapse">Select Category <span><i class="fa fa-angle-down"></i></span></a>
                                    </div>
                                    <!-- end panel-heading -->

                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox" />
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>All</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox" />
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Apartment</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox" />
                                                    <label for="check03"><span><i class="fa fa-check"></i></span>Bed & Breakfast</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox" />
                                                    <label for="check04"><span><i class="fa fa-check"></i></span>Guest House</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox" />
                                                    <label for="check05"><span><i class="fa fa-check"></i></span>Hotels</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox" />
                                                    <label for="check06"><span><i class="fa fa-check"></i></span>Residence</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox" />
                                                    <label for="check07"><span><i class="fa fa-check"></i></span>Resorts</label></li>
                                            </ul>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel-collapse -->
                                </div>
                                <!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-2" data-toggle="collapse">Facility<span><i class="fa fa-angle-down"></i></span></a>
                                    </div>
                                    <!-- end panel-heading -->

                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox" />
                                                    <label for="check08"><span><i class="fa fa-check"></i></span>Air Conditioning</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox" />
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Bathroom</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox" />
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Cable Tv</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check11" name="checkbox" />
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Parking</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check12" name="checkbox" />
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>Pool</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check13" name="checkbox" />
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>Wi-fi</label></li>
                                            </ul>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel-collapse -->
                                </div>
                                <!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-3" data-toggle="collapse">Rating <span><i class="fa fa-angle-down"></i></span></a>
                                    </div>
                                    <!-- end panel-heading -->

                                    <div id="panel-3" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check14" name="checkbox" />
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check15" name="checkbox" />
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check16" name="checkbox" />
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check17" name="checkbox" />
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check18" name="checkbox" />
                                                    <label for="check18"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                            </ul>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel-collapse -->
                                </div>
                                <!-- end panel-default -->

                            </div>
                            <!-- end panel-group -->

                            <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div>
                            <!-- end price-slider -->
                        </div>
                        <!-- end side-bar-block -->

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div>
                                                <!-- end ad-text -->
                                            </div>
                                            <!-- end columns -->
                                        </a>
                                    </div>
                                    <!-- end ad-img -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Need Help</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+1 123 1234567</p>
                                    </div>
                                    <!-- end support-contact -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end hotel-listing -->
    </section>
    <!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">COMPANY</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Flight</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Tours</a></li>
                            <li><a href="#">Cruise</a></li>
                            <li><a href="#">Cars</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->

    </section>
    <!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>