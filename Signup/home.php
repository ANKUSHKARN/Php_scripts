<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light mt-5 border border-primary p-2 border-opacity-50 pb-3 pl-3 rounded">

        <h1>Welcome
            <?php echo $_SESSION['username']; ?>
        </h1>
        <div class="mt-5 ">
        <a style="text-decoration:none ; color:"href="logout.php">   <button class="btn btn-outline-primary">logout</button></a>
        </div>
    </div>
</body>
</html>