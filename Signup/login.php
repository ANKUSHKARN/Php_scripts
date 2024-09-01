<?php  
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * from `registration` where username='$username' and password='$password'";

    $result=mysqli_query($connect,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo "Login Successful";
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
        }else{
            $invalid=1;
            // echo "Invalid data";
    }
}
};
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php 
if($login){
    echo '<script>alert("You are Successfully logged in")</script>';
}
?>
<?php 
if($invalid){
    echo '<script>alert("Invalid username or password")</script>';
}
?>




    <div class="container bg-light mt-5 border border-primary p-2 border-opacity-50 pb-3 pl-3 rounded">

        <h1>Login Your Account</h1>
        <form action="login.php" method="post">
            
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="" name="username"><br>
            </div>
            <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="" name="password"><br>
            </div>
            <button type="submit" class="btn btn-primary"> Login</button>
            <p>Don't have any account?<a class="ml-1" href="sign.php">Register</a></p>
        </form>
    </div>
</body>
</html>