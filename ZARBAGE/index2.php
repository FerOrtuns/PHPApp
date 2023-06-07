<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPHPApp2</title>
    <link href="./view/css/styles.css" rel="stylesheet" type="text/css">
    <script src="./controller/functions/functions.js"></script>
</head>

<body>

    <h1>PHP app solutions</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, commodi accusamus? Modi porro, officia distinctio doloribus facilis nisi, velit nemo consequuntur voluptas dignissimos inventore ducimus voluptatum quia eaque odio repellendus!</p>
    <br>
    <input type="button" value="continue" onClick="welcome()" />
    <br>
    <hr>

    <?php
    
    include('./view/shared/header.php');

    $dbHost = getenv('LOCALHOST');
    $dbName = getenv('DBNAME');
    $dbUser = getenv('DBUSER');
    $dbPass = getenv('DBPASS');
    
    echo $dbHost . $dbName . $dbUser . $dbPass ;


    require_once('./controller/helpers/dbConnection.php');

    $inputWord = "Logo";
    $inputWord2 = "LOGO2";
    $inputNum = 5;
    $length = 7;
    $compared =  strncmp($inputWord, $inputWord2, $length);
    $comparedCase =  strncasecmp($inputWord, $inputWord2, $inputNum);
    $resultMsg = "";

    function    resMsg($comparedCase)  {

        if (!$comparedCase) {

            echo "Los Strings son iguales";
        } else {

            echo "Los Strings son diferentes";
        }
    }

    function showDate () {
        $today= date ("d-m-y");

        echo "<br><hr>" . " la Fecha de hoy es : " . $today;
    }

    echo "La busqueda ha sido $inputWord  y tiene asignado el numero $inputNum";
    echo "Los Strings son : $compared <br><hr>";

    resMsg($comparedCase);
    showDate ();  

    ?>

    <?php
    
   
$dias_semana = array(
  "Monday" => "Lunes",
  "Tuesday" => "Martes",
  "Wednesday" => "Miércoles",
  "Thursday" => "Jueves",
  "Friday" => "Viernes",
  "Saturday" => "Sábado",
  "Sunday" => "Domingo"
);

echo "<br><hr>";

echo "vardump seria asin: " . var_dump($dias_semana);

print_r($dias_semana);

echo "<br><hr>";

echo $dias_semana["Monday"];

foreach($dias_semana as $clave=>$valor){

    echo "<br><hr> el dia de la semana en ingles es $clave y el dia de la semana en español es $valor";
    echo "<br><hr> el valor del array ahora es de : " . count($dias_semana);
}

$dias_semana["Thufriday"] = "Juernes";

foreach($dias_semana as $clave=>$valor){

    echo "<br><hr> el dia de la semana en ingles es  $clave y el dia de la semana en español es $valor";
    echo "<br><hr> el valor del array ahora es de : " . count($dias_semana);
}
    
/* pildoras video 38 crear bases de datos */

    ?>




</body>

</html>