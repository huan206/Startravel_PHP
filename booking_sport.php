<?php
ini_set("display_errors",0);
$id_tour=$_GET['id'];
$link=new mysqli("localhost","root","","startravel");
$query="select * from activity";
$result=mysqli_query($link,$query);
$query2="select * from account";
$result2=mysqli_query($link,$query2);
while($row=mysqli_fetch_assoc($result)){
$name=$row['activity_name'];
while($row2=mysqli_fetch_assoc($result2)){
$name2=$row2['account_name'];
if($name==$name2){
    $id=$row2['account_id'];
}
}
}
if(!$id){
    echo "<script>alert('YOU ARE NOT LOGGED IN !!!')</script>";
    echo "<script>window.location.replace('index.php')</script>";
}else{
$query="select * from tour_sport where id_sport='$id_tour'";
$result3=mysqli_query($link,$query);
while($row3=mysqli_fetch_assoc($result3)){
    $image=$row3['img_sport'];
    $name=$row3['name_sport'];
    $price=$row3['price_sport'];
    $from_to=$row3['from_to_sport'];
   }
   $query="insert into cart(image_tour,id_account,id_tour,name_tour,price_tour,from_to,status) value ('$image',$id,$id_tour,'$name',$price,'$from_to','checking in')";$result=mysqli_query($link,$query);
echo "<script>alert('ADD TO CART SUCCESSFULLY !!!')</script>";
echo "<script>window.location.replace('index.php')</script>";
}
?>