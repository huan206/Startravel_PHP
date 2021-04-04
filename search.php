<?php
    include "admin_set.php";
    $str = $_POST['query'];

    $tourHot = new tourHot();
    $tourOffer = new tourOffer();
    $tourCruise = new tourCruise();
    $tourSport = new tourSport();
    $tourCapital = new tourCapital();
    $blog = new blog();

    $query1 = "SELECT * FROM tour_hot WHERE (name_hot LIKE '%$str%') or (price_hot LIKE '%$str%') or (from_to_hot LIKE '%$str%')";
    $rows = $tourHot->fetch($query1);
    if (!empty($rows)){
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
    }
    else echo "fail";
    $query2 = "SELECT * 'offer' as type FROM tour_offer WHERE (name_offer LIKE '%$str%') OR (price_offer LIKE '%$str%') OR (fromto_offer LIKE '%$str%')";
    $rows = $tourOffer->fetch($query2);
    if (!empty($rows)){
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
    }
        $query3 = "SELECT * 'cruise' as type FROM tour_cruise WHERE (name_cruise LIKE '%$str%') OR (price_cruise LIKE '%$str%') OR (fromto_cruise LIKE '%$str%')";
        $rows = $tourCruise->fetch($query3);
        if (!empty($rows)){
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

    }
    $query4 = "SELECT * 'capital' as type FROM tour_capital WHERE (name_capital LIKE '%$str%') OR (price_capital LIKE '%$str%') OR (fromto_capital LIKE '%$str%')";
   
    $rows = $tourCapital->fetch($query4);
        if (!empty($rows)){
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
    }
    $query5 = "SELECT * 'sport' as type FROM tour_sport WHERE (name_sport LIKE '%$str%') OR (price_sport LIKE '%$str%') OR (fromto_sport LIKE '%$str%')";
    $rows = $tourSport->fetch($query5);
        if (!empty($rows)){
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
    }
    $query6 = "SELECT * 'blog' as type FROM blog WHERE (author_blog LIKE '%$str%') OR (time_blog LIKE '%$str%') OR (title_blog LIKE '%$str%'))";
    $rows = $blog->fetch($query6);
        if (!empty($rows)){
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
    }
?>