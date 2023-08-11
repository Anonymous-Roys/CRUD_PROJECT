<?php
    require_once("conn.php");
    $query = "SELECT * FROM signup";
    $result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECTS</title>
    <!-- Link the custom CSS file -->
    <link rel="stylesheet" href="view.css">
    <link rel="shortcut icon" href="bg_img.jpeg">
</head>

<body>
    <navbar>
        <div class="navbar">
        <input type="text" class="searchbox" placeholder="Search...">
        <a href="logon.php" class="lohu">Login</a>
        <a href="index.php"class="lohu">Sign Up</a>
    </div>
    </navbar>
    <div class="container">
        <h1>CRUD Project</h1>
        <h2><a href="index.php">+ Add New Record</a></h2>
        <table>
            <thead>
                <tr>
                    <th>UserId</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $fullname = $row['fullname'];
                    $username = $row['username'];
                    $email = $row['email'];
                ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $username ?></td>
                        <td><?php echo $email ?></td>
                        <td> 
                            <a class="update" href="edit.php?GetID=<?php echo $id ?>">Update Record</a>
                            <a class="delete" href="delete.php?Del=<?php echo $id ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
