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
            echo $table = "
            <tr>
                <td>$id</td>
                <td>$name</td>
                <td><img src='images/$img' height='200' width='250'></td>
                <td>$price</td>
                <td>$detail</td>
                <td>$from_to</td>
                <td><button type='button' class='btn btn-success bt'  data-toggle='modal' data-target='#update_hot$id'>EDIT</button></td>
                <td><a href='delete_hot.php?id=$id'><button type='button' class='btn btn-success bt'>DELETE</button></a></td>
            </tr>
            ";
            echo $modal = " 
            </div> <div class='modal fade' id='update_hot$id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
                        <input type='text' class='form-control' id='named_hot' name='id_hot2' value='$id' readonly>
                    </div>
                            <div class='col-12 mt-3'>
                                <input type='text' class='form-control' id='named_hot' name='name_hot2' value='$name'>
                            </div>
                            <div class='col-12 mt-3'>
                                <input type='file' class='form-control' id='imgd_hot' name='img_hot2'>
                            </div>
                            <div class='col-12 mt-3'>
                                <input type='number' class='form-control' id='priced_hot' name='price_hot2' value='$price'>
                            </div>
                            <div class='col-12 mt-3'>
                            <input type='text' class='form-control' id='detaild_hot' name='detail_hot2' value='$detail'>
                        </div>
                            <div class='col-12 mt-3'>
                                <input type='text' class='form-control' id='fromd_hot' name='fromto_hot2' value='$from_to'>
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