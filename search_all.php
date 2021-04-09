<?php
    include "admin_set.php";
    $str = $_POST['query'];

    $tour = new database();

    $query = "SELECT * FROM tour_hot WHERE (name_hot LIKE '%$str%') or (price_hot LIKE '%$str%') or (from_to_hot LIKE '%$str%')
    UNION ALL
    SELECT * FROM tour_offer WHERE (name_offer LIKE '%$str%') OR (price_offer LIKE '%$str%') OR (from_to_offer LIKE '%$str%')
    UNION ALL
    SELECT * FROM tour_cruise WHERE (name_cruise LIKE '%$str%') OR (price_cruise LIKE '%$str%') OR (from_to_cruise LIKE '%$str%')
    UNION ALL
    SELECT * FROM tour_capital WHERE (name_capital LIKE '%$str%') OR (price_capital LIKE '%$str%') OR (from_to_capital LIKE '%$str%')
    UNION ALL
    SELECT * FROM tour_sport WHERE (name_sport LIKE '%$str%') OR (price_sport LIKE '%$str%') OR (from_to_sport LIKE '%$str%')";
    
    $rows = $tour->fetch($query);
    if (!empty($rows)){
        foreach ($rows as $row) {
            $id = $row['id_hot'];
            $name = $row['name_hot'];
            $img = $row['img_hot'];
            $price = $row['price_hot'];
            $detail = $row['detail_hot'];
            $from_to = $row['from_to_hot'];
            echo "<div class='col-sm-6 col-md-6'>
                <div class='main-block hot-block'>
                    <div class='row'>
                        <div class='col-sm-12 col-md-6 col-md-push-6 no-pd-l'>
                            <div class='main-img hot-img'>
                                <a>
                                <div data-toggle='modal' data-target='#myModalhot$id'><img src='images/$img'class='img-responsive' alt='hot-img'/></div>
                                    <div class='hot-mask'>
                                        <p>7 Nights, 6 Days</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class='col-sm-12 col-md-6 col-md-pull-6 no-pd-r'>
                            <div class='main-info hot-info'>
                                <div class='main-title hot-title'>
                                    <a href='#'> $name</a>
                                    <p>From: $from_to</p>
                                    <div class='rating'>
                                        <span><i class='fa fa-star orange'></i></span>
                                        <span><i class='fa fa-star orange'></i></span>
                                        <span><i class='fa fa-star orange'></i></span>
                                        <span><i class='fa fa-star orange'></i></span>
                                        <span><i class='fa fa-star lightgrey'></i></span>
                                    </div>
                                    <span class='hot-price'>$price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
    }
    if (!empty($rows)) {
        foreach ($rows as $row) {
            $id_hot = $row['id_hot'];
            $name_hot = $row['name_hot'];
            $img_hot = $row['img_hot'];
            $price_hot = $row['price_hot'];
            $detail_hot = $row['detail_hot'];
            $from_to_hot = $row['from_to_hot'];
            echo
            '<div class="modal fade" id="myModalhot' . $id_hot . '" role="dialog">
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
                                <a href="booking_cruise.php?id=' . $id_hot. '"><button type="button" class="btn btn-primary" onclick="">Add to cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }
    ?>
