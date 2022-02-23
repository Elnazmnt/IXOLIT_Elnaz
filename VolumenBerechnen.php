<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hallo Liebe Leute</title>
</head>
<body style="background-color:#f2e2dd ;" class="container mt-5">
<!-- start Navbar -->
<nav class="navbar navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.PHP">
      <img src="img/temp.png" alt="temp" width="40" height="40" class="d-inline-block align-text-top">
      Temperatur anzeigen
    </a>
    <a class="navbar-brand" href="#">
      <img src="img/math.png" alt="temp" width="40" height="40" class="d-inline-block align-text-top">
      Volumen berechnen
    </a>
   
      <a class="navbar-brand" href="oop.php">
        <img src="img/oop.jpg" alt="temp" width="40" height="40" class="d-inline-block align-text-top">
        Beispiel Klasse/Objekt bei OOP in PHP
      </a>
  </div>
</nav>
<!-- end Navbar -->

<h4 class="mt-2">Volumen eines Quaders berechnen: </h4>

<form action="VolumenBerechnen.php" method="POST">
Breite: <input type="number" name="Breite"/>
Länge: <input type="number" name="Länge"/>
Höhe: <input type="number" name="Höhe"/>
<input type="submit" name="submit">

</form>
<?php

if (isset($_POST['submit'])){
    if((($_POST["Breite"])&&($_POST["Länge"]))&&($_POST["Höhe"])>0) 
    {
      $br=intval($_POST['Breite']);
      $la=intval($_POST['Länge']);
      $ho=intval($_POST['Höhe']);
      $vlm=$br*$la*$ho;
     echo "<h4 class='mt-2'>Ergebnis:  $vlm </h4>";
    }
}

?>



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>