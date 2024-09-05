<?php

include 'connect.php';
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $image = $_FILES['file'];
  // echo $username . "<br>" . $mobile . "<br>";
  // print_r($image);
  // echo "<br>";

  $imagefilename = $image['name'];
  // print_r($imagefilename);
  // echo '<br>';
  $imagefileerror = $image['error'];
  // print_r($imagefileerror);
  // echo '<br>';
  $imagefiletemp = $image['tmp_name'];
  // echo $imagefiletemp;
  // echo '<br>';

  $filename_separate = explode('.', $imagefilename);
  // print_r($filename_separate);
  $file_extension = strtolower($filename_separate[1]);
  // echo '<br>';
  // print_r($file_extension);

  $extensions = ['jpeg', 'jpg', 'png'];
  if (in_array($file_extension, $extensions)) {
    $upload_image = 'images/' . $imagefilename;
    move_uploaded_file($imagefiletemp, $upload_image);

    $sql = "insert into `registration` (name,mobile,image) values ('$username','$mobile','$upload_image')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      echo '<div class="alert alert-success" role="alert">
  <strong>Success</strong>Data Inserted Successfully!
</div>';
    } else {
      die(mysqli_error($con));
    }
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    img{
      width: 100px;
    }
  </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
      <h1 class="text-center my-4 mx-5">User Data</h1>
      <a href="./index.php"><button class="btn btn-info my-4 mx-5" >Add more user</button></a>
    </div>
  <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
      <thead class="table-dark">
        <tr>
          <th scope="col">s no.</th>
          <th scope="col">Username</th>
          <th scope="col">Image</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include 'connect.php';
        $sql = "select * from `registration`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $images = $row['image'];
          echo '<tr>
      <td>' . $id . '</td>
      <td>' . $name . '</td>
      <td><img src=' . $images . '></td>
    </tr>';
        }


        ?>
      </tbody>
    </table>

  </div>

</body>


</html>