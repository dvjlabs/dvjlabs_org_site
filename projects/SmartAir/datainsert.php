<?php

$node = $_GET['node'];

$temp = $_GET['temp']; 
if (!isset($temp))
{
  $temp = "NULL";
}

$hum =  $_GET['hum'];
if (!isset($hum))
{
  $hum = "NULL";
}

$pres =  $_GET['pres'];
if (!isset($pres))
{
  $pres = "NULL";
}

$acX =  $_GET['acX'];
if (!isset($acX))
{
  $acX = "NULL";
}

$acY =  $_GET['acY'];
if (!isset($acY))
{
  $acY = "NULL";
}

$acZ =  $_GET['acZ'];
if (!isset($acZ))
{
  $acZ = "NULL";
}

$data =  $_GET['data'];
if (!isset($data))
{
  $data = "NULL";
}

$bat =  $_GET['bat'];
if (!isset($bat))
{
  $bat = "NULL";
}

$co =  $_GET['co'];
if (!isset($co))
{
  $co = "NULL";
}

$no =  $_GET['no'];
if (!isset($no))
{
  $no = "NULL";
}


// ----------------------------------------------

$servername = "62.149.150.182";

$username = "Sql633384";

$password = "93ffbd5a";

$database = "Sql633384_5";





// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);



// Check connection

if (!$conn) 

{

    die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully\n";





$sql =  "insert into tbl_waspData (node, temperature, humidity, pressure, ac_x, ac_y, ac_z, dataOra, battery, co, no) values ( $node, $temp, $hum, $pres, $acX, $acY, $acZ, $data, $bat, $co, $no)";



echo "SQL: $sql\n";



if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";

} else {

    echo "Error: " . mysqli_error($conn);

}





mysqli_close($conn);



?>

