<!DOCTYPE html>
<html>

<head>
    <title>Admin HTML</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
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

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #footer {
            display: flex;
            margin: 0 0 0 455px;
            border-top: none;
        }

        .col-12.mt-3 {
            padding: 10px;
        }

        #hot {
            display: none;
        }

        #offer {
            display: none;
        }

        #cruise {
            display: none;
        }

        #sport {
            display: none;
        }

        #capital {
            display: none;
        }

        #blog {
            display: none;
        }

        #account {
            display: none;
        }
    </style>
    <script type="text/javascript">
        function showAll() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "block";
            document.getElementById("offer").style.display = "block";
            document.getElementById("cruise").style.display = "block";
            document.getElementById("sport").style.display = "block";
            document.getElementById("capital").style.display = "block";
            document.getElementById("blog").style.display = "block";
            document.getElementById("account").style.display = "none";
        }

        function showHot() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "block";
            document.getElementById("offer").style.display = "none";
            document.getElementById("account").style.display = "none";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "none";
        }

        function showOffer() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "block";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "none";
            document.getElementById("account").style.display = "none";
        }

        function showCruise() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "none";
            document.getElementById("cruise").style.display = "block";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "none";
            document.getElementById("account").style.display = "none";
        }

        function showSport() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "none";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "block";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "none";
            document.getElementById("account").style.display = "none";
        }

        function showCapital() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "none";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "block";
            document.getElementById("blog").style.display = "none";
            document.getElementById("account").style.display = "none";
        }

        function showBlog() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "none";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "Block";
            document.getElementById("account").style.display = "none";
        }

        function showAccount() {
            document.getElementById("all").style.display = "none";
            document.getElementById("hot").style.display = "none";
            document.getElementById("offer").style.display = "none";
            document.getElementById("cruise").style.display = "none";
            document.getElementById("sport").style.display = "none";
            document.getElementById("capital").style.display = "none";
            document.getElementById("blog").style.display = "none";
            document.getElementById("account").style.display = "block";
        }

        $(document).ready(function() {
            // Send Search Text to the server
            $("#search").keyup(function() {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "search.php",
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

<body>
    <?php
    include("admin_set.php");
    $tourHot = new tourHot();
    $tourHot->create();
    $tourOffer = new tourOffer();
    $tourOffer->create();
    $tourCruise = new tourCruise();
    $tourCruise->create();
    $tourSport = new tourSport();
    $tourSport->create();
    $tourCapital = new tourCapital();
    $tourCapital->create();
    $blog = new blog();
    $kt = $_POST['author_blog'];
    if ($kt) {
        $blog->create();
    }
    ?>
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
    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
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
                </div>
                <!-- end links -->
            </div>
            <!-- end columns -->
        </div>

        <!-- end row -->
    </div>
    <!-- end container -->
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
    <!-- end top-bar -->
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
                <a href="index.php" class="navbar-brand"><span><i class="fa fa-plane"></i>START</span>TRAVELS</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">

                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a onclick="<?php echo 'showAll();'; ?>">All tour</a></li>
                            <li><a onclick="<?php echo 'showHot();'; ?>">Tour hot</a></li>
                            <li><a onclick="<?php echo 'showOffer();'; ?>">Tour offer</a></li>
                            <li><a onclick="<?php echo 'showCruise();'; ?>">Cruise Offers</a></li>
                            <li><a onclick="<?php echo 'showSport();'; ?>">Harzadous Sports Tour</a></li>
                            <li><a onclick="<?php echo 'showCapital();'; ?>">Capital Tour</a></li>
                            <li><a onclick="<?php echo 'showBlog();'; ?>">Our Latest Blogs</a></li>
                            <li><a onclick="<?php echo 'showAccount();'; ?>">Account</a></li>
                            <li><a href="">Exit</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </li>
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
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a class="list-group-item" onclick="<?php echo 'showAll();'; ?>">All tour</a>
                        <a class="list-group-item" onclick="<?php echo 'showHot();'; ?>">Tour hot</a>
                        <a class="list-group-item" onclick="<?php echo 'showOffer();'; ?>">Tour offer</a>
                        <a class="list-group-item" onclick="<?php echo 'showCruise();'; ?>">Cruise Offers</a>
                        <a class="list-group-item" onclick="<?php echo 'showSport();'; ?>">Harzadous Sports Tour</a>
                        <a class="list-group-item" onclick="<?php echo 'showCapital();'; ?>">Capital Tour</a>
                        <a class="list-group-item" onclick="<?php echo 'showBlog();'; ?>">Our Latest Blogs</a>
                        <a class="list-group-item" onclick="<?php echo 'showAccount();'; ?>">Account</a>
                        <a class="list-group-item" href="">Exit</a>
                    </div>
                </div>
                <!-- end list-group -->
            </div>
            <!-- end main-menu -->
        </div>

        <!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->
    <!-- end sidenav-content -->
    <div id="content">
        <div class="container">
            <!-- Tour hot -->
            <div class="modal fade" id="Modal_hot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add tour </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="name_hot" placeholder="Name" name="name_hot">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="img_hot" placeholder="Img" name="img_hot">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" id="price_hot" placeholder="Price" name="price_hot">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="From_to" name="fromto_hot">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Detail" name="detail_hot">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_hot" class="btn btn-primary" name="save_hot">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- end Hot -->
            <!-- Tour offer -->
            <div class="modal fade" id="Modal_offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add tour </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="name_hot" placeholder="Name" name="name_offer">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="img_hot" placeholder="Img" name="img_offer">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" id="price_hot" placeholder="Price" name="price_offer">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="From_to" name="fromto_offer">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Detail" name="detail_offer">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_hot" class="btn btn-primary" name="save_hot">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cruise offer -->
            <div class="modal fade" id="Modal_cruise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add tour </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="name_hot" placeholder="Name" name="name_cruise">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="img_hot" placeholder="Img" name="img_cruise">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" id="price_hot" placeholder="Price" name="price_cruise">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="From_to" name="fromto_cruise">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Detail" name="detail_cruise">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_hot" class="btn btn-primary" name="save_hot">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal update cruise -->
            <!-- end Cruise -->
            <!-- Sport -->
            <div class="modal fade" id="Modal_sport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add tour </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="name_hot" placeholder="Name" name="name_sport">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="img_hot" placeholder="Img" name="img_sport">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" id="price_hot" placeholder="Price" name="price_sport">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="From_to" name="fromto_sport">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Detail" name="detail_sport">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_hot" class="btn btn-primary" name="save_hot">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Tour Capital -->
            <div class="modal fade" id="Modal_capital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add tour </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="name_hot" placeholder="Name" name="name_capital">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="img_hot" placeholder="Img" name="img_capital">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" id="price_hot" placeholder="Price" name="price_capital">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="From_to" name="fromto_capital">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Detail" name="detail_capital">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_hot" class="btn btn-primary" name="save_hot">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal update capital -->
            <!-- end Capital -->
            <!-- Blogs -->
            <div class="modal fade" id="Modal_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add blog </h5>
                            <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form-row" method="post" enctype="multipart/form-data">
                                <div class="col-12 mt-3">
                                    <input type="file" class="form-control" id="name_hot" placeholder="Image" name="img_blog">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="img_hot" placeholder="Author" name="author_blog">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="price_hot" placeholder="Time" name="time_blog">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="from_hot" placeholder="Title" name="title_blog">
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" id="detail_hot" placeholder="Content" name="content_blog">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="save_blog" class="btn btn-primary" name="save_blog">Save</button>
                            <button type="button" id="Cancle_hot" data-dismiss="modal" class="btn btn-danger">Cancle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal update blogs -->
            <!-- end Blogs -->
            <div class="card shadow mb-4" id="all">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="show-list"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table 2 -->
            <div class="card shadow mb-4" id="hot">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_hot">
                    <button id="add_hot" class="btn btn-primary">Add Hot</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
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
                                        echo $table = "
                                        <tr>
                                            <td>$id_hot</td>
                                            <td>$name_hot</td>
                                            <td><img src='images/$img_hot' height='200' width='250'></td>
                                            <td>$price_hot</td>
                                            <td>$detail_hot</td>
                                            <td>$from_to_hot</td>
                                            <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_hot$id_hot'>EDIT</button></td>
                                            <td><a href='delete_hot.php?id=$id_hot'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                        </tr>
                                        ";
                                        echo $modal = " 
                                        </div> <div class='modal fade' id='update_hot$id_hot' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                        <span aria-hidden='true'>&times; </span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='edit_hot.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                    <div class='col-12 mt-3'>
                                                    <input type='text' class='form-control' id='named_hot' name='id_hot2' value='$id_hot' readonly>
                                                </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='name_hot2' value='$name_hot'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='file' class='form-control' id='imgd_hot' name='img_hot2'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='number' class='form-control' id='priced_hot' name='price_hot2' value='$price_hot'>
                                                        </div>
                                                        <div class='col-12 mt-3'>
                                                        <input type='text' class='form-control' id='detaild_hot' name='detail_hot2' value='$detail_hot'>
                                                    </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='fromd_hot' name='fromto_hot2' value='$from_to_hot'>
                                                        </div>

                                                    
                                                        <div class='modal-footer' id='footer'>
                                                        <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>";
                                    }
                                } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!-- end tb2 -->
            <!-- Table 3 -->
            <div class="card shadow mb-4" id="offer">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_offer">
                    <button id="add_offer" class="btn btn-primary">Add Offer</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $sql = "select * from tour_offer";
                                $rows = $tourOffer->fetch($sql);
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $id_offer = $row['id_offer'];
                                        $name_offer = $row['name_offer'];
                                        $img_offer = $row['img_offer'];
                                        $price_offer = $row['price_offer'];
                                        $detail_offer = $row['detail_offer'];
                                        $from_to_offer = $row['from_to_offer'];
                                        echo $table = "
                                        <tr>
                                        <td>$id_offer</td>
                                        <td>$name_offer</td>
                                        <td><img src='images/$img_offer' height='200' width='250'></td>
                                        <td>$price_offer</td>
                                        <td>$detail_offer</td>
                                        <td>$from_to_offer</td>
                                        <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_offer$id_offer'>EDIT</button></td>
                                        <td><a href='delete_offer.php?id=$id_offer'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                        </tr>";
                                        echo $modal = " 
                                        </div> <div class='modal fade' id='update_offer$id_offer' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                        <span aria-hidden='true'>&times; </span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='edit_offer.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                    <div class='col-12 mt-3'>
                                                    <input type='text' class='form-control' id='named_hot' name='id_offer2' value='$id_offer' readonly>
                                                </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='name_offer2' value='$name_offer'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='file' class='form-control' id='imgd_hot' name='img_offer2'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='number' class='form-control' id='priced_hot' name='price_offer2' value='$price_offer'>
                                                        </div>
                                                        <div class='col-12 mt-3'>
                                                        <input type='text' class='form-control' id='detaild_hot' name='detail_offer2' value='$detail_offer'>
                                                    </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='fromd_hot' name='fromto_offer2' value='$from_to_offer'>
                                                        </div>

                                                    
                                                        <div class='modal-footer' id='footer'>
                                                        <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end tb3 -->
            <!-- Table 4 -->
            <div class="card shadow mb-4" id="cruise">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_cruise">
                    <button id="add_cruise" class="btn btn-primary">Add Cruice</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
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
                                        echo $table = "
                                        <tr><td>$id_cruise</td>
                                            <td>$name_cruise</td>
                                            <td><img src='images/$img_cruise' height='200' width='250' ></td>
                                            <td>$price_cruise</td>
                                            <td>$detail_cruise</td>
                                            <td>$from_to_cruise</td>
                                            <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_cruise$id_cruise'>EDIT</button></td>
                                            <td><a href='delete_cruise.php?id=$id_cruise'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                        </tr>
                                        ";
                                        echo $modal = " 
                                        </div> <div class='modal fade' id='update_cruise$id_cruise' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                        <span aria-hidden='true'>&times; </span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='edit_cruise.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                    <div class='col-12 mt-3'>
                                                    <input type='text' class='form-control' id='named_hot' name='id_cruise2' value='$id_cruise' readonly>
                                                </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='name_cruise2' value='$name_cruise'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='file' class='form-control' id='imgd_hot' name='img_cruise2'>
                                                        </div>

                                                        <div class='col-12 mt-3'>
                                                            <input type='number' class='form-control' id='priced_hot' name='price_cruise2' value='$price_cruise'>
                                                        </div>
                                                        <div class='col-12 mt-3'>
                                                        <input type='text' class='form-control' id='detaild_hot' name='detail_cruise2' value='$detail_cruise'>
                                                    </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='fromd_hot' name='fromto_cruise2' value='$from_to_cruise'>
                                                        </div>    
                                                        <div class='modal-footer' id='footer'>
                                                        <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end tb4 -->
            <!-- Table 5 -->
            <div class="card shadow mb-4" id="capital">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_capital">
                    <button id="add_offer" class="btn btn-primary">Add Capital</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
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
                                        echo $table = "
                                            <tr><td>$id_capital</td>
                                                <td>$name_capital</td>
                                                <td><img src='images/$img_capital' height='200' width='250' ></td>
                                                <td>$price_capital</td>
                                                <td>$detail_capital</td>
                                                <td>$from_to_capital</td>
                                                <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_capital$id_capital'>EDIT</button></td>
                                                <td><a href='delete_capital.php?id=$id_capital'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                            </tr>
                                            ";
                                        echo $modal = " 
                                        </div> <div class='modal fade' id='update_capital$id_capital' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                        <span aria-hidden='true'>&times; </span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='edit_capital.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                    <div class='col-12 mt-3'>
                                                    <input type='text' class='form-control' id='named_hot' name='id_capital2' value='$id_capital' readonly>
                                                </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='name_capital2' value='$name_capital'>
                                                        </div>
                                        
                                                        <div class='col-12 mt-3'>
                                                            <input type='file' class='form-control' id='imgd_hot' name='img_capital2'>
                                                        </div>
                                        
                                                        <div class='col-12 mt-3'>
                                                            <input type='number' class='form-control' id='priced_hot' name='price_capital2' value='$price_capital'>
                                                        </div>
                                                        <div class='col-12 mt-3'>
                                                        <input type='text' class='form-control' id='detaild_hot' name='detail_capital2' value='$detail_capital'>
                                                    </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='fromd_hot' name='fromto_capital2' value='$from_to_capital'>
                                                        </div>
                                        
                                                    
                                                        <div class='modal-footer' id='footer'>
                                                        <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end tb5 -->
            <!-- Table 6 -->
            <div class="card shadow mb-4" id="sport">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_sport">
                    <button id="add_offer" class="btn btn-primary">Add Sport</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name tour</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>From-to</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
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
                                        echo $table = "
                                            <tr><td>$id_sport</td>
                                                <td>$name_sport</td>
                                                <td><img src='images/$img_sport' height='200' width='250' ></td>
                                                <td>$price_sport</td>
                                                <td>$detail_sport</td>
                                                <td>$from_to_sport</td>
                                                <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_sport$id_sport'>EDIT</button></td>
                                                <td><a href='delete_sport.php?id=$id_sport'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                            </tr>
                                            ";
                                        echo $modal = " 
                                        </div> <div class='modal fade' id='update_sport$id_sport' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                        <span aria-hidden='true'>&times; </span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='edit_sport.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                    <div class='col-12 mt-3'>
                                                    <input type='text' class='form-control' id='named_hot' name='id_sport2' value='$id_sport' readonly>
                                                </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='name_sport2' value='$name_sport'>
                                                        </div>
                                        
                                                        <div class='col-12 mt-3'>
                                                            <input type='file' class='form-control' id='imgd_hot' name='img_sport2'>
                                                        </div>
                                        
                                                        <div class='col-12 mt-3'>
                                                            <input type='number' class='form-control' id='priced_hot' name='price_sport2' value='$price_sport'>
                                                        </div>
                                                        <div class='col-12 mt-3'>
                                                        <input type='text' class='form-control' id='detaild_hot' name='detail_sport2' value='$detail_sport'>
                                                    </div>
                                                        <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='fromd_hot' name='fromto_sport2' value='$from_to_sport'>
                                                        </div>
                                        
                                                    
                                                        <div class='modal-footer' id='footer'>
                                                        <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- end tb6 -->
            <!-- Table 7 -->
            <div class="card shadow mb-4" id="blog">
                <div class="card-header py-3" data-toggle="modal" data-target="#Modal_blog">
                    <button id="add_offer" class="btn btn-primary">Add Blog</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Img</th>
                                    <th>Time</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $sql = "select * from blog";
                                $rows = $blog->fetch($sql);
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $id_blog = $row['id_blog'];
                                        $author_blog = $row['author_blog'];
                                        $time_blog = $row['time_blog'];
                                        $content_blog = $row['content_blog'];
                                        $title_blog = $row['title_blog'];
                                        $img_blog = $row['img_blog'];
                                        echo $table = "
                                            <tr><td>$id_blog</td>
                                                <td>$author_blog</td>
                                                <td><img src='images/$img_blog' height='200' width='250' ></td>
                                                <td>$time_blog</td>
                                                <td>$title_blog</td>
                                                <td>$content_blog</td>
                                                <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_blog$id_blog'>EDIT</button></td>
                                                <td><a href='delete_blog.php?id=$id_blog'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
                                            </tr>
                                            ";
                                        echo $modal = " 
                                            </div> <div class='modal fade' id='update_blog$id_blog' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title' id='exampleModalLabel'> Product Updates </h5>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='close'> 
                                                                <span aria-hidden='true'>&times; </span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <form action='edit_blog.php' class='form-row' method='post' enctype='multipart/form-data'>
                                                            <div class='col-12 mt-3'>
                                                            <input type='text' class='form-control' id='named_hot' name='id_blog2' value='$id_blog' readonly>
                                                        </div>
                                                                <div class='col-12 mt-3'>
                                                                    <input type='text' class='form-control' id='named_hot' name='author_blog2' value='$author_blog'>
                                                                </div>

                                                                <div class='col-12 mt-3'>
                                                                    <input type='file' class='form-control' id='imgd_hot' name='img_blog2'>
                                                                </div>

                                                                <div class='col-12 mt-3'>
                                                                    <input type='text' class='form-control' id='priced_hot' name='time_blog2' value='$time_blog'>
                                                                </div>
                                                                <div class='col-12 mt-3'>
                                                                <input type='text' class='form-control' id='detaild_hot' name='title_blog2' value='$title_blog'>
                                                            </div>
                                                                <div class='col-12 mt-3'>
                                                                    <input type='text' class='form-control' id='fromd_hot' name='content_blog2' value='$content_blog'>
                                                                </div>

                                                            
                                                                <div class='modal-footer' id='footer'>
                                                                <button type='submit' class='btn btn-success' name=''>EDIT</button>
                                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Exit</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4" id="account">
                <div class="card-header py-3" data-toggle="modal">
                    <button id="add_offer" class="btn btn-primary">Accounts</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User_Name</th>
                                    <th>User_Password</th>
                                    <th>User_Email</th>
                                    <th>Status</th>
                                    <th>Set</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <?php
                                include("sign_up.php");
                                $account = new account();
                                $rows = $account->fetch();
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $id_account = $row['account_id'];
                                        $name_account = $row['account_name'];
                                        $pass_account = $row['account_pass'];
                                        $email_account = $row['account_email'];
                                        $status_account = $row['account_status'];
                                        echo $table = "
                                        <tr><td>$id_account</td>
                                            <td>$name_account</td>
                                            <td>$pass_account</td>
                                            <td>$email_account</td>
                                            <td>$status_account</td>
                                            <td><a href='block.php?id=$id_account' id='block' class='btn btn-success'  onclick='add()'>BLOCK</a>
                                                <a href='add.php?id=$id_account&email=$email_account' id='add' name='add' class='btn btn-success '   onclick='block()'>ADD</a></td>
                                        </tr>
                                        ";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to log out?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
                            <a class="btn btn-primary" href="login.php">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</body>

</html>