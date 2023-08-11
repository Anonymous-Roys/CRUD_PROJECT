<?php
require_once("conn.php");
$id = $_GET['GetID'];

$query = "SELECT * FROM signup WHERE id = '".$id."'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $fullname = $row['fullname'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Update Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="bg_img.jpeg">
</head>

<body>
    <div class="container">
        <h2>CRUD Update Registration Form</h2>
        <form action="update.php?ID=<?php echo $id ?>" method="POST">
            <div class="formgroup">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" value = <?php echo $fullname ?> required>
            </div>
            <div class="formgroup">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" value = <?php echo $username ?> required>
            </div>
            <div class="formgroup">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value = <?php echo $email ?> required>
            </div>
            <div class="formgroup">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="formgroup">
                <input type="submit" value="Update" name="update">
            </div>
        </form>
    </div>
</body>

</html>