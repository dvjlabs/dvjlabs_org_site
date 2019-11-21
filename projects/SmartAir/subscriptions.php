<div style="width: 100%; overflow: auto;">

<div class="vcard" style="text-align:left; min-width: 40%; padding: 20px; background: rgba(54, 162, 235, 0.5);">

<h3>Modulo di Iscrizione al corso</h3>

<form action="register.php" method="post">

<table>
<tr>
<td>Nome:</td>
<td><input type="text" name="nome" placeholder="Inserisci il tuo nome" required="true"></td>
</tr>

<tr>
<td>Cognome:</td>
<td><input type="text" name="cognome" placeholder="Inserisci il tuo cognome" required="true"></td>
</tr>

<tr>
<td>Mail: </td>
<td><input type="mail" name="mail" placeholder="Inserisci la tua mail" required="true"></td>
</tr>

<tr>
<td>Classe:</td>
<td>
<select name="classe">
<option value="1A">1A</option>
<option value="1B">1B</option>
<option value="1AS">1AS</option>
<option value="1BS">1BS</option>
<option value="1CS">1CS</option>
<option value="1DS">1DS</option>
<option value="1AL">1AL</option>
<option value="1BL">1BL</option>
<option value="1CL">1CL</option>
<option value="1DL">1DL</option>
<option value="1ASP">1ASP</option>
<option value="2A">2A</option>
<option value="2B">2B</option>
<option value="2C">2C</option>
<option value="2AS">2AS</option>
<option value="2BS">2BS</option>
<option value="2CS">2CS</option>
<option value="2DS">2DS</option>
<option value="2AL">2AL</option>
<option value="2BL">2BL</option>
<option value="2CL">2CL</option>
<option value="2DL">2DL</option>
<option value="2ASP">2ASP</option>
<option value="3A">3A</option>
<option value="3B">3B</option>
<option value="3C">3C</option>
<option value="3D">3D</option>
<option value="3AS">3AS</option>
<option value="3BS">3BS</option>
<option value="3AL">3AL</option>
<option value="3BL">3BL</option>
<option value="3CL">3CL</option>
<option value="3ASP">3ASP</option>
<option value="4A">4A</option>
<option value="4B">4B</option>
<option value="4AS">4AS</option>
<option value="4BS">4BS</option>
<option value="4CCS">4CCS</option>
<option value="4AL">4AL</option>
<option value="4BL">4BL</option>
<option value="4CL">4CL</option>
<option value="5A">5A</option>
<option value="5B">5B</option>
<option value="5C">5C</option>
<option value="5D">5D</option>
<option value="5AS">5AS</option>
<option value="5BS">5BS</option>
<option value="5AL">5AL</option>
<option value="5BL">5BL</option>
<option value="5CL">5CL</option>
</select>
</td>
</tr>

<tr>
<td></td>
<td>
<br>
<br>
<input type="submit" value="Iscriviti">
<input type="reset" value="cancella">
</td>
</tr>

</table>
</form>

</div>
<!-- SUBSCRIPTION FORM  -->

<div class="vcard" style="text-align:left; min-width: 40%; padding: 20px; background:rgba(255, 99, 132, 0.5);">

<h3>Studenti Iscritti</h3>

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
$sql =  "select nome, cognome, classe from tbl_subscriptions order by classe, cognome, nome";

$result = mysqli_query($conn, $sql);

$conta = mysqli_num_rows($result); 
if ($conta > 0) 
{
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<li>" . $row['cognome'] . " " . $row['nome'] . " (" . $row['classe'] . ")</li>";
    }
    echo "</ul>";
}
else
{
    echo "Ancora nessuno studente registrato :(";
}
?>

</div>

</div>
<!-- + + + + + + + + + + CLEAR BOTH + + + + + + + + + + + -->
<div style="clear: both;"></div>
