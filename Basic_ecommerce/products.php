<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include './partials/connect.php'?>
<?php include './partials/header.php'?>

<h1 class="text-center text-primary my-3">All products listed on our Website</h1>
<h2 class="text-center text-success my-3">Check out the list</h2>
<hr>

<div class="container">
    <div class="row">
        <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Product id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
    </tr>
</thead>
  <tbody>
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

                echo '
    <tr>
      <th style="cursor:pointer;" scope="row">'.$category_id.'</th>
      <td><a href="details.php?details_id='.$category_id.'">'.$category_name.'</a></td>
      <td>'.substr($category_desc,0,30).'...</td>
      <td>'.$category_price.'</td>
    </tr>';
            }
        }
        
        ?>
        </tbody>
</table>
    
    </div>
</div>
</body>
</html>