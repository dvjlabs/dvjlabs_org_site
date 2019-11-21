<!DOCTYPE html>
<html>

<head>
<title>Da Vinci Jesi Labs: shell project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
@font-face {
    font-family: 'AndriCartoon';
    src: url('/AndriCartoon.ttf');
    font-weight: normal;
    font-style: normal;
}

body,h1,h2,h3,h4,h5,h6 {
    font-family: 'AndriCartoon', sans-serif
}

body, html {
    height: 100%;
    line-height: 1.8;
}

/* ----------------------------------------------------------------------------------- */

.diagramblock {
    margin: 10px;
    width: 30%;
    min-width: 200px;
    display: inline-block;
    vertical-align: top;
    text-align: center;
}

.stickynote {
    text-align: left;
    margin-top: 50px;
    padding: 1em;
    box-shadow: 5px 5px 7px rgba(33,33,33,0.7);
    transform: rotate(-1deg);
}

.yellow {
    background:rgba(255, 206, 86, 0.5);    
}

.blue {
    background:rgba(54, 162, 235, 0.5);        /* 54 162 235 */
}

.red {
    background:rgba(255, 99, 132, 0.5);
}

</style>

</head>

<body>

<div class="w3-container" style="padding:16px" id="home">

<h1>Shell Project</h1>


<p>
Come la conchiglia è il guscio dell'ostrica, così lo shell project è il contenitore dei corsi di potenziamento di informatica del 
<a href="https://www.liceodavincijesi.edu.it">liceo Da Vinci di Jesi</a> per l'anno scolastico 2017-2018.<br>
Inoltre molti dei corsi organizzati sono propedeutici all'iniziativa <a href="/projects/raceberry/">Raceberry</a>. <br>
Stay tuned ;)
</p>

<p>
I corsi sono aperti a tutti e si svolgono con doppi turni, il martedì e il giovedì dalle 14.15 alle 16.15, nel laboratorio INFO1.
<br>
Ok, Ci vediamo lì!
</p>
</div>

<!-- MATERIALE DEI CORSI - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<div class="w3-container w3-light-grey" style="padding:64px 16px">
<h1>Materiale del corso</h1>

Tutto il materiale è reperibile <a href="materiale/">in questa pagina</a>
</div>


<div class="w3-container" style="padding:16px" id="calendario">

<h1>Calendario</h1>

<table class="w3-table w3-striped w3-border w3-hoverable">
<tr class="w3-green">
  <th width="25%">Corso</th>
  <th width="15%">Date Ufficiali</th>
  <th width="35%">Argomenti</th>
  <th width="25%">Materiale (*)</th>
</tr>

<tr>
  <td rowspan='4' style="vertical-align:middle;">Creare siti web e pubblicarli su Internet</td>
  <td>21 nov</td>
  <td rowspan='4' style="vertical-align:middle;">Linguaggi HTML, CSS, JS. E nozioni di base per l'interazione col web. <br>Conoscendo i protocolli HTTP e FTP si capisce anche meglio :).</td>
  <td rowspan='4' style="vertical-align:middle;">PC, Internet ;)</td>
</tr>

<tr>
  <td>30 nov</td>
</tr>

<tr>
  <td>14 dic</td>
</tr>

<tr>
  <td>21 dic</td>
</tr>

<tr>
  <td>Raspberry PI</td>
  <td>16 gen, 18 gen</td>
  <td>Introduzione a RPI. PC portatile con RPI</td>
  <td><a href="https://www.amazon.it/Raspberry-Official-Desktop-Starter-White/dp/B01CI58722/ref=sr_1_1_sspa?ie=UTF8&qid=1509957568&sr=8-1-spons&keywords=raspberry+pi+3+starter+kit&psc=1" target="_blank">RPI Starter KIT</a>, Monitor, tastiera, mouse</td>
</tr>

<tr>
  <td>Comandare Raspberry con Python</td>
  <td>23 gen, 25 gen</td>
  <td>RPI, Python</td>
  <td>PC o RPI con python installato</td>
