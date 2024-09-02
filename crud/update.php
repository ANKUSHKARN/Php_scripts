<?php 
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        echo "Data updated successfully, redirecting in 3 seconds.";
        // header('location:display.php');
        echo '<meta http-equiv="refresh" content="3;url=display.php">';
    }else{
        die(mysqli_error($con));
    }
}


?>

<?php 
  $sql = "select * from `crud` where id=$id";
  $result=mysqli_query($con, $sql);
  if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
      function confirmUpdate() {
          return confirm('Are you sure you want to update this record?');
      }
    </script>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value="<?php echo $name; ?>">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value="<?php echo $email; ?>">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile" autocomplete="off" value="<?php echo $mobile; ?>">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value="<?php echo $password; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary " name="submit" onclick="return confirmUpdate()">Update</button>
</form>
    </div>

  </body>
</html>