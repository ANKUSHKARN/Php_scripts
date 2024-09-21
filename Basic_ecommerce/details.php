<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php include './partials/connect.php'?>
<?php include './partials/header.php'?>

<?php
$id=$_GET['details_id'];
$sql = "select * from `gadgets` where category_id=$id";

$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    // echo $row['category_name'];
    // while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_name=$row['category_name'];
        $category_desc=$row['category_desc'];
        $category_price=$row['category_price'];
        $category_image=$row['category_image'];
    // }
}

?>
<div class="jumbotron">
    <div class="container">

        <h1 class="display-4 text-center text-primary"><?php echo $category_name?></h1>
        <p class="lead"><?php echo $category_desc?></p>
        <hr class="my-4">
        <p class="lead">
            <button class="btn btn-dark"> <a class="btn btn-dark btn-lg" href="index.php" role="button">Explore more products</a></button>
         
        </p>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src=<?php echo $category_image?> class="image-fluid" alt="" style="height:300px; object-fit:contain">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger"><?php echo $category_name?></h2>
            <p><?php echo $category_desc?></p>
            <h4><strong>Price: <?php echo $category_price?></strong></h4>
            <!-- <button class="">Add to Cart</button> -->
            <button type="button" class="btn btn-success" data-toggle="popover" title="Hold on!!" data-content="This feature is coming soon">Add to cart</button>
        </div>
    </div>
</div>




<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
  });
</script>


</body>
</html>