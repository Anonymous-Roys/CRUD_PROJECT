<?php
require_once("../backend/conn.php");

if (isset($_POST['Login'])) {

    $UserName = $_POST['usesrname'];
    $Fullname = $_POST['fullname'];
    $EmailAddress = $_POST['email'];
    $Password = $_POST['password'];

    // Use prepared statement to protect against SQL injection
    $query = "SELECT COUNT(*) FROM signup WHERE username = ? AND fullname = ? AND email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $UserName, $Fullname, $EmailAddress, $Password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $count);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($count > 0) {
        echo "Login successful";
        header("Location: view.php");
        exit(); // Exit here to stop further execution
    } else {
        header("Location:logon.php");
        echo "Login unsuccessful, please try again";
    }
} else {
    echo "Login unsuccessful, please try again";
}
?>
