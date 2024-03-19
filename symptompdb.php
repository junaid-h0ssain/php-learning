<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptomps Checker</title>
</head>
<body>
    <form action="symptompdb.php" method="get">
        <!-- <input type="checkbox" name="2" value="2">1. Fever     
        <input type="checkbox" name="3" value="3">2. headache      
        <input type="checkbox" name="4" value="4">3. sneezing      
        <input type="checkbox" name="5" value="5">4. cough     
        <input type="checkbox" name="6" value="6">5. sore-throat    <br>
        <input type="checkbox" name="7" value="7">6. itching       
        <input type="checkbox" name="8" value="8">7. loose-stools      
        <input type="checkbox" name="9" value="9">8. cramping      
        <input type="checkbox" name="10" value="10">9. abdomen-pain    
        <input type="checkbox" name="11" value="11">10. nausea     <br>
        <input type="checkbox" name="12" value="12">11. bloating       
        <input type="checkbox" name="13" value="13">12. fatigue    
        <input type="checkbox" name="14" value="14">13. puffy eyes     
        <input type="checkbox" name="15" value="15">14. eye irritation      <br>
        <input type="submit" name="submit" value="submit"> -->

        
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="2" value="2">
        <label class="btn btn-outline-primary" for="btncheck1">Fever</label>

        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="3" value="3">
        <label class="btn btn-outline-primary" for="btncheck2">Headache</label>

        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="4" value="4">
        <label class="btn btn-outline-primary" for="btncheck3">Sneezing</label>

        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="5" value="5">
        <label class="btn btn-outline-primary" for="btncheck4">Cough</label>

        <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" name="6" value="6">
        <label class="btn btn-outline-primary" for="btncheck5">Sore-Throat</label><br>

        <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off" name="7" value="7">
        <label class="btn btn-outline-primary" for="btncheck6">Eye Ithcing</label>

        <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off" name="8" value="8">
        <label class="btn btn-outline-primary" for="btncheck7">Loose Stools</label>

        <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off" name="9" value="9">
        <label class="btn btn-outline-primary" for="btncheck8">Cramping</label>

        <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off" name="10" value="10">
        <label class="btn btn-outline-primary" for="btncheck9">Abdomen Pain</label><br>

        <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off" name="11" value="11">
        <label class="btn btn-outline-primary" for="btncheck10">Nausea</label>

        <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off" name="12" value="12">
        <label class="btn btn-outline-primary" for="btncheck11">Bloating</label>

        <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off" name="13" value="13">
        <label class="btn btn-outline-primary" for="btncheck12">Fatigue</label>

        <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off" name="14" value="14">
        <label class="btn btn-outline-primary" for="btncheck13">Puffy Eyes</label>

        <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off" name="15" value="15">
        <label class="btn btn-outline-primary" for="btncheck14">Eye Irritation</label><br>

        <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off" name="16" value="16">
        <label class="btn btn-outline-primary" for="btncheck15">blackheads - small black or yellowish bumps that develop on the skin</label>

        <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off" name="17" value="17">
        <label class="btn btn-outline-primary" for="btncheck16">papules - small red bumps that may feel tender or sore</label>

        <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off" name="18" value="18">
        <label class="btn btn-outline-primary" for="btncheck17">nodules - large hard lumps that build up beneath the surface of the skin</label><br>

        <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off" name="19" value="19">
        <label class="btn btn-outline-primary" for="btncheck18">wheezing (a whistling sound when you breathe)</label>

        <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off" name="20" value="20">
        <label class="btn btn-outline-primary" for="btncheck19">shortness of breath</label>

        <input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off" name="21" value="21">
        <label class="btn btn-outline-primary" for="btncheck20">joint pain</label>

        <input type="checkbox" class="btn-check" id="btncheck21" autocomplete="off" name="22" value="22">
        <label class="btn btn-outline-primary" for="btncheck21">stiffness</label>

        <input type="checkbox" class="btn-check" id="btncheck22" autocomplete="off" name="23" value="23">
        <label class="btn btn-outline-primary" for="btncheck22">warm, red skin over the affected joint</label><br>

        <input type="checkbox" class="btn-check" id="btncheck23" autocomplete="off" name="24" value="24">
        <label class="btn btn-outline-primary" for="btncheck23">weakness and muscle wasting</label>

        <input type="checkbox" class="btn-check" id="btncheck24" autocomplete="off" name="25" value="25">
        <label class="btn btn-outline-primary" for="btncheck24">loss of memory</label>

        <input type="checkbox" class="btn-check" id="btncheck25" autocomplete="off" name="26" value="26">
        <label class="btn btn-outline-primary" for="btncheck25">change in behaviour</label><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php
     $symps=array();
    
    for($i=0;$i<=100;$i++){
         if(isset($_GET["submit"])){
             if(isset($_GET[$i])){
                array_push($symps,$i);
             }
             
         }
     }


    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "symptompdb";
    $conn = "";

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    $prt=array();
    foreach ($symps as $symp){
       
        $sql="SELECT D.DNAME FROM DIS D INNER JOIN RESULT R ON D.ID = R.DID
        WHERE R.SID={$symp}
        GROUP BY D.DNAME";
        $r= mysqli_query($conn, $sql);

        if(mysqli_num_rows($r)>0){
            $row= mysqli_fetch_assoc($r);
            $d=$row["DNAME"];
            if(!in_array($d,$prt)){
                echo "{$d} <br>";
                $prt[]=$d;
            }
        }
    }
    
?>
<?php
    include 'footer.php';
    mysqli_close($conn);
?>