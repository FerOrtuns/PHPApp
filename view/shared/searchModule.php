<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPIRAL PHPAPP</title>
    <link href="../../gstyles.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="../../controller/functions/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

    <header class="fixed-top">

        <?php

        include('C:\xampp\htdocs\TALLER PHP\view\shared\header.php');


        include('C:\xampp\htdocs\TALLER PHP\view\shared\menunav.php');



        ?>


    </header>

    <main>


<?php


include('C:\xampp\htdocs\TALLER PHP\view\shared\searchForm.php');

?>


    <div class="table-responsive">

<table class="table table-dark table-hover table-fixed">
    <thead>
        <tr class="table table-light">

            <th scope="col" class="col-2">#</th>
            <th scope="col" class="col-2">Section</th>
            <th scope="col" class="col-2">Item</th>
            <th scope="col" class="col-2">Date</th>
            <th scope="col" class="col-2">Made in</th>
            <th scope="col" class="col-2">$</th>


        </tr>
    </thead>


    <tbody>
        <tr>

            <?php
            $busqueda = $_GET["buscar"];

            require_once('C:\xampp\htdocs\TALLER PHP\enviroments.php');
            

            $conexion = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

            if (mysqli_connect_errno()) {

                echo "Fallo al conectar a BBDD";

                exit();
            }

            mysqli_select_db($conexion, $dbName) or die('El nombre del a DB no se cooresponde con los existentes');

            mysqli_set_charset($conexion, "utf8");

            /* $query = "SELECT * FROM artpildoras WHERE PAÍSDEORIGEN='ESPAÑA'"; */
            $query = "SELECT * FROM artpildoras WHERE NOMBREARTíCULO LIKE '%$busqueda%'";

            /* $query = "SELECT * FROM artpildoras"; */
            /* $query = "SELECT * FROM users"; */

            $results = mysqli_query($conexion, $query);


            while ($fila = mysqli_fetch_row($results)) {



                for ($i = 0; $i < 6; $i++) {
                    echo "<td>";
                    echo $fila[$i] . "</td>";
                };

                echo "</tr><tr>";
            }



            ?>

        </tr>

    </tbody>
</table>

</div>
    </main>

    <footer>

    </footer>


</body>

</html>


