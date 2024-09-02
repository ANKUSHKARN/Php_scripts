<?php 
include 'connect.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
      function confirmDelete() {
          return confirm('Are you sure you want to delete this record?');
      }
    </script>
</head>

<body>
    <div class="container my-5">
    <button class="btn btn-primary "><a class="text-light " href="user.php" style="text-decoration:none;">Add user</a></button>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $sql = "select * from `crud`";
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
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'"style="text-decoration:none;">Edit</a></button></td>
      <td><button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'" style="text-decoration:none;" onclick="return confirmDelete();">Delete</a></button></td>
      </tr>';

    }
  }

  ?>
  </tbody>
</table>
    </div>
</body>

</html>