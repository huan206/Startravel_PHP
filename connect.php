<?php
  function connect(){
      $link = new mysqli("localhost","root","","travel_start");
      return $link;
    }
?>