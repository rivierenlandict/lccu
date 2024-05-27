<?php
include("connect.php");
$tellermateriaal = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

<?php
  $pv = $_POST["txtPv"];
  $misdrijf = $_POST["txtMisdrijf"];

  $adres = $_POST["txtAdres"];
  $gemeente = $_POST["txtGemeente"];

  /*$serienummer = test_input($_POST["txtSerienummer"]);
  $toegangscode = test_input($_POST["txtToegangscode"]);
  $sinn = test_input($_POST["txtSinn"]);
  $info = test_input($_POST["txtExtrainfo"]);*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["txtTeam"])){
    $teamErr = "Team is verplicht";
  }else{
    $team = $_POST["txtTeam"];
  }
  
  if(empty($_POST["txtDossierbeheerder"])){
    $dossierErr = "Dossierbeheerder is verplicht";
  }else{
    $dossierbeheerder = $_POST["txtDossierbeheerder"];
  }

  if(empty($_POST["txtOr"])){
    $orErr = "OR/PDK is verplicht";
  }else{
    $or = $_POST["txtOr"];
  }

  if(empty($_POST["txtDatum"])){
    $datumErr = "Datum is verplicht";
  }else{
    $datum = $_POST["txtDatum"];
  }

  if(empty($_POST["txtDossiernaam"])){
    $dossiernaamErr = "Dossiernaam is verplicht";
  }else{
    $dossiernaam = $_POST["txtDossiernaam"];
  }

  if(empty($_POST["txtNaam"])){
    $naamErr = "Naam is verplicht";
  }else{
    $naam = $_POST["txtNaam"];
  }

  if(empty($_POST["txtVoornaam"])){
    $voornaamErr = "Voornaam is verplicht";
  }else{
    $voornaam = $_POST["txtVoornaam"];
  }

  if(empty($_POST["txtGeboortedatum"])){
    $geboorteErr = "Geboortedatum is verplicht";
  }else{
    $geboortedatum = $_POST["txtGeboortedatum"];
  }

  if(empty($_POST["radioHoedanigheid"])){
    $hoedanigheidErr = "Hoedanigheid is verplicht";
  }else{
    $hoedanigheid = $_POST["radioHoedanigheid"];
  }

  if(empty($_POST["radioAfhandeling"])){
    $afhandelingErr = "Afhandeling is verplicht";
  }else{
    $afhandeling = $_POST["radioAfhandeling"];
  }

  if(empty($_POST["radioToelating"])){
    $toelatingErr = "Toelating is verplicht";
  }else{
    $toelating = $_POST["radioToelating"];
  }

  
  /*if(empty($_POST["txtMerk0"])){
    $merkErr = "Merk en model is verplicht";
  }else{
    $merk = test_input($_POST["txtMerk0"]);
  }*/


  /*if(empty($_POST["checkZoek"])){
    $zoekErr = "Tenminste 1 zoekelement is verplicht";
  }else{
    $teller = 0;
    $itemcheck = "";
    foreach($_POST['checkZoek'] as $item){
      $itemcheck .= $item.", ";
    }
  }



}
*/
}
?>
    <div class="container">
        <header> 
            <h1> AANVRAAG ANALYSE LCCU </h1>
        </header>
   
    <div class="content">
    <h4> Politiedienst: <b> PZ Rivierenland</b></h4>
    <form method="post" class="needs-validation" novalidate>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTeam">Team <span class="verplicht"> * </span></label>
      <input type="text" name="txtTeam" class="form-control" id="inputTeam" placeholder="Geef u team in..." required>
      <span class="error"> <?php echo $teamErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputDossier">Dossierbeheerder <span class="verplicht"> * </span></label>
      <input type="text" name="txtDossierbeheerder" class="form-control" id="inputDossier" placeholder="Geef de dossierbeheerder in...">
      <span class="error"> <?php echo $dossierErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPV">Aanvankelijk PV nummer</label>
      <input type="text" name="txtPv" class="form-control" id="inputPV" placeholder="Geef aanvankelijk PV nummer in...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputMisdrijf">Misdrijf</label>
      <input type="text" name="txtMisdrijf" class="form-control" id="inputMisdrijf" placeholder="Geef het misdrijf in...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputOr">Naam OR/PdK <span class="verplicht"> * </span></label>
      <input type="text" name="txtOr" class="form-control" id="inputOr" placeholder="Geef de naam van de OR/PDK in...">
      <span class="error"> <?php echo $orErr;?></span>

    </div>
    <div class="form-group col-md-6">
      <label for="inputDatum">Datum in beslagname <span class="verplicht"> * </span></label>
      <input type="date" name="txtDatum" class="form-control" id="inputDatum">
      <span class="error"> <?php echo $datumErr;?></span>
    </div>
    <div class="form-group col-md-6">
    <label for="inputDossiernaam">Dossiernaam <span class="verplicht"> * </span></label>
    <input type="text" class="form-control" name="txtDossiernaam" id="inputDossiernaam" placeholder="Dossiernaam (GES) of naam hoofdverdachte">
    <span class="error"> <?php echo $dossierErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <p class="txtLccu"> <b>LCCU - </b> #number# <b> ID - </b> #Id#</p>
    </div>
  </div>
