<!DOCTYPE html>
<html lang="it">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Internet of Things</title>

<link rel="stylesheet" type="text/css" href="style.css" media="all">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">


<link rel="icon" href="images/IoT.png" type="image/x-icon">

<script src="code.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<!-- jQuery, -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

</head>


<body>

<div id="container">

<div id="topmenu" class="topmenu">
    <ul>
    <li><a href="?sub=Home" id="actualpage">Home</a></li>
    <li><a href="?sub=Data">Grafici dati</a></li>
    <li><a href="?sub=Material">Materiale</a></li>
    <li><a href="?sub=Subscriptions">Iscrizioni</a></li>
    <li class="icon"><a href="javascript:void(0);" onclick="showMenu()">&#9776;</a></li>
    </ul>
</div>

<br />

<div id="header">

<!-- FOTORAMA CAROUSEL -->
<div class="fotorama" data-autoplay="true" data-loop="true">
<img src="images/IoT_brain_storm_1200x220.jpg" alt="IoT brain storm">
<img src="images/liceo_maps_void_1200x220.png" alt="Liceo Da Vinci map">
<img src="images/waspmote_1200x220.png" alt="waspmote slogan">
</div>

</div> <!-- HEADER -->


<!-- CONTENT -->
<div id="content">

<?php
if ( !$_GET )
    include("home.php");
else
{
    $sub = $_GET["sub"];

    switch ($sub)
    {
    case "Data":
        include("data.php");
        break;
    case "Material":
        include("material.php");
        break;
    case "Project":
        include("project.php");
        break;
    case "Subscriptions":
        include("subscriptions.php");
        break;
    default:
        include("home.php");
        break;
    }
}
?>

</div><!-- CONTENT -->


</div><!-- CONTAINER -->


<div id="footerWrap">
<p>Liceo Da Vinci Jesi, 2017. "Internet of Things" project. Some rights reserved.</p>
</div>


</body>
</html>
