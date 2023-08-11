<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECTS-signup</title>
    <link rel="stylesheet" href="style.css">
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
        <h1>CRUD SignUp Page</h1>
        <form action="insert.php" method="POST">
            <div class="formgroup">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="formgroup">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="formgroup">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="formgroup">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="formgroup">
                <input type="submit" value="Submit" name="submit">
                <a href="logon.php"><span class="button">LogIn</span></a>
            </div>
        </form>
    </div>
</body>

</html>