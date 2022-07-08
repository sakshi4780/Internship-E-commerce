<?php

include('env.php');

$conn= mysqli_connect($server,$username,$password,$database);

if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}
echo"";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO  `users`(`Name`, `email`, `password`, `phone_no`) VALUES('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR: Could not able to execute $sql. " .mysqli_error($conn);
    }
}

// session_start();


if(isset($_POST['Login'])){
    $email= $_POST['email'];
    $password= $_POST['password'];
    $query="SELECT * FROM users WHERE `email`='$email' AND `password` = '$password'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['email'] = $login_user;
        header("location: index.php");
    }else{
        $error = "Incorrect emailid or password.";
    }
}

if(isset($_POST['jobBtn'])){
    
    $id= bin2hex(random_bytes(4));;
    $cname= $_POST['cname'];
    $position= $_POST['position'];
    $JDesc= $_POST['JDesc'];
    $skills= $_POST['skills'];
    $CTC= $_POST['CTC'];
    
    $sql = "INSERT INTO `jobs`(`id`,`cname`, `position`, `JDesc`, `skills`, `CTC`) VALUES ('$id','$cname','$position','$JDesc','$skills','$CTC')";


    if(mysqli_query($conn, $sql)){
        echo "New Job Posted.";
    }else{
        echo "Failed to post. Try Again Later!! $sql. " .mysqli_error($conn);
    }
}

if(isset($_POST['apply'])){
    
    // $id= bin2hex(random_bytes(4));;
    $name= $_POST['name'];
    $apply0= $_POST['apply0'];
    $qualification= $_POST['qualification'];
    $year= $_POST['year'];
    
    $sql = "INSERT INTO `candidates`(`name`, `apply`, `qualification`, `year`) VALUES ('$name', '$apply0', '$qualification', '$year')";


    if(mysqli_query($conn, $sql)){
        echo "Application Successfully Submitted";
    }else{
        echo "Failed to apply. Try Again Later!! $sql. " .mysqli_error($conn);
    }
}

mysqli_close($conn);
?>