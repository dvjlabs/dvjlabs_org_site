<?php

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
echo "<h1>Connected successfully</h1>";


$sql =  "select * from tbl_waspData";

$fields = array("node", "temperature", "humidity", "pressure", "ac_x", "ac_y", "ac_z", "dataOra", "battery", "co", "no", "unaltro");

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    echo "<table border=2px>";
    echo "<tr>";
    foreach ( $fields as $value)
    {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<tr>";
        foreach ( $fields as $value)
        {
            echo "<td>$row[$value]</td>";
        }
        echo "</tr>";
    }

} 
else
{
    echo "ooops...";
}


mysqli_close($conn);

?>
