<!doctype html>
<html lang="en">

<head>
    <title>Cruise Homepage</title>
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

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
            // Send Search Text to the server
            $("#search").keyup(function() {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "search_all.php",
                        method: "post",
                        data: {
                            query: searchText,
                        },
                        success: function(response) {
                            $("#show-list").html(response);
                        },
                    });
                }

            });
        });
    </script>
</head>


<body id="cruise-homepage">

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
                            <input type="text" id="search" class="form-control" placeholder="Search..." required />
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


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-5">
        <div class="header-absolute">
            <div class="container">
                <div id="top-bar" class="tb-text-grey">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div id="info">
                                <ul class="list-unstyled list-inline">
                                    <li><span><i class="fa fa-map-marker"></i></span>Passerellesnumériques Viet Nam</li>
                                    <li><span><i class="fa fa-phone"></i></span>+03 964 988 91</li>
                                </ul>
                            </div>
                            <!-- end info -->
                        </div>
                        <!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div id="links">
                                <ul class="list-unstyled list-inline">
                                    <li><a href="login.php" id="thanh1"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                    <li><a href="registration.php" id="thanh2"><span><i class="fa fa-plus"></i></span>Sign up</a></li>
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
                                                            <option value="">đ</option>
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
                                                            <option value="">VI</option>
                                                            <option value="">FR</option>
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
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="menu-button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-search hidden-lg">
                            <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                        </div>
                        <a href="index.php" class="navbar-brand"><span><i class="fa fa-plane"></i>START</span>TRAVELS</a>
                    </div>
                    <!-- end navbar-header -->

                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                            <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.php">Main Homepage</a></li>
                                    <li><a href="tour-homepage.php">Tour Homepage</a></li>
                                    <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                                    <li><a href="car-homepage.php">Harzadous Sports Tour Homepage</a></li>
                                    <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="logout.php">Login Homepage</a></li>
                                    <li><a href="registration.php">Registration Homepage</a></li>
                                    <li><a href="forgot-password.php">Forgot Password Homepage</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-listing-right-sidebar.php">Blog Homepage</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="tour-homepage.php">Tour Homepage</a></li>
                                    <li><a href="before-you-fly.php">Before You Fly</a></li>
                                    <li><a href="travel-insurance.php">Travel insurance</a></li>
                                    <li><a href="holidays.php">Holidays</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cruise-homepage.php">Cruise Homepage</a></li>
                                    <li><a href="before-you-fly.php">Before You Fly</a></li>
                                    <li><a href="travel-insurance.php">Travel insurance</a></li>
                                    <li><a href="holidays.php">Holidays</a></li>
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
                                                    <li><a href="blog-listing-right-sidebar.php">Blog Listing Right Sidebar</a></li>
                                                    <li><a href="blog-detail-right-sidebar.php">Blog Detail Right Sidebar</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-header">User <span>Dashboard</span></li>
                                                    <li><a href="error-page.php">Dashboard</a></li>
                                                    <li><a href="error-page.php">User Profile</a></li>
                                                    <li><a href="error-page.php">Booking</a></li>
                                                    <li><a href="error-page.php">Wishlist</a></li>
                                                    <li><a href="error-page.php">Cards</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-header">Special <span>Pages</span></li>
                                                    <li><a href="logout.php">Login</a></li>
                                                    <li><a href="registration.php">Registration</a></li>
                                                    <li><a href="forgot-password.php">Forgot Password</a></li>
                                                    <li><a href="error-page.php">404 Page</a></li>
                                                    <li><a href="#">Coming Soon</a></li>
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

        </div>
        <!-- end container -->
        </div>

        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div>
                    <!-- end close-btn -->

                    <div class="list-group panel">

                        <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="home-links">
                            <a href="index.php" class="list-group-item active">Main Homepage</a>
                            <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                            <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                            <a href="cruise-homepage.php" class="list-group-item">Harzadous Sports Tour Homepage</a>
                            <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                        </div>
                        <!-- end sub-menu -->
                        <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Account<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="logout.php" class="list-group-item">Login Homepage</a>
                            <a href="registration.php" class="list-group-item">Registration Homepage</a>
                            <a href="forgot-password.php" class="list-group-item">Forgot Password Homepage</a>
                        </div>
                        <!-- end sub-menu -->

                        <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Blogs<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="tours-links">
                            <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Homepage</a>
                            <a href="about-us.php" class="list-group-item">About Us</a>
                            <a href="contact-us.php" class="list-group-item">Contact Us</a>
                            <a href="#" class="list-group-item">Comingsoon</a>
                        </div>
                        <!-- end sub-menu -->

                        <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cruise-links">
                            <a href="cruise-homepage.php" class="list-group-item">Tour Homepage</a>
                            <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                            <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                            <a href="holidays.php" class="list-group-item">Holidays</a>
                        </div>
                        <!-- end sub-menu -->

                        <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a href="cruise-homepage.php" class="list-group-item">Cruise Homepage</a>
                            <a href="before-you-fly.php" class="list-group-item">Before You Fly</a>
                            <a href="travel-insurance.php" class="list-group-item">Travel insurance</a>
                            <a href="holidays.php" class="list-group-item">Holidays</a>
                        </div>
                        <!-- end sub-menu -->

                        <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="pages-links">
                            <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                            <a href="about-us.php" class="list-group-item">About Us</a>
                            <a href="contact-us.php" class="list-group-item">Contact Us</a>
                            <a href="blog-listing-right-sidebar.php" class="list-group-item">Blog Listing Right Sidebar</a>
                            <a href="blog-detail-right-sidebar.php" class="list-group-item">Blog Detail Right Sidebar</a>
                            <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                            <a href="error-page.php" class="list-group-item">Dashboard</a>
                            <a href="error-page.php" class="list-group-item">User Profile</a>
                            <a href="error-page.php" class="list-group-item">Booking</a>
                            <a href="error-page.php" class="list-group-item">Wishlist</a>
                            <a href="error-page.php" class="list-group-item">Cards</a>

                            <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                            <a href="logout.php" class="list-group-item">Login</a>
                            <a href="registration.php" class="list-group-item">Registration</a>
                            <a href="forgot-password.php" class="list-group-item">Forgot Password</a>
                            <a href="error-page.php" class="list-group-item">404 Page</a>
                            <a href="#" class="list-group-item">Coming Soon</a>
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

        <div class="flexslider slider" id="slider-5">
            <ul class="slides">

                <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/co-nen-di-du-lich-da-nang-vao-thang-11-h1.jpg) 50% 65%;
	background-size:142%;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Da Nang Boat Tour</h2>
                            <p>Where nature blends with curves. Cheap price, beautiful scene is nothing more.</p>
                            <span class="highlight-price">STARTING FROM 1200$ ONLY</span>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->

                <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/ĐN.jpg) 50% 65%;
	background-size:142%;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Da Nang Boat Tour</h2>
                            <p>Where nature blends with curves. Cheap price, beautiful scene is nothing more.</p>
                            <span class="highlight-price">STARTING FROM 1200$ ONLY</span>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-2 -->
                <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/du-lich-da-nang.jpg) 50% 65%;
                    background-size:142%;
                    height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Da Nang Boat Tour</h2>
                            <p>Where nature blends with curves. Cheap price, beautiful scene is nothing more.</p>
                            <span class="highlight-price">STARTING FROM 1200$ ONLY</span>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->

            </ul>
        </div>
        <!-- end slider -->

        <div class="search-tabs" id="search-tabs-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tab-content">

                            <div id="cruise" class="tab-pane active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="From">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="To">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end columns -->
                                </form>
                            </div>
                            <!-- end cruises -->

                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end search-tabs -->

    </section>
    <!-- end flexslider-container -->

    <!--=============== CRUISE capitalS ===============-->
    <section id="cruise-capitals" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>ALL TOURS</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="row" id="show-list">
                    <!-- Cruise -->
                        <?php
                         include ("admin_set.php");
                        $tourCruise = new tourCruise();
                        $sql = "select * from tour_cruise";
                        $rows = $tourCruise->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_cruise = $row['id_cruise'];
                                $name_cruise = $row['name_cruise'];
                                $img_cruise = $row['img_cruise'];
                                $price_cruise = $row['price_cruise'];
                                $detail_cruise = $row['detail_cruise'];
                                $from_to_cruise = $row['from_to_cruise'];
                                echo "<div class='col-sm-6 col-md-6'>
                                    <div class='main-block cruise-block'>
                                        <div class='row'>
                                            <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                                                <div class='main-img cruise-img'>
                                                    <a>
                                                    <div data-toggle='modal' data-target='#myModalCruise$id_cruise'><img src='images/$img_cruise'class='img-responsive' alt='cruise-img'/></div>
                                                        <div class='cruise-mask'>
                                                            <p>7 Nights, 6 Days</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                                                <div class='main-info cruise-info'>
                                                    <div class='main-title cruise-title'>
                                                        <a href='#'> $name_cruise</a>
                                                        <p>From: $from_to_cruise</p>
                                                        <div class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </div>
                                                        <span class='cruise-price'>$price_cruise</span>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
        
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                        ";
                            }
                        }
                        ?>
                        <!-- Modal cruise-->
                        <?php
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_cruise = $row['id_cruise'];
                                $name_cruise = $row['name_cruise'];
                                $img_cruise = $row['img_cruise'];
                                $price_cruise = $row['price_cruise'];
                                $detail_cruise = $row['detail_cruise'];
                                $from_to_cruise = $row['from_to_cruise'];
                                echo'
                                <div class="modal fade" id="myModalCruise' . $id_cruise . '" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="row g-0">
                                                    <div class="col-md-8">
                                                        <img src="images/' . $img_cruise . '" alt="" style = "width: 350px; height: 260px;">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card-body">
                                                        <h5 class="card-title">' . $name_cruise . '</h5>
                                                        <p class="card-text">' . $detail_cruise . '</p>
                                                        <p class="card-text">From: ' . $from_to_cruise . '</p>
                                                        <p class="card-text"><medium class="text-muted"><b>$' . $price_cruise . '</b></medium></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="booking_cruise.php?id=' . $id_cruise . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        ?>

                        <?php
                            $tourHot = new tourHot();
                            $sql = "select * from tour_hot";
                            $rows = $tourHot->fetch($sql);
                            if (!empty($rows)) {
                                foreach ($rows as $row) {
                                    $id_hot = $row['id_hot'];
                                    $name_hot = $row['name_hot'];
                                    $img_hot = $row['img_hot'];
                                    $price_hot = $row['price_hot'];
                                    $detail_hot = $row['detail_hot'];
                                    $from_to_hot = $row['from_to_hot'];
                                    echo "<div class='col-sm-6 col-md-6'>
                                        <div class='main-block cruise-block'>
                                            <div class='row'>
                                                <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                                                    <div class='main-img cruise-img'>
                                                        <a>
                                                        <div data-toggle='modal' data-target='#myModalHot$id_hot'><img src='images/$img_hot'class='img-responsive' alt='cruise-img'/></div>
                                                            <div class='cruise-mask'>
                                                                <p>7 Nights, 6 Days</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
        
                                                <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                                                    <div class='main-info cruise-info'>
                                                        <div class='main-title cruise-title'>
                                                            <a href='#'> $name_hot</a>
                                                            <p>From: $from_to_hot</p>
                                                            <div class='rating'>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star orange'></i></span>
                                                                <span><i class='fa fa-star lightgrey'></i></span>
                                                            </div>
                                                            <span class='cruise-price'>$price_hot</span>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
            
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                            ";
                                }
                            }
                            ?>
                        <?php
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_hot = $row['id_hot'];
                                $name_hot = $row['name_hot'];
                                $img_hot = $row['img_hot'];
                                $price_hot = $row['price_hot'];
                                $detail_hot = $row['detail_hot'];
                                $from_to_hot = $row['from_to_hot'];
                                echo
                                '<div class="modal fade" id="myModalHot' . $id_hot . '" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <div class="row g-0">
                                                        <div class="col-md-8">
                                                            <img src="images/' . $img_hot . '" alt="" style = "width: 350px; height: 260px;">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-body">
                                                            <h5 class="card-title">' . $name_hot . '</h5>
                                                            <p class="card-text">' . $detail_hot . '</p>
                                                            <p class="card-text">From: ' . $from_to_hot . '</p>
                                                            <p class="card-text"><medium class="text-muted"><b>$' . $price_hot . '</b></medium></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="booking_hot.php?id=' . $id_hot. '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        }
                        ?>
                        <?php
                        $tourCapital = new tourCapital();
                        $sql = "select * from tour_capital";
                        $rows = $tourCapital->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_capital = $row['id_capital'];
                                $name_capital = $row['name_capital'];
                                $img_capital = $row['img_capital'];
                                $price_capital = $row['price_capital'];
                                $detail_capital = $row['detail_capital'];
                                $from_to_capital = $row['from_to_capital'];
                                echo "<div class='col-sm-6 col-md-6'>
                                    <div class='main-block cruise-block'>
                                        <div class='row'>
                                            <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                                                <div class='main-img cruise-img'>
                                                    <a>
                                                    <div data-toggle='modal' data-target='#myModalCapital$id_capital'><img src='images/$img_capital'class='img-responsive' alt='cruise-img'/></div>
                                                        <div class='cruise-mask'>
                                                            <p>7 Nights, 6 Days</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                                                <div class='main-info cruise-info'>
                                                    <div class='main-title cruise-title'>
                                                        <a href='#'> $name_capital</a>
                                                        <p>From: $from_to_capital</p>
                                                        <div class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </div>
                                                        <span class='cruise-price'>$price_capital</span>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
        
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                        ";
                            }
                            }
                            ?>
                            <!-- end row -->
                            <?php
                            if (!empty($rows)) {
                                foreach ($rows as $row) {
                                    $id_capital = $row['id_capital'];
                                    $name_capital = $row['name_capital'];
                                    $img_capital = $row['img_capital'];
                                    $price_capital = $row['price_capital'];
                                    $detail_capital = $row['detail_capital'];
                                    $from_to_capital = $row['from_to_capital'];
                                    echo
                                    '<div class="modal fade" id="myModalCapital' . $id_capital . '" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <div class="row g-0">
                                                            <div class="col-md-8">
                                                                <img src="images/' . $img_capital . '" alt="" style = "width: 350px; height: 260px;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card-body">
                                                                <h5 class="card-title">' . $name_capital . '</h5>
                                                                <p class="card-text">' . $detail_capital . '</p>
                                                                <p class="card-text">From: ' . $from_to_capital . '</p>
                                                                <p class="card-text"><medium class="text-muted"><b>$' . $price_capital . '</b></medium></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="booking_capital.php?id=' . $id_capital . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                            <?php
                        $tourSport = new tourSport();
                        $sql = "select * from tour_sport";
                        $rows = $tourSport->fetch($sql);
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                                $id_sport = $row['id_sport'];
                                $name_sport = $row['name_sport'];
                                $img_sport = $row['img_sport'];
                                $price_sport = $row['price_sport'];
                                $detail_sport = $row['detail_sport'];
                                $from_to_sport = $row['from_to_sport'];
                                echo "<div class='col-sm-6 col-md-6'>
                                    <div class='main-block cruise-block'>
                                        <div class='row'>
                                            <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                                                <div class='main-img cruise-img'>
                                                    <a>
                                                    <div data-toggle='modal' data-target='#myModalSport$id_sport'><img src='images/$img_sport'class='img-responsive' alt='cruise-img'/></div>
                                                        <div class='cruise-mask'>
                                                            <p>7 Nights, 6 Days</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                                                <div class='main-info cruise-info'>
                                                    <div class='main-title cruise-title'>
                                                        <a href='#'> $name_sport</a>
                                                        <p>From: $from_to_sport</p>
                                                        <div class='rating'>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star orange'></i></span>
                                                            <span><i class='fa fa-star lightgrey'></i></span>
                                                        </div>
                                                        <span class='cruise-price'>$price_sport</span>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
        
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                        ";
                            }
                            }
                            ?>
                            <!-- end row -->
                            <?php
                            if (!empty($rows)) {
                                foreach ($rows as $row) {
                                    $id_sport = $row['id_sport'];
                                    $name_sport = $row['name_sport'];
                                    $img_sport = $row['img_sport'];
                                    $price_sport = $row['price_sport'];
                                    $detail_sport = $row['detail_sport'];
                                    $from_to_sport = $row['from_to_sport'];
                                    echo
                                    '<div class="modal fade" id="myModalSport' . $id_sport . '" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <div class="row g-0">
                                                            <div class="col-md-8">
                                                                <img src="images/' . $img_sport . '" alt="" style = "width: 350px; height: 260px;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card-body">
                                                                <h5 class="card-title">' . $name_sport . '</h5>
                                                                <p class="card-text">' . $detail_sport . '</p>
                                                                <p class="card-text">From: ' . $from_to_sport . '</p>
                                                                <p class="card-text"><medium class="text-muted"><b>$' . $price_sport . '</b></medium></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="booking_sport.php?id=' . $id_sport . '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cruise-capitals -->

    <!--============== HIGHLIGHTS =============-->
    <section id="highlights" class="highlights-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end boxes -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end highlights -->


    <!--======= capital BANNER ======-->
    <section id="cruise-capital-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 cruise-capital-img text-center">
                    <img src="images/ĐN - Copy.jpg" class="img-responsive" alt="capital-img" />
                </div>
                <!-- end columns -->

                <div class="col-sm-6 cruise-capital-text">
                    <h2>Best capital</h2>
                    <h3 class="cruise-tour">Da Nang Boat Tour</h3>
                    <p class="cruise-capital-dur">7 Nights, 6 Days</p>
                    <p class="cruise-capital-price">From $1,441</p>
                    <a href="cruise-detail-right-sidebar.php" class="btn btn-black">Booking</a>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end capital-banner -->


    <!--==================== TESTIMONIALS ====================-->
    <section id="testimonials" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading white-heading">
                        <h2>Testimonials</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <div class="carousel-inner text-center">

                            <div class="item active">
                                <blockquote>introducing, I am a administrator of this website. I am really happy because of your feedback. I am so glad to bring a place like that to you. I will try to do more and more for your joys. Why don't you come here and experience
                                    if you want to know how this place can pay attention to a lot of people. Welcome to StrartTravel.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div>
                                <!-- end rating -->
                                <small>Khang Ha</small>
                            </div>
                            <!-- end item -->

                            <div class="item">
                                <blockquote>I feel this is a prestige and interesting place. You will get the joys in life when coming there. I visited there many times and I am satisfied with the views, people and services at here. Unintentionally, I knew there
                                    through friends' suggestions. I feel there is a fantastic place, you can have confidence in there. Hope you're funny.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div>
                                <!-- end rating -->

                                <small>Hang Ho</small>
                            </div>
                            <!-- end item -->

                            <div class="item">
                                <blockquote>I knew this place unintentionally through my friends. They suggested me to visit it and I have already gone to there. For me, It is a fantastic and nice place. You can have a confidence in there. Let's go to visit and enjoy
                                    it, you will be funny. I am quite satisfied with the harmonious and eye-catching design, everything is easy to distinguish and feels comfortable.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div>
                                <!-- end rating -->

                                <small>Huan Nguyen</small>
                            </div>
                            <!-- end item -->

                        </div>
                        <!-- end carousel-inner -->

                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/IMG_6909.jpg" class="img-responsive" alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img src="images/IMG_6916.jpg" class="img-responsive" alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img src="images/IMG_6949.jpg" class="img-responsive" alt="client-img">
                            </li>
                        </ol>

                    </div>
                    <!-- end quote-carousel -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonials -->

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
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required />
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

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>Passerellesnumériques Viet Nam</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 964 988 91</li>
                            <li><span><i class="fa fa-envelope"></i></span>hamongkhang@gmail.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">COMPANY</h3>
                        <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                            <li><a href="cruise-homepage.php">Flight</a></li>
                            <li><a href="cruise-homepage.php">Hotel</a></li>
                            <li><a href="cruise-homepage.php">Tours</a></li>
                            <li><a href="cruise-homepage.php">Cruise</a></li>
                            <li><a href="cruise-homepage.php">Cars</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="blog-listing-right-sidebar.php">Blogs</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="logout.php">Login</a></li>
                            <li><a href="registration.php">Register</a></li>
                            <li><a href="index.php">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>We will bring you the journeys, the greatest experiences in your life. Your happiness and satisfaction are a motive power that impulse us to develop and improve. Thanks for your confidence and interaction. Hope you have a fantastic
                            journeys!!
                        </p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="https://twitter.com/"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="https://google.com/"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="https://pinterest.com/"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="https://instagram.com/"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="https://linkedin.com/"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="https://youtube.com/"><span><i class="fa fa-youtube-play"></i></span></a></li>
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
                        <p>© 2021 <a href="index.php">StartTravel</a>. All rights reserved.</p>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="index.php">Terms & Condition</a></li>
                            <li><a href="index.php">Privacy Policy</a></li>
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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/login.js"></script>
    <!-- Page Scripts Ends -->
    <!-- Page Scripts Ends -->

</body>

</html>