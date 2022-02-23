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

    <!-- Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType. 
    Use a constructor. Create a method which will return the name and the model of this vehicle. 
Instantiate 3 new objects from this Class. 
Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. Add new properties and methods to this Class.
Instantiate 2 new objects from this Class.  -->

    <?php
    class Vehicles
    {
        public $name;
        public $model;
        public $makeYear;
        public $color;
        public $fuelType;

        function __construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh)
        {
            $this->name = $name_veh;
            $this->model = $model_veh;
            $this->makeYear = $makeYear_veh;
            $this->color = $color_veh;
            $this->fuelType = $fuelType_veh;
        }
        public function printVehicles()
        {

            return "<h2 class='mt-3'style='color: #fa448c'>Hallo liebe Kunde: the $this->name  $this->model: ist super gutes Auto. </br></h2>";
        }
    }
    $VehicleOne = new Vehicles("BMW", "X6", 2021, "Black", "gasoline");
    $rtnVal1 = $VehicleOne->printVehicles();
    echo "$rtnVal1";

    $VehicleTwo = new Vehicles("Benz", "C_Class", 2018, "White", "gasoline");
    $rtnVal2 = $VehicleTwo->printVehicles();
    echo "$rtnVal2";

    $VehicleTree = new Vehicles("Porsche", "panamera", 2021, "platinum", "gasoline");
    $rtnVal3 = $VehicleTree->printVehicles();
    echo "$rtnVal3";

    class Ship extends Vehicles
    {
        public $capacity;
        public $type;
        function __construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh, $capacity, $type)
        {
            parent::__construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh, $capacity, $type);
            $this->capacity = $capacity;
            $this->type = $type;
        }
        public function showMsg()
        {
            return "<h2 class='mt-3'style='color: #491d88'>Reisen Sie mit dem Schiff: $this->name, Kapazität  $this->capacity personen und type: $this->type.</br> ";
        }
    }
    $shipOne = new Ship("Titanic","C54",1912,"Black","gasoline",2000,"Ocean liner");
    $rtnVal4 = $shipOne->showMsg();
    echo "$rtnVal4";

    $shiptwo = new Ship("Aida","C70",1966,"White","gasoline",4000,"Ocean liner");
    $rtnVal5 = $shiptwo->showMsg();
    echo "$rtnVal5";

    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>