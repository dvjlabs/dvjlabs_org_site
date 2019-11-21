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
$sql =  "select DATE_FORMAT(dataOra,'%H:%i') as ora,temperature, humidity, pressure, co, no from tbl_waspData order by id desc limit 7";
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
        $i--;
    }
    
    // I don't understand why this is the unique way to...
    $timeLabel = array_reverse($timeLabel);
    $tempData = array_reverse($tempData);
    $humData = array_reverse($humData);
    $presData = array_reverse($presData);
    $coData = array_reverse($coData);
    $noData = array_reverse($noData);
}



?>

<div class="diagramblock">
<h3 class="text-center">Temperatura</h3>
<?php createGraph("tempChart", 300, 200, $timeLabel, "Gradi Centigradi", $tempData, 255, 99, 132); ?>
</div>

<div class="diagramblock">
<h3 class="text-center">Pressione</h3>
<?php createGraph("presChar", 300, 200, $timeLabel, "Pascal", $presData, 54, 162, 235); ?>
</div>


<div class="diagramblock">
<div class="stickynote yellow">
Il Nodo 1 è installato in via xxx. Il Nodo 2 si trova in via yyy.
<br>
Entrambi registrano i livelli di <b>pressione, umidità, temperatura</b> e le concentrazioni 
nell'aria di:
<ul>
<li>monossido di carbonio</li>
<li>monossido di azoto</li>
</ul>
<strong>Ultimo invio dati.</strong><br>
<b>Nodo 1:</b> <?php lastSent($conn, "Node_01"); ?><br>
<b>Nodo 2:</b> <?php lastSent($conn, "Node_02"); ?><br>
</div>
</div>

<div class="diagramblock">
<h3 class="text-center">Umidità</h3>
<?php createGraph("humChart", 300, 200, $timeLabel, "Goccioline", $humData, 255, 206, 86); ?>
</div>


<div class="diagramblock">
<h3 class="text-center">Monossido di Carbonio</h3>
<?php createGraph("coChart", 300, 200, $timeLabel, "Sacchi", $coData, 255, 99, 132); ?>
</div>

<div class="diagramblock">
<h3 class="text-center">Monossido di Azoto</h3>
<?php createGraph("noChart", 300, 200, $timeLabel, "Scatole", $noData, 54, 162, 235); ?>
</div>
