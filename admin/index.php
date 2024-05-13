<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container{
            width: 80%;
            margin: 0px auto;
            text-align: center;
            padding: 1em;
        }
        h1{
            padding: 0.5em;
        }
      .hiddenRow{
        display:none;
      }
   

    </style>
</head>
<body>
<div class="container">
<h1> Aanvragen </h1>
<?php
$sql = "SELECT aanvraag.Team, aanvraag.Dossierbeheerder, aanvraag.Pv, aanvraag.Misdrijf, aanvraag.NaamOr, aanvraag.Inbeslagname, aanvraag.Dossiernaam, eigenaar.Naam, eigenaar.Voornaam, afhandeling.Afhandeling FROM aanvraag INNER JOIN eigenaar ON aanvraag.EigenaarId = eigenaar.Id INNER JOIN afhandeling ON aanvraag.AfhandelingId = afhandeling.Id";
$result = $conn->query($sql);
if($result){
    echo "<script> console.log('Table is loaded'); </script>";
}
else{
    echo "<script> console.log('Something went wrong'); </script>";
}
echo "<table class='table'>";
echo "<tr><th> Team </th><th> Dossierbeheerder </th><th> PV </th><th> Misdrijf </th><th> OR/PDK </th><th> Datum inbeslagname </th><th> Dossiernaam </th><th> Eigenaar </th><th> Afhandeling </th></tr>";
while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row["Team"]."</td><td>".$row["Dossierbeheerder"]."</td><td>".$row["Pv"]."</td><td>".$row["Misdrijf"]."</td><td>".$row["NaamOr"]."</td><td>".$row["Inbeslagname"]."</td><td>".$row["Dossiernaam"]."</td><td><a href='#'>".$row["Naam"]."</a></td>
    <td>";
    if($row["Afhandeling"] == "Gewone Afhandeling"){
        echo "<span style='color:green;'>".$row["Afhandeling"]."</span>";
    }
    else if($row["Afhandeling"] == "Dringend"){
        echo "<span style='color:orange;'>".$row["Afhandeling"]."</span>";
    }
    else if($row["Afhandeling"] == "Prioritair"){
        echo "<span style='color:red;'>".$row["Afhandeling"]."</span>";
    }
    echo "</td></tr>";

}
echo "</table>";
?>


</div>
</body>
</html>