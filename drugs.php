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

    echo "<table class='table table-striped-columns table-hover table-bordered border-danger'><thead>";
    echo "<tr class='table-primary'><th scope='col'> Name </th>" .
        "<th scope='col'> Price </th>" .
        "<th scope='col'> Generic Name </th>" .
        "<th scope='col'> Manufacturer </th>" .
        "<th scope='col'> Description </th></tr>";
    if(mysqli_num_rows($rs)>0){
        while($rw= mysqli_fetch_assoc($rs)){
            echo "<tbody><tr scope='row'><th> " . $rw["name"] . " </th>";
            echo "<th> " . $rw["price"] . " Tk </th>";
            echo "<th> " . $rw["ingredient"] . " </th>";
            echo "<th> " . $rw["company"] . " </th>";
            echo "<th> " . $rw["descrip"] . " </th></tr></tbody>";

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