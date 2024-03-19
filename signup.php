<?php
    include 'header.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>sign up here <br></h1>
        <form action="signup.php" method="get">
            <label>Username :</label><br>
            <input type="text" name="username"><br>
            <label>Phone Number :</label><br>
            <input type="number" name="phone"><br>
            <label>Password :</label><br>
            <input type="password" name="pass"><br>
            <input type="submit" name="signup" value="signup">
        </form>
    </div>
    
</body>
</html>

<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "users";
    $conn = "";
    
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    }catch(mysqli_sql_exception){
        echo "<h2>MySQL Error. Couldn't connect :-(</h2>";
    }
    if(isset($_GET["signup"])){
        $username = $_GET["username"];
        $phone = $_GET["phone"];
        $pass = $_GET["pass"];

        $_SESSION["username"] = $_GET["username"];
        $_SESSION["phone"] = $_GET["phone"];
        $_SESSION["pass"] = $_GET["pass"];

        if(empty($username) || empty($pass) || empty($phone)){
            echo "<div style='text-align: center;'><h2>Please enter a username, phone or password.</h2></div>";
        }
        else{   
            $sq = "INSERT INTO PAT (name,phone,pass) VALUES ('$username','$phone','$pass')";
            mysqli_query($conn,$sq);
            echo "<div style='text-align: center;'><h2>Signup is Complete !</h2></div>";
            header("Location: index.php");
        }
    }

    
?>

<?php
    include 'footer.php';
    mysqli_close($conn);
?>