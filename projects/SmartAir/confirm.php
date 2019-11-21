<?php

// first things first...
require ('functions.php');
require ('config.php');

// header di REDIREZIONE ------------------------------------------------------------------------------------------ 
header("Refresh: 3; URL=http://www.liceodavincijesi.gov.it/pages/IoT/?sub=Subscriptions");


// DATI DAI PARAMETRI ---------------------------------------------------------------------------------------------
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$email = $_GET["mail"];
$class = $_GET["classe"];

if (!isset($nome) || !isset($cognome) || !isset($email) || !isset($class))
{
    exit;
}

$email = str_replace("_AT_", "@", $email);

$sqlmail = str_replace("@", "||chr(64)||", $email);


// scrivo nel DATABASE --------------------------------------------------------------------------------------------
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql =  "insert into tbl_subscriptions (nome, cognome, email, classe) values ('$nome', '$cognome', '$email', '$class')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);




// INVIO MAIL -----------------------------------------------------------------------------------------------------
$headers = "From: Registrazione Corso IoT <webmaster@liceodavincijesi.gov.it>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Iscrizione Corso IoT, studente $cognome $nome, classe $class";

$msg = "<html><body>";
$msg .= "<h1>Nuovo studente iscritto</h1>";
$msg .= "<p>";
$msg .= "Nome: $nome<br>";
$msg .= "Cognome: $cognome<br>";
$msg .= "Mail: $email<br>";
$msg .= "Classe: $class<br>";
$msg .= "<br>";
$msg .= "Ci vediamo al corso!<br>";
$msg .= "</body></html>";

$res1 = mail("doc.giaccaglini.g@liceodavincijesi.gov.it", $subject, $msg, $headers);
$res2 = mail("doc.diamantini.a@liceodavincijesi.gov.it", $subject, $msg, $headers);

if ($res1 && $res2)
{
    echo "Sei registrato! <br>";
}
else
{
    echo "Problemi nell'invio dei dati. Contatta l'<a href=\"mailto:andrea@liceodavincijesi.gov.it\">assistenza oppure chiedi domattina a scuola:(<br />";
}
?>

<br>
<p>La pagina verrà automaticamente rediretta alla pagina di registrazione al corso...<br>
Se non avviene in 3 secondi... clicca <a href="http://www.liceodavincijesi.gov.it/pages/IoT/?sub=Subscriptions">qui</a>
</p>
