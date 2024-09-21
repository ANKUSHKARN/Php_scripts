<?php 

$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DB_NAME='basic_ecom';

$con = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DB_NAME);

if(!$con){
    die(mysqli_error($con));
}
?>