</tr>

<!--
<tr>
  <td>RPI remote</td>
  <td>23 gen, 25 gen</td>
  <td>Collegamento remoto a RPI. Server DNS, DHCP e AP con RPI</td>
  <td>RPI. Access Point, PC</td>
</tr>
-->
<tr>
  <td>Hardware management with RPI</td>
  <td>30 gen, 1 feb</td>
  <td>Gestione hardware, sensori, eventi con RPI</td>
  <td>RPI 3, <a href="https://thepihut.com/products/camjam-edukit-2-sensors" target="_blank">CamJam EduKit 2</a></td>
</tr>

<tr>
  <td>RPI Camera</td>
  <td>6 feb, 15 feb</td>
  <td>Raspberry Camera</td>
  <td>RPI 3, <a href="https://www.amazon.it/Raspberry-Official-Camera-Module-8Mp/dp/B01ER2SKFS/ref=sr_1_1?ie=UTF8&qid=1517941722&sr=8-1&keywords=rpi+camera" target="_blank">RPI Camera</a></td>
</tr>

<tr>
  <td>Raceberry (montaggio)</td>
  <td>20 feb, 22 feb</td>
  <td>Assemblaggio macchinina, tuning</td>
  <td>RPI 3, <a href="https://thepihut.com/collections/camjam-edukit/products/camjam-edukit-3-robotics" target="_blank">CamJam EduKit 3</a></td>
</tr>

<tr>
  <td>RPI e bluetooth</td>
  <td>27 feb, 1 mar</td>
  <td>App Android che comanda il Raspberry via bluetooth</td>
  <td>RPI 3, Telefono Android</td>
</tr>

<tr>
  <td>Sensori minicar</td>
  <td>6 mar, 8 mar</td>
  <td>Sensori di posizione anteriori</td>
  <td>RPI 3, EduKit 3</td>
</tr>

<tr>
  <td>streaming video minicar</td>
  <td>13 mar, 15 mar</td>
  <td>streaming video anteriore. Sito web di raccolta dati</td>
  <td>RPI 3, EduKit 3</td>
</tr>


</table> <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

</div>

<div class="w3-container" style="padding:16px">

<table class="w3-table w3-striped w3-border w3-hoverable">
<tr class="w3-yellow">
  <th width="25%">Corso</th>
  <th width="15%">Date Ipotetiche</th>
  <th width="35%">Argomenti</th>
  <th width="25%">Materiale (*)</th>
</tr>


<tr>
  <td>RPI web server</td>
  <td>27 feb, 1 mar</td>
  <td>HTTP, Web Server Apache</td>
  <td>RPI</td>
</tr>


<tr>
  <td>RPI e nunchuck</td>
  <td>6 mar, 8 mar</td>
  <td>Controllo remoto del Raspberry via Nunchuck WII</td>
  <td>RPI 3, Nintendo WII nunchuck</td>
</tr>

<tr>
  <td>RPI e Google Voice</td>
  <td>13 mar, 15 mar</td>
  <td>Comandi vocali al Raspberry</td>
  <td>RPI 3, Telefono Android</td>
</tr>

<tr>
  <td>Python, corso base</td>
  <td>10 apr, 12 apr</td>
  <td>Python ;)</td>
  <td>PC con python installato</td>
</tr>

<tr>
  <td rowspan='2' style="vertical-align:middle;">Games Programming with Python</td>
  <td>17 apr, 19 apr</td>
  <td rowspan='2' style="vertical-align:middle;">Python e pygame library</td>
  <td rowspan='2' style="vertical-align:middle;">PC con python installato</td>
</tr>

<tr>
  <td>24 apr, 26 apr</td>
</tr>

</table>

<p>
(*) il materiale indicato viene fornito dalla scuola per 6 unità. Poichè si presume che il numero dei partecipanti sarà maggiore,
sarà necessario formare 6 gruppi più o meno numerosi. Se alcuni studenti portassero il proprio materiale per alcuni dei corsi, potrebbero
seguire meglio la prova di laboratorio e migliorare la fruibilità a tutti gli altri.
</p>

