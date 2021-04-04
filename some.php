
    <form action="" method="post" onsubmit="return false">
    <button name="insert" value="insert"></button>
    <input type="submit" onclick="return false" name="select" value="select" >
    </form>
<?php 
    if(isset($_POST['insert'])){
     echo "2";
    }
    if(isset($_POST['select'])){
        echo "3";
    }
    ?>
 
 