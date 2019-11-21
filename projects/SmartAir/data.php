<?php
$par = isset($_GET['par']) ? $_GET['par'] : "temperature";
$node = isset($_GET['node']) ? $_GET['node'] : "Node_02";
$limit = isset($_GET['limit']) ? $_GET['limit'] : 7;
?>

<div class="diagramblock blue"  style="float:right; text-align:left; min-width: 250px">

<form action="index.php" method="get">

<input type="hidden" name="sub" value="Data">
<table>
<tr>
<td>Range:</td>
<td>
<select name="limit" id="limit">
<option value="7">Ultimi 7 valori</option>
<option value="24">Oggi</option>
<option value="168">Settimana</option>
<option value="8760">Anno</option>
<option value="9999999">Vita</option>
</select>
</td>
</tr>

<tr>
<td>Valore:</td>
<td>
<select name="par" id="par">
<option value="temperature">Temperatura</option>
<option value="humidity">Umidità</option>
<option value="pressure">Pressione</option>
<option value="co">Monossido di Carbonio</option>
<option value="no">Monossido di Azoto</option>
<option value="unaltro">Un altro</option>
</select>
</td>
</tr>


<tr>
<td>Nodo:</td>
<td>
<select name="node" id="node">
<option value="Node_01">Nodo 1</option>
<option value="Node_02">Nodo 2</option>
<option value="both">Entrambi</option>
</select>
</td>
</tr>

<script>
var elem1 = document.getElementById("limit");
var opts1 = elem1.options;
for (i = 0; i < opts1.length; i++)
{
    if (opts1[i].value == "<?php echo $limit; ?>")
    {
        opts1[i].selected = true;
    }
}

var elem2 = document.getElementById("par");
var opts2 = elem2.options;
for (i = 0; i < opts2.length; i++)
{
    if (opts2[i].value == "<?php echo $par; ?>")
    {
        opts2[i].selected = true;
    }
}

var elem3 = document.getElementById("node");
var opts3 = elem3.options;
for (i = 0; i < opts3.length; i++)
{
    if (opts3[i].value == "<?php echo $node; ?>")
    {
        opts3[i].selected = true;
    }
}

</script>

<tr>
<td></td>
<td>
<input type="submit" value="aggiorna">
</td>
</tr>
</table>

</form>

</div>


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
$sql =  "select DATE_FORMAT(dataOra,'%H:%i') as ora, ".$par." from tbl_waspData";
if (isset($node) AND $node != "both")
{
    $sql .= " WHERE node = '".$node."'";
}
$sql .= " order by id desc limit ".$limit;

$result = mysqli_query($conn, $sql);

$conta = mysqli_num_rows($result); 
if ($conta > 0) 
{
    $i = $conta - 1;
    while($row = mysqli_fetch_assoc($result)) 
    {
        $timeLabel[$i] = $row["ora"];
        $rowData[$i] = $row[$par];
        $i--;
    }
    
    // I don't understand why this is the unique way to...
    $timeLabel = array_reverse($timeLabel);
    $rowData = array_reverse($rowData);
}
?>

<div>
<?php createGraph("newChart", 600, 400, $timeLabel, "Unità di misura", $rowData, 255, 99, 132); ?>
</div>

</body>

</html>