<!----------------------------------------------------------------------------->
  <h4> Eigenaar </h4>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNaam">Naam <span class="verplicht"> * </span></label>
      <input type="text" name="txtNaam" class="form-control" id="inputNaam" placeholder="Geef de naam van de eigenaar van het toestel...">
      <span class="error"> <?php echo $naamErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputVoornaam">Voornaam <span class="verplicht"> * </span></label>
      <input type="text" name="txtVoornaam" class="form-control" id="inputVoornaam" placeholder="Geef de voornaam van de eigenaar van het toestel...">
      <span class="error"> <?php echo $voornaamErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputGeboortedatum">Geboortedatum <span class="verplicht"> * </span></label>
      <input type="date" name="txtGeboortedatum" class="form-control" id="inputGeboortedatum">
      <span class="error"> <?php echo $geboorteErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAdres">Adres + huisnummer</label>
      <input type="text" name="txtAdres" class="form-control" id="inputAdres" placeholder="Geef het adres in waar de eigenaar verblijft...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputGemeente">Gemeente</label>
      <input type="text" name="txtGemeente" class="form-control" id="inputGemeente" placeholder="Geef de gemeente in waar de eigenaar verblijft... ">
    </div>
<!-- Radio buttons -->
      <div class="form-group col-md-6">
        <label>Hoedanigheid <span class="verplicht"> * </span></label><span class="error"> <?php echo $hoedanigheidErr;?></span>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioHoedanigheid" id="gridRadios1" value="Slachtoffer">
          <label class="form-check-label" for="gridRadios1">
            Slachtoffer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioHoedanigheid" id="gridRadios2" value="Getuige">
          <label class="form-check-label" for="gridRadios2">
            Getuige
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioHoedanigheid" id="gridRadios3" value="Betrokkene">
          <label class="form-check-label" for="gridRadios3">
            Betrokkene
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioHoedanigheid" id="gridRadios4" value="Verdachte">
          <label class="form-check-label" for="gridRadios4">
            Verdachte
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioHoedanigheid" id="gridRadios5" value="Onbekend">
          <label class="form-check-label" for="gridRadios5">
            Onbekend
          </label>
        </div>
</div>
<!-- End of radio buttons -->
<!----------------------------------------------------------------------------->
</div>
<h4> Aangeleverd materiaal </h4>
<div class="form-row" style="padding:1em;">
        <label>Afhandeling <span class="verplicht"> * </span>: </label>
        <div class="form-check radioPriority">
          <input class="form-check-input" type="radio"  name="radioAfhandeling" id="radioAfhandeling1" value="Gewone afhandeling">
          <label class="form-check-label" for="gridRadios1">
            Gewone afhandeling
          </label>
        </div>
        <div class="form-check radioPriority">
          <input class="form-check-input" type="radio"  name="radioAfhandeling" id="radioAfhandeling2" value="Dringend">
          <label class="form-check-label" for="gridRadios2">
            Dringend
          </label>
        </div>
        <div class="form-check radioPriority">
          <input class="form-check-input" type="radio"  name="radioAfhandeling" id="radioAfhandeling3" value="Prioritair">
          <label class="form-check-label" for="gridRadios2">
            Prioritair
          </label>
          <span class="error"> <?php echo $afhandelingErr;?></span>
        </div>
</div>

