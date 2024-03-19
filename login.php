<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <div style="text-align: center;">
    <h2>The login page is a dead page</h2>
        <form action="signup.php" method="post">
            <h1>login here <br></h1>
            <label>Username :</label><br>
            <input type="text" name="username"><br>
            <label>Phone Number :</label><br>
            <input type="number" name="phone"><br>
            <label>Password :</label><br>
            <input type="password" name="pass"><br>
            <input type="submit" value="login">
        </form>
    </div>
    
</body>
</html>

<?php

?>
<?php
    include 'footer.php';
?>