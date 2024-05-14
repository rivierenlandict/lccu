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
$sql = "SELECT aanvraag.Team, aanvraag.Id, aanvraag.EigenaarId, aanvraag.Dossierbeheerder, aanvraag.Pv, aanvraag.Misdrijf, aanvraag.NaamOr, aanvraag.Inbeslagname, aanvraag.Dossiernaam, aanvraag.Zoekelementen, eigenaar.Naam, eigenaar.Voornaam, afhandeling.Afhandeling FROM aanvraag INNER JOIN eigenaar ON aanvraag.EigenaarId = eigenaar.Id INNER JOIN afhandeling ON aanvraag.AfhandelingId = afhandeling.Id";
$result = $conn->query($sql);
if($result){
    echo "<script> console.log('Table is loaded'); </script>";
}
else{
    echo "<script> console.log('Something went wrong'); </script>";
}
echo "<form method='post'>";
echo "<table class='table'>";
echo "<tr><th> Team </th><th> Dossierbeheerder </th><th> PV </th><th> Misdrijf </th><th> OR/PDK </th><th> Datum inbeslagname </th><th> Dossiernaam </th><th> Eigenaar </th><th> Afhandeling </th><th> Zoekelementen </th><th> Acties </th></tr>";
$tellerDelete = 0;
while($row = $result->fetch_assoc()){
    $idrij= $row["Id"];
    echo "<tr><td>".$row["Team"]."</td><td>".$row["Dossierbeheerder"]."</td><td>".$row["Pv"]."</td><td>".$row["Misdrijf"]."</td><td>".$row["NaamOr"]."</td><td>".$row["Inbeslagname"]."</td><td>".$row["Dossiernaam"]."</td><td><a href='eigenaar.php?id=".$row["EigenaarId"]."'>".$row["Naam"]."</a></td>
    <td>";
    if($row["Afhandeling"] == "Gewone afhandeling"){
        echo "<span style='color:green;'>".$row["Afhandeling"]."</span>";
    }
    else if($row["Afhandeling"] == "Dringend"){
        echo "<span style='color:orange;'>".$row["Afhandeling"]."</span>";
    }
    else if($row["Afhandeling"] == "Prioritair"){
        echo "<span style='color:red;'>".$row["Afhandeling"]."</span>";
    }
    echo "</td><td>".$row["Zoekelementen"]."</td><td> <button name='btnDelete".$tellerDelete."' value='".$row["Id"]."' class='btn btn-danger'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
  </svg></button></td></tr>";
  $tellerDelete++;
}
echo "</table>";
echo "</form>";

for($i=0;$i<$tellerDelete;$i++){
    if(isset($_POST["btnDelete".$i])){
        $teverwijderenid = $_POST["btnDelete".$i];
        $sql = "DELETE FROM aanvraag WHERE Id = '$teverwijderenid'";
        $result = $conn->query($sql);
        if($result){
            echo "<script> window.location.reload(); </script>";
            echo "Record verwijderd uit aanvraag";
        }
        else{
            echo "Er is iets misgelopen bij de tabel aanvraag";
        }

    }
}





?>


</div>
</body>
</html>