<div class="form-row" style="padding:1em;">
<label>Toelating uitlezing <span class="verplicht"> * </span>: </label>
        <div class="form-check radioPriority">
          <input class="form-check-input" type="radio"  name="radioToelating" id="radioAfhandeling1" value="Ja">
          <label class="form-check-label" for="gridRadios1">
            Ja
          </label>
          <span class="error"> <?php echo $toelatingErr;?></span>
        </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputMerk">Merk + model <span class="verplicht"> * </span></label>
      <input type="text" name="txtMerk[]" class="form-control" id="inputMerk" placeholder="Geef het merk van het toestel in... ">
      <span class="error"> <?php echo $merkErr;?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputSerienummer">Serienummer/IMEInummer</label>
      <input type="text" name="txtSerienummer[]" class="form-control" id="inputSerienummer" placeholder="Geef het serienummer van het toestel in...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputToegangscode">Toegangscode</label>
      <input type="text" name="txtToegangscode[]" class="form-control" id="inputToegangscode" placeholder="Geef de toegangscode in van het toestel...">
    </div>
        <div class="form-group col-md-6">
      <label for="inputToegangscode">SINN (Pacos)</label>
      <input type="text" name="txtSinn[]" class="form-control" id="inputToegangscode" placeholder="Geef de SINN nummer in...">
    </div>
    </div>
    <div class="form-group">
    <label for="textInfo" class="form-label">Extra informatie</label>
  <textarea class="form-control" name="txtExtrainfo[]" id="textInfo" rows="3" maxlength="500"></textarea>
    </div>

      <button type="button" id="btnAdd" class="btn btn-primary">+</button> Materiaal toevoegen
   <br>
    <br>
  <div id="extra"></div>
    <script>
      $tellermateriaal = 1;
      $("#btnAdd").click(function () {
        //<div class='form-group col-md-6'><label for='inputSerienummer'>Serienummer/IMEInummer</label><input type='text' name='txtSerienummer' class='form-control' id='inputSerienummer' placeholder='Geef het serienummer van het toestel in...'></div><div class='form-group col-md-6'><label for='inputToegangscode'>Toegangscode</label><input type='text' name='txtToegangscode' class='form-control' id='inputToegangscode' placeholder='Geef de toegangscode in van het toestel...'></div><div class='form-group col-md-6'><label for='inputToegangscode'>SINN (Pacos)</label><input type='text' name='txtSinn' class='form-control' id='inputToegangscode' placeholder='Geef de SINN nummer in...'></div></div><div class='form-group'><label for='textInfo' class='form-label'>Extra informatie</label><textarea class='form-control' name='txtExtrainfo' id='textInfo' rows='3' maxlength='500'></textarea></div>
  $("#extra").append("<div class='form-row'><div class='form-group col-md-6'><label for='inputMerk'>Merk + model <span class='verplicht'> * </span></label><input type='text' name='txtMerk[]' class='form-control' id='inputMerk' placeholder='Geef het merk van het toestel in... '><span class='error'> <?php echo $merkErr;?></span></div><div class='form-group col-md-6'><label for='inputSerienummer'>Serienummer/IMEInummer</label><input type='text' name='txtSerienummer[]' class='form-control' id='inputSerienummer' placeholder='Geef het serienummer van het toestel in...'></div><div class='form-group col-md-6'><label for='inputToegangscode'>Toegangscode</label><input type='text' name='txtToegangscode[]' class='form-control' id='inputToegangscode' placeholder='Geef de toegangscode in van het toestel...'></div><div class='form-group col-md-6'><label for='inputToegangscode'>SINN (Pacos)</label><input type='text' name='txtSinn[]' class='form-control' id='inputToegangscode' placeholder='Geef de SINN nummer in...'></div></div><div class='form-group'><label for='textInfo' class='form-label'>Extra informatie</label><textarea class='form-control' name='txtExtrainfo[]' id='textInfo' rows='3' maxlength='500'></textarea></div>");
$tellermateriaal++;
});
    </script>
    <div class="form-group col-md-6">
        <label>Zoekelementen <span class="verplicht"> * </span></label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="checkZoek[]" id="check1" value="E-mails">
          <label class="form-check-label" for="check1">
            E-mails
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="checkZoek[]" id="check2" value="Chat">
          <label class="form-check-label" for="check2">
            Chat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="checkZoek[]" id="check3" value="Documenten">
          <label class="form-check-label" for="check3">
            Documenten
          </label>
        </div>
        <div class="form-check">
        <label for="name3">
      <input class="form-check-input" type="checkbox" name="checkZoek[]" id="check4" value="andere" onclick="if(this.checked){ document.getElementById('name3').focus();}" />
      Andere...
    </label>
<input type="checkZoek[]" id="name3" name="txtAndere" />
<br>
<span class="error"> <?php echo $zoekErr;?></span>

        </div>
</div>

</div>
<button type="submit" name="btnVerzend" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>


<!------ BACKEND --->
<?php
/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/


