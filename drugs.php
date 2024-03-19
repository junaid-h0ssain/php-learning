<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drugs and Suppliments</title>
</head>
<body>
    <h1>Drug list <br><br></h1>
</body>
</html>

<?php
    
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "symptompdb";
    $con = "";

    $con = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    $sql2= "SELECT * FROM DRUG";
    $rs= mysqli_query($con,$sql2);

    echo "<table>";
    echo "<tr><th> Name </th>" .
        "<th> Price </th>" .
        "<th> Generic Name </th>" .
        "<th> Manufacturer </th>" .
        "<th> Description </th></tr>";
    if(mysqli_num_rows($rs)>0){
        while($rw= mysqli_fetch_assoc($rs)){
            echo "<tr><th> " . $rw["name"] . " </th>";
            echo "<th> " . $rw["price"] . " </th>";
            echo "<th> " . $rw["ingredient"] . " </th>";
            echo "<th> " . $rw["company"] . " </th>";
            echo "<th> " . $rw["descrip"] . " </th></tr>";

            // echo "{$rw["name"]} <br>";
            // echo "{$rw["price"]} TK<br>";
            // echo "{$rw["ingredient"]} <br>";
            // echo "{$rw["company"]} <br>";
            // echo "{$rw["descrip"]} <br><br>";
        }
    }
    echo "</table>";
?>

<?php
    include 'footer.php';
    mysqli_close($con);
?>