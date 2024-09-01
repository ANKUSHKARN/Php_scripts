<?php 

//checking if the method is post, then only send the data to database:

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];




//1st way to connect to database

// $HOSTNAME='localhost';
// $USERNAME='root';
// $PASSWORD='';
// $DATABASE='detail_form';

// $connect=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

// if($connect){
    //     echo "Connection success";
    // }else{
        
    //     die(mysqli_error($connect));
    // }
    // if($con){
    //     echo "Connection success";
    // }else{
        
    //     die(mysqli_error($connect));
    // }
    
    
    // if(!$connect){
    //     die(mysqli_error($connect));
    // }


    //2nd method to connect database!!

    // $con = new mysqli('localhost','root','','detail_form');

    // if($con){
    //     echo "connected";
    // }else{
    //     die(mysqli_error($con));
    // }

//---------------------------------------------------------------------------

    $con = new mysqli('sql311.infinityfree.com','if0_37212314','AIxXBKMDRV','if0_37212314_detail_form');

    if($con){
        // echo "connected";

        //transferring data to database
        $sql = "insert into `detail_form` (name,email,mobile,gender,city)values('$name','$email','$mobile','$gender','$city')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Your data has been sent successfully";
            // header('location:index.php');
        }else{
            die(mysqli_error($con));
        }
    }else{
        die(mysqli_error($con));
    }
}
    ?>