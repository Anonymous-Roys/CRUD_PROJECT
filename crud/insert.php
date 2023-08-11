<?php
require_once('conn.php');

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassword = password_hash($password, PASSWORD_BCRYPT); 

    if (empty($fullname) || empty($username) || empty($email) || empty($hashedpassword)){
        echo "Please fill in the blank spaces";
    }else{

        $query = "INSERT INTO signup(fullname, username, email, password) 
        VALUES('$fullname', '$username', '$email', '$hashedpassword')";

        $result = mysqli_query($conn, $query);

        if($result){
            header("Location: view.php");
        }else{
            echo "There is an error in your QUERY statement. Please try again";
        }

    }
}
else{
    header("location: index.php");
}
?>