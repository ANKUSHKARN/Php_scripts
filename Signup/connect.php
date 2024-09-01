<?php 
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='signupforms';


$connect=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

// if($connect){
//     echo "Successfully connected";
// }else{
//     die(mysqli_error($connect));
// }


if(!$connect){
    die(mysqli_error($connect));
}
?>