<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AriAdmin</title>
    <!-- BOOSTSTRAP 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--FONT AWESOME 5 -->
    <script src="https://kit.fontawesome.com/525aeb1851.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once('vendor/autoload.php');

use app\router\Main;

include("app/components/header/template.php");
Main::routes();
include("app/components/footer/template.php");
?>

</body>
</html>

