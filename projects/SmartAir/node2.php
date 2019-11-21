<h1>Dati Nodo 2</h1> 

<?php


// first things first...
require ('functions.php');
require ('config.php');

// ----------------------------------------------

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// query
$sql =  "select DATE_FORMAT(dataOra,'%H:%i') as ora,temperature, humidity, pressure, co, no, unaltro from tbl_waspData where node = 'Node_02' order by id desc limit 7";
$result = mysqli_query($conn, $sql);

$conta = mysqli_num_rows($result); 
if ($conta > 0) 
{
    $i = $conta - 1;
    while($row = mysqli_fetch_assoc($result)) 
    {
        $timeLabel[$i] = $row["ora"];
        $tempData[$i] = $row["temperature"];
        $humData[$i] = $row["humidity"];
        $presData[$i] = $row["pressure"];
        $coData[$i] = $row["co"];
        $noData[$i] = $row["no"];
        $altrData[$i] = $row["unaltro"];
        $i--;
    }
    
    // I don't understand why this is the unique way to...
    $timeLabel = array_reverse($timeLabel);
    $tempData = array_reverse($tempData);
    $humData = array_reverse($humData);
    $presData = array_reverse($presData);
    $coData = array_reverse($coData);
    $noData = array_reverse($noData);
    $altrData = array_reverse($altrData);
}


?>

<div class="diagramblock">
<?php createGraph("Temperatura", "tempChart", 300, 200, $timeLabel, "Gradi Centigradi", $tempData, 255, 99, 132); ?>
</div>

<div class="diagramblock">
<?php createGraph("Pressione", "presChar", 300, 200, $timeLabel, "Pascal", $presData, 54, 162, 235); ?>
</div>

<div class="diagramblock">
<?php createGraph("Umidita'", "humChart", 300, 200, $timeLabel, "Goccioline", $humData, 255, 206, 86); ?>
</div>


<div class="diagramblock">
<?php createGraph("Monossido di Carbonio", "coChart", 300, 200, $timeLabel, "Goccioline", $coData, 255, 99, 132); ?>
</div>

<div class="diagramblock">
<?php createGraph("Monossido di Azoto", "noChart", 300, 200, $timeLabel, "Goccioline", $noData, 255, 159, 64); ?>
</div>

<div class="diagramblock">
<?php createGraph("Un altr", "unaltrChart", 300, 200, $timeLabel, "un altro a chi", $altrData, 54, 162, 235); ?>
</div>
