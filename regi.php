<?php
$conn = mysqli_connect("localhost","root","","registration system");


if(!$conn){
    die('Connection_Error: '.mysqli_connect_error());
}

//echo 'Connection Successfully';

?>