<?php
$connection = mysqli_connect('localhost','root','','db_tourph');

if($connection){
    echo "Connected";
}else{
    echo "Not Connected";
}
?>