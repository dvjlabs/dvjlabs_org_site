<!DOCTYPE html>
<head>
<title>AI.Leo Photo snap</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bungee+Inline'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body {font-family: "Open Sans", sans-serif; margin: 0}
h1,h2,h3,h4,h5,h6 {font-family: "Bungee Inline", sans-serif}
</style>

</head>


<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-theme-d3 w3-opacity" style="padding:64px 16px; margin: 0">
<h1>Ecco i tuoi dati</h1>
</header>

<div class="w3-panel w3-center" style="padding:64px 16px; margin: 0">

<?php

$codice = $_GET["codice"];

$server = "sql.dvjlabs.org";
$user = "dvjlabso58213";
$pass = "dvjl23825";
$db = "dvjlabso58213";

// Create connection
$conn = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_users WHERE user=' ".$codice."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    $row = mysqli_fetch_assoc($result); 
    echo "<h1>".$row['name']."</h1>";
    echo "<h1>".$row['class']."</h1>";
    echo "<br><br>";
    echo "<button class='w3-button w3-red' onclick='window.location.href=\"index.html\"'>Non sono io... riproviamo!</button>";
    echo "<button class='w3-button w3-green' onclick='window.location.href=\"page1.php?codice=";
    echo $codice;
    echo "\"'>Ok, avanti con la prima foto!</button>";
    
    
} 
else 
{
    echo "<h2>Nessun risultato associato all'utente ".$codice."</h2>";
    echo "<h3>Sorry :(</h3>";
    echo "<br><br>";
    echo "<button class='w3-button w3-red' onclick='window.location.href=\"index.html\"'>Torna indietro e prova di nuovo...</button>";
}

mysqli_close($conn);
?>

</div>


<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16 w3-center">
<p>
Designed with <a href="https://www.w3schools.com/w3css/default.asp">w3.css</a>. 
Powered by <a href="https://www.dvjlabs.org/#team">dvjlabs</a> engineers.
</p>
</footer>


</body></html>
