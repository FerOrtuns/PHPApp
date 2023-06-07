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
        include('C:\xampp\htdocs\TALLER PHP\view\shared\table.php');
       

        ?>

    </main>

    <footer>

    </footer>


</body>

</html>