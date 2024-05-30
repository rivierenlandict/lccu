<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigenaar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container{
            width: 80%;
            margin: 0px auto;
            text-align: center;
            padding: 1em;
        }
        h1, h2{
            padding: 0.5em;
        }
  
   

    </style>
</head>
<body>
<div class="container">
<a href="index.php"> Terug </a>
<?php
$eigenaarid = $_GET["id"];
echo "<h1> Eigenaar </h1>";
echo "<table class='table'>";
echo "<tr><th> Naam </th><th> Voornaam </th><th> Geboortedatum </th><th> Adres </th><th> Gemeente </th><th> Hoedanigheid </th></tr>";
$sql = "SELECT * FROM eigenaar WHERE Id = '$eigenaarid'";
$result = $conn->query($sql);
if($result){
    echo "<script> console.log('ok'); </script>";
}
else{
    echo "<script> console.log('something went wrong'); </script>";
}
while($row = $result->fetch_assoc()){
    echo "<td> ".$row["Naam"]."</td><td>".$row["Voornaam"]."</td><td>".$row["Geboortedatum"]."</td><td>".$row["Adres"]."</td><td>".$row["Gemeente"]."</td>";
    $hoedanigheidid = $row["HoedanigheidId"];
    $materiaalid = $row["MateriaalId"];
    //Getting the hoedanigheid
    $sql = "SELECT * FROM hoedanigheid WHERE Id = '$hoedanigheidid'";
    $result = $conn->query($sql);
    while($row2 = $result->fetch_assoc()){
        $hoedanigheid = $row2["Hoedanigheid"];
    }
    /////////////
    echo "<td>".$hoedanigheid."</td></tr>";
}
echo "</table>";
?>
<h1> Materiaal </h1>
<?php
echo "<table class='table'>";
echo "<tr><th> Model </th><th> Serienummer </th><th> Toegangscode </th><th> SINN </th><th> Extra info </th></tr>";
$sql = "SELECT * FROM materiaal WHERE eigenaarId = '$eigenaarid'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row["Model"]."</td><td>".$row["Serienummer"]."</td><td>".$row["Toegangscode"]."</td><td>".$row["SINN"]."</td><td>".$row["ExtraInfo"]."</td></tr>";

}
echo "</table>";
?>
</div>
</body>
</html>