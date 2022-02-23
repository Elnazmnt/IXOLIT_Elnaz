<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

<?php


$Mark=array(
"mark1"=>array("nmu1"=>35,"nume2"=>50),
"Anton"=>array("num1"=>18, "num2"=>53)
);
echo $Mark['mark1']['nmu1']."<br\>";
echo $Mark['Anton']['num2'];
$geyo=NULL;
echo gettype($geyo)."<br>";

$dic=[[

    "red"=>"rot",
    "yellow"=>"zard"
]];

echo $dic[0]["red"];
?>
</body>

<script src="eli.js"></script>
</html>