</div>


<!-- ISCRIZIONI - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div class="w3-container w3-light-grey" style="padding:64px 16px; display:none;">

<h1>Iscrizioni</h1>

<form action="register.php" method="post">

<!-- DATI PERSONALI -->
<div class="w3-half">

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
<option value="1AS">1AS</option>
<option value="1BS">1BS</option>
<option value="1CS">1CS</option>
<option value="2AS">2AS</option>
<option value="2BS">2BS</option>
<option value="2CS">2CS</option>
<option value="2DS">2DS</option>
<option value="3AS">3AS</option>
<option value="3BS">3BS</option>
<option value="3CS">3CS</option>
<option value="3DS">3DS</option>
<option value="4AS">4AS</option>
<option value="4BS">4BS</option>
<option value="5AS">5AS</option>
<option value="5BS">5BS</option>
<option value="5CS">5CS</option>
</select>
</td>
</tr>

</table>
</div> <!-- DATI PERSONALI -->

<!-- COURSES -->
<div class="w3-half">
<table class="w3-striped w3-border w3-hoverable">
<tr class="w3-green">
  <th></th>    
  <th>Corso</th>
  <th>Destinatari</th>
</tr>

<tr>
<td>
<input type="checkbox" name="sitiweb">
</td>
  <td>Creare siti web</td>
  <td>Tutti</td>
</tr>

<tr>
<td>
<input type="checkbox" name="sitisuinternet">
</td>
<td>Pubblicare siti su Internet</td>
  <td>Tutti</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPI0">
</td>
  <td>Raspberry PI</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPI1">
</td>
<td>RPI remote</td>
  <td>Quarte e Quinte</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPI2">
</td>
<td>Hardware management with RPI</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="raceberry">
</td>
<td>Raceberry (montaggio)</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPIWEB">
</td>
<td>RPI web server</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPIBLUE">
</td>
<td>RPI e bluetooth</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPIWII">
</td>
<td>RPI e nunchuck</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="RPIVoice">
</td>
<td>RPI e Google Voice</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="python">
</td>
<td>Python, corso base</td>
  <td>Triennio</td>
</tr>

<tr>
<td>
<input type="checkbox" name="pygames">
</td>
<td>Games Programming with Python</td>
  <td>Triennio</td>
</tr>

</table>
</div> <!-- COURSES -->

<br>
<br>

<div class="w3-center">
<input type="submit" value="Iscriviti" class="w3-padding w3-margin">
<input type="reset" value="cancella" class="w3-padding w3-margin">
</div>

</form>

</div>

<!-- ISCRITTI - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div class="w3-container" style="padding:64px 16px">

<h1>I protagonisti</h1>
<h3>Ovvero... gli studenti partecipanti!</h3>

<?php

$servername = "sql.dvjlabs.org";
$database = "dvjlabso59611";
$username = "dvjlabso59611";
$password = "dvjl82330";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


$sqlElencoIscritti =  "select * from tbl_student ORDER BY class,surname";

$resElencoIscritti = mysqli_query($conn, $sqlElencoIscritti);

if (!$resElencoIscritti)
{
    echo "Elenco Iscritti Error: " . mysqli_error($conn);
}

if (mysqli_num_rows($resElencoIscritti) > 0) 
{    
    echo "<ul class='w3-ul'>";
    while($row = mysqli_fetch_assoc($resElencoIscritti)) 
    {
        echo "<li class='w3-hover-blue'>" . $row["surname"]. " " . $row["name"]. " (" . $row["class"]. ")</li>";
    }
    echo "</ul>";
} 
else 
{
    echo "Nessun iscritto :(";
}


mysqli_close($conn);

?>

</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
<p>Da Vinci Jesi Labs site. Some rights reserved</p>
</footer>

</body>
</html>
