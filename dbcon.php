<?php

$con = mysqli_connect("localhost:3307","root","","crud");

if(!$con){
    die('connection failed'.mysqli_connect_error());
}
?>