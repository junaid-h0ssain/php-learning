<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
</head>
<body>
    
</body>
</html>

<?php
    
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "users";
    $cons = "";

    $cons = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    $sql3= "SELECT * FROM DOC";
    $rsl= mysqli_query($cons,$sql3);

    echo "<table>";
    echo "<tr><th> Name </th>" . 
    "<th> Expertise </th>" . 
    "<th> Alumni </th>" . 
    "<th> Contact </th></tr>";

    if(mysqli_num_rows($rsl)>0){
        while($rws= mysqli_fetch_assoc($rsl)){
            echo "<tr><th> " . $rws["name"] . " </th>";
            echo "<th> " . $rws["exp"] . " </th>";
            echo "<th> " . $rws["schl"] . " </th>";
            echo "<th> " . $rws["phone"] . " </th></tr>";


            // <!-- echo "{$rws["name"]} <br>";
            // echo "{$rws["exp"]} TK<br>";
            // echo "{$rws["schl"]} <br>";
            // echo "{$rws["phone"]} <br><br>"; -->
        }
    }
    echo "</table>";
?>

<?php
    mysqli_close($cons);
    include 'footer.php';
?>