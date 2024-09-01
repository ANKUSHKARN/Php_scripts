<?php  

$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * from `registration` where username='$username'";

    $result=mysqli_query($connect,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $user=1;
            // echo "user already exist";
        }else{
             if($username!=''){
        $sql="insert into `registration` (username, password) values('$username','$password')";
    };
    
    
    $result = mysqli_query($connect,$sql);
    if($result){
         $success=1;
         header('location:login.php');
            // echo "Signup Successful";
        }else{
            die(mysqli_error($connect));
        }

        }
    }

    // if($username!=''){
    //     $sql="insert into `registration` (username, password) values('$username','$password')";
    // };


    // $result = mysqli_query($connect,$sql);

    // if($result){
    //     echo "Data Inserted successfully";
    // }else{
    //     die(mysqli_error($connect));
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php 
if($user){
    echo '<script>alert("Already Registered")</script>';
}
?>
<?php 
if($success){
    echo '<script>alert("Successfully Registered")</script>';
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Process form data here
    
//     // Redirect to the same page to prevent resubmission
//     header("Location: " . $_SERVER['REQUEST_URI']);
//     exit();
// }
?>




    <div class="container bg-light mt-5 border border-primary p-2 border-opacity-50 pb-3 pl-3 rounded ">

        <h1 class="mb-5 mt-2">Sign Up</h1>
        <form action="sign.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="" name="username"><br>
            </div>
            <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="" name="password"><br>
            </div>
            <button type="submit" class="btn btn-primary"> Signup</button><br>
            <p>Already have an account?<a class="ml-1" href="login.php">Login</a></p> 
        </form>

        


    </div>
    </body>
</html>