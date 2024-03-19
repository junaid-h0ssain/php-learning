<?php
    include 'header.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
</head>
<body>
    <h2>Welcome to your Profile page <?php echo $_SESSION["username"]; ?></h2>
    <img style="padding: 10px"; src="png-transparent-business-man-happiness-male-person-emotion-love-woman-boyfriend.png" alt="Happy man">
</body>
</html>

<?php
    include 'footer.php';
?>