if(isset($_POST["btnVerzend"])){

  $zoekelementen = $_POST["checkZoek"];
    /*echo "Team: ".$_POST["txtTeam"]."<br>".
        "Dossierbeheerder: ".$_POST["txtDossierbeheerder"]."<br>".
        "PV Nummer: ".$_POST["txtPv"]."<br>".
        "Misdrijf: ".$_POST["txtMisdrijf"]."<br>".
        "Naam OR/PDK: ".$_POST["txtOr"]."<br>".
        "Datum in beslagname: ".$_POST["txtDatum"]."<br>". 
        "Dossiernaam: ".$_POST["txtDossiernaam"]."<br><hr><br><h3> Eigenaar </h3>". 
    
        "Naam: ".$_POST["txtNaam"]."<br>".
        "Voornaam: ".$_POST["txtVoornaam"]."<br>". 
        "Geboortedatum: ".$_POST["txtGeboortedatum"]."<br>". 
        "Adres: ".$_POST["txtAdres"]."<br>". 
        "Gemeente: ".$_POST["txtGemeente"]."<br>". 
        "Hoedanigheid: ".$_POST["radioHoedanigheid"]."<br><hr><br><h3> Aangeleverd materiaal </h3>". 

        "Afhandeling: ".$_POST["radioAfhandeling"]."<br>". 
        "Toelating uitlezing: ".$_POST["radioToelating"]."<br>". 
        "Merk + model: ".$_POST["txtMerk"]."<br>". 
        "Serienummer: ".$_POST["txtSerienummer"]."<br>". 
        "Toegangscode: ".$_POST["txtToegangscode"]."<br>". 
        "SINN: ".$_POST["txtSinn"]."<br>".
        "Extra info: ".$_POST["txtExtrainfo"]."<br>". 
        "Zoekelementen: ";
        foreach($_POST['checkZoek'] as $item){
            echo $item.", ";
            // query to delete where item = $item
          }
        echo "<br>";
*/
          

 
       //getting hoedanigheidid and materiaalid
       $sqlhoedanigheid = "SELECT Id FROM hoedanigheid WHERE Hoedanigheid = '$hoedanigheid'";
       $result = $conn->query($sqlhoedanigheid);
       while($row = $result->fetch_assoc()){
         $hoedanigheidID = $row["Id"];
       }
       //////////

       
        $sqlEigenaar = "INSERT INTO eigenaar (Naam, Voornaam, Geboortedatum, Adres, Gemeente, HoedanigheidId) VALUES ('$naam', '$voornaam','$geboortedatum', '$adres', '$gemeente', '$hoedanigheidID')";
        $result = $conn->query($sqlEigenaar);
        if($result){
          echo "<br>records eigenaar inserted";
        }
        else{
          echo "error eigenaar table".$conn->error;
        }


        //getting eigenaarID
        $sql = "SELECT Id FROM eigenaar WHERE Naam = '$naam' AND Voornaam = '$voornaam'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $eigenaarnieuweid = $row["Id"];
        }
        //////////////////////

         
        $count = count($_POST["txtMerk"]);
        for($i=0;$i<$count;$i++){
          $merk = $_POST["txtMerk"][$i];
          $serienummer = $_POST["txtSerienummer"][$i];
          $toegangscode = $_POST["txtToegangscode"][$i];
          $sinn = $_POST["txtSinn"][$i];
          $info = $_POST["txtExtrainfo"][$i];
          $sqlMateriaal = "INSERT INTO materiaal (Model, Serienummer, Toegangscode, SINN, ExtraInfo, EigenaarId) VALUES ('$merk', '$serienummer', '$toegangscode', '$sinn', '$info','$eigenaarnieuweid')";
          if(mysqli_query($conn, $sqlMateriaal)){
            echo "<br>".($i+1)." records materiaal inserted";
          }
          else{
            echo mysqli_error($conn);
          }


        }
        
  

        //getting eigenaarID and afhandelingID
        $sqlEigenaarId = "SELECT Id FROM eigenaar WHERE Naam = '$naam'";
        $result = $conn->query($sqlEigenaarId);
        while($row = $result->fetch_assoc()){
          $eigenaarid = $row["Id"];
        }

        $sqlAfhandeling = "SELECT Id FROM afhandeling WHERE Afhandeling = '$afhandeling'";
        $result = $conn->query($sqlAfhandeling);
        while($row = $result->fetch_assoc()){
          $afhandelingid = $row["Id"];
        }
        ///////////////////

        $sqlAanvraag = "INSERT INTO aanvraag (Team, Dossierbeheerder, Pv, Misdrijf, NaamOr, Inbeslagname, Dossiernaam, EigenaarId, AfhandelingId, Zoekelementen) VALUES ('$team', '$dossierbeheerder', '$pv', '$misdrijf', '$or', '$datum', '$dossiernaam', '$eigenaarid', '$afhandelingid', '$itemcheck')";
        $result = $conn->query($sqlAanvraag);
        if($result){
          echo "<br>records aanvraag inserted";
        }
        else{
          echo "error aanvraag table".$conn->error;
        }






}


?>










</body>






</html>