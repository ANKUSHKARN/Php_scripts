<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include './partials/connect.php'?>
<?php include './partials/header.php'?>
<h1 class="text-center text-primary my-3">Welcome to Our Store</h1>
<h2 class="text-center text-success my-3">Shop while off</h2>

<div class="container">
    <div class="row">
        <?php 
        $sql = "select * from `gadgets` ";
        $result = mysqli_query($con,$sql);

        if($result){
            // $row = mysqli_fetch_assoc($result);
            // echo $row['category_name'];
            
            while($row=mysqli_fetch_assoc($result)){
                $category_id=$row['category_id'];
                $category_name=$row['category_name'];
                $category_desc=$row['category_desc'];
                $category_price=$row['category_price'];
                $category_image=$row['category_image'];

                echo '<div class="col-md-4 col-sm-6 col-xm-12 my-2 ml-3">
        <div class="card" style="width: 18rem;">
  <img src='.$category_image.' class="card-img-top" alt="..." style="height:300px; object-fit:contain" >
  <div class="card-body">
    <h5 class="card-title">'.$category_name.'</h5>
    <p class="card-text">'.substr($category_desc,0,55).'...</p>
    <p class="card-text"><b>'.$category_price.'</b></p>
    <a href="details.php?details_id='.$category_id.'" class="btn btn-primary">Buy now</a>
  </div>
</div>
</div>';
            }
        }
        
        ?>
        
    
    </div>
</div>


</body>
</html>