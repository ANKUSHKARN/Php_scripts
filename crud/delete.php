<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    // echo $id;

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "User deleted successfully, redirecting in 3 seconds.";
        // header('location:display.php');
        echo '<meta http-equiv="refresh" content="3;url=display.php">';
}else{
    die(mysqli_error($con));
}
}


?>