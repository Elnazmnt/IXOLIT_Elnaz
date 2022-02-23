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
      <a class="navbar-brand" href="VolumenBerechnen.php">
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

  <!-- stars  willkommen -->

  <h4 class="mt-2">Bitte geben Sie Ihren Vor- und Nachnamen ein: </h4>
  <form method="POST" />
  Vorname: <input type="text" name="name">
  Nachname: <input type="text" name="surname">
  <input type="submit" name="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    if ($_POST["name"] || $_POST["surname"]) {
      echo "Liebe " . $_POST['name'] . "  " . $_POST['surname'] . "," . "Herzlich willkommen auf unserer Homepage";
    } else {
      echo "<div style='color: red'>Bitte geben Sie Ihren Namen ein, oder geben Sie bitte Ihren Nachnamen ein</div style='color: red'>";
    }
  }

  
  echo "<div class='mt-5' style='color: #de6600'>Eine Funktion, die °F in °C umwandeln und das Ergebnis auf dem Bildschirm anzeigen kann (und eine Meldung je nach Temp mit mit Switch ):</div>";
  function convert($fa)
  {
    $fa =50;
    $ca = round(($fa - 32) / 1.8);
    return array($fa, $ca);
  }
  $re_val = convert(80);

  echo "<h3>$re_val[0] degree Farenthit is ~ $$re_val[1] centigrade.</h3>";

  switch ($re_val[1]) {

    case 0 < $re_val[1] && $re_val[1] <= 5:
      echo "<h4>===>Das Wetter ist sehr kalt</h4>";
      break;
    case 6 < $re_val && $re_val[1] <= 10:
      echo "<h4>===>Das Wetter ist  kalt</h4>";
      break;
    case 11 < $re_val[1] && $re_val[1] <= 15:
      echo "<h4>===>Das Wetter ist Ok";
      break;
    case 16 < $re_val[1] && $re_val[1] <= 20:
      echo "<h4>===> Wetter ist sehr angenehm</h4>";
      break;
    case 21 < $re_val[1] && $re_val[1] > 30:
      echo "<h4>===> Das Wetter ist sehr warm</h4>";
      break;
    case $re_val[1] > 31:
      echo "<h4>===> Wetter ist sehr heiß</h4>";
      break;
    default:
      echo "<h4>Bitte geben Sie die richtige Nummer ein</h4>";
  }

  ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>