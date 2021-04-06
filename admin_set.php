<?php
class database{
    protected $server = "localhost";
    protected $username = "root";
    protected $password;
    protected $database = "startravel";
    protected $link;

    public function __construct()
    {
        try {
            $this->link = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function fetch($query)
    {
        $row = null;
        if ($sql = $this->link->query($query)) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $row[] = $data;
            }
        }
        return $row;
    }
}
class tourHot extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_hot'];
        $anh = $_POST['img_hot'];
        $price = $_POST['price_hot'];
        $fromto = $_POST['fromto_hot'];
        $detail = $_POST['detail_hot'];
        $anh = $_FILES['img_hot']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_hot']['tmp_name'];
            $anh = $_FILES['img_hot']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_hot(name_hot,img_hot,price_hot,detail_hot,from_to_hot) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_hot2'];
        $anh = $_POST['img_hot2'];
        $price = $_POST['price_hot2'];
        $fromto = $_POST['fromto_hot2'];
        $detail = $_POST['detail_hot2'];
        $anh = $_FILES['img_hot2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_hot2']['tmp_name'];
            $anh = $_FILES['img_hot2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_hot set name_hot='$name',img_hot='$anh',price_hot='$price',detail_hot='$detail',from_to_hot='$fromto' where id_hot='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_hot where id_hot='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}

class tourOffer extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_offer'];
        $anh = $_POST['img_offer'];
        $price = $_POST['price_offer'];
        $fromto = $_POST['fromto_offer'];
        $detail = $_POST['detail_offer'];
        $anh = $_FILES['img_offer']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_offer']['tmp_name'];
            $anh = $_FILES['img_offer']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_offer(name_offer,img_offer,price_offer,detail_offer,from_to_offer) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_offer2'];
        $anh = $_POST['img_offer2'];
        $price = $_POST['price_offer2'];
        $fromto = $_POST['fromto_offer2'];
        $detail = $_POST['detail_offer2'];
        $anh = $_FILES['img_offer2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_offer2']['tmp_name'];
            $anh = $_FILES['img_offer2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_offer set name_offer='$name',img_offer='$anh',price_offer='$price',detail_offer='$detail',from_to_offer='$fromto' where id_offer='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_offer where id_offer='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}

class tourCruise extends database
{
    public function __construct()
    {
        try {
            $this->link = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_cruise'];
        $anh = $_POST['img_cruise'];
        $price = $_POST['price_cruise'];
        $fromto = $_POST['fromto_cruise'];
        $detail = $_POST['detail_cruise'];
        $anh = $_FILES['img_cruise']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_cruise']['tmp_name'];
            $anh = $_FILES['img_cruise']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_cruise(name_cruise,img_cruise,price_cruise,detail_cruise,from_to_cruise) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_cruise2'];
        $anh = $_POST['img_cruise2'];
        $price = $_POST['price_cruise2'];
        $fromto = $_POST['fromto_cruise2'];
        $detail = $_POST['detail_cruise2'];
        $anh = $_FILES['img_cruise2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_cruise2']['tmp_name'];
            $anh = $_FILES['img_cruise2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_cruise set name_cruise='$name',img_cruise='$anh',price_cruise='$price',detail_cruise='$detail',from_to_cruise='$fromto' where id_cruise='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_cruise where id_cruise='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}

class tourSport extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_sport'];
        $anh = $_POST['img_sport'];
        $price = $_POST['price_sport'];
        $fromto = $_POST['fromto_sport'];
        $detail = $_POST['detail_sport'];
        $anh = $_FILES['img_sport']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_sport']['tmp_name'];
            $anh = $_FILES['img_sport']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_sport(name_sport,img_sport,price_sport,detail_sport,from_to_sport) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_sport2'];
        $anh = $_POST['img_sport2'];
        $price = $_POST['price_sport2'];
        $fromto = $_POST['fromto_sport2'];
        $detail = $_POST['detail_sport2'];
        $anh = $_FILES['img_sport2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_sport2']['tmp_name'];
            $anh = $_FILES['img_sport2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_sport set name_sport='$name',img_sport='$anh',price_sport='$price',detail_sport='$detail',from_to_sport='$fromto' where id_sport='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_sport where id_sport='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}
class tourCapital extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_capital'];
        $anh = $_POST['img_capital'];
        $price = $_POST['price_capital'];
        $fromto = $_POST['fromto_capital'];
        $detail = $_POST['detail_capital'];
        $anh = $_FILES['img_capital']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_capital']['tmp_name'];
            $anh = $_FILES['img_capital']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_capital(name_capital,img_capital,price_capital,detail_capital,from_to_capital) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_capital2'];
        $anh = $_POST['img_capital2'];
        $price = $_POST['price_capital2'];
        $fromto = $_POST['fromto_capital2'];
        $detail = $_POST['detail_capital2'];
        $anh = $_FILES['img_capital2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_capital2']['tmp_name'];
            $anh = $_FILES['img_capital2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_capital set name_capital='$name',img_capital='$anh',price_capital='$price',detail_capital='$detail',from_to_capital='$fromto' where id_capital='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_capital where id_capital='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}

class blog extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $author_blog = $_POST['author_blog'];
        $anh = $_POST['img_blog'];
        $time_blog = $_POST['time_blog'];
        $title_blog = $_POST['title_blog'];
        $content_blog = $_POST['content_blog'];
        $anh = $_FILES['img_blog']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_blog']['tmp_name'];
            $anh = $_FILES['img_blog']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into blog(author_blog,img_blog,time_blog,title_blog,content_blog) value ('$author_blog','$anh','$time_blog','$title_blog','$content_blog')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $author_blog = $_POST['author_blog2'];
        $anh = $_POST['img_blog2'];
        $time_blog = $_POST['time_blog2'];
        $title_blog = $_POST['title_blog2'];
        $content_blog = $_POST['content_blog2'];
        $anh = $_FILES['img_blog2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_blog2']['tmp_name'];
            $anh = $_FILES['img_blog2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update blog set author_blog='$author_blog',img_blog='$anh',time_blog='$time_blog',title_blog='$title_blog',content_blog='$content_blog' where id_blog='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from blog where id_blog='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}