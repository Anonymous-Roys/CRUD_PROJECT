<?php
require_once("conn.php");
if (isset($_POST['update'])) {
    $id = $_GET['ID'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "UPDATE signup SET fullname = '".$fullname."', 
    username='".$username."', email='".$email."', 
    password='".$hashedpassword."' WHERE id = '".$id."'";

    $result = mysqli_query($conn, $query);

    if ($result){
        header("location:view.php");

    }else{
        echo "please check your query and try again";
    }
}else{
    header("location:view.php");
}

?>