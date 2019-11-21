<?php

    // invio 
    header("Refresh: 10; URL=https://www.dvjlabs.org/projects/shell.php");

    // LETTURA DATI UTENTE --------------------------------------------------------------------------------------------
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["mail"];
    $class = $_POST["classe"];
    
    $nomeCorsi = array("sitiweb", "sitisuinternet", "RPI0", "RPI1", "RPI2", "raceberry", "RPIWEB", "RPIBLUE", "RPIWII", "RPIVoice", "python", "pygames");
    
    $courses = array();
    
    $check = false;
    
    foreach($nomeCorsi as $c)
    {
        if ( $_POST[$c] )
        {
            $courses[$c] = true;
            $check = true;
        }
        else
        {
            $courses[$c] = false;
        }
    }
    
    // CONTROLLO DATI -------------------------------------------------------------------------------------------------
    if ($check == false)
    {
        echo "Nessun corso selezionato!!!";
        return;
    }


    if (!isset($nome) || !isset($cognome) || !isset($email) || !isset($class) || !isset($courses))
    {
        exit;
    }
    
    // SCRITTURA SU DATABASE ------------------------------------------------------------------------------------------
    $sqlmail = str_replace("@", "||chr(64)||", $email);

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

    $sql =  "insert into tbl_student (mail, name, surname, class) values ('$email', '$nome', '$cognome', '$class')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "Studente $nome $cognome inserito correttamente<br>";
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }

    foreach($nomeCorsi as $c)
    {
        if ($courses[$c] == true)
        {
            $sql =  "insert into tbl_stud_cors (student, course) values ('$email', '$c')";

            if (mysqli_query($conn, $sql)) 
            {
                echo "Studente $cognome $nome ($class) iscritto al corso $c<br>";
            } 
            else 
            {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    
    mysqli_close($conn);


    // MAIL AI DOCENTI ------------------------------------------------------------------------------------------------
    $headers = "From: Registrazione Corsi Shell Project <shellproject@dvjlabs.org>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Iscrizione Corsi Shell Project, studente $cognome $nome, classe $class";

    $msg = "<html><body>";
    $msg .= "<h1>Nuovo studente iscritto</h1>";
    $msg .= "<p>";
    $msg .= "Nome: $nome<br>";
    $msg .= "Cognome: $cognome<br>";
    $msg .= "Mail: $email<br>";
    $msg .= "Classe: $class<br>";
    $msg .= "<br>";
    $msg .= "<b>Corsi Selezionati</b><br><br>";
    foreach($nomeCorsi as $c)
    {
        if ($courses[$c] == true)
        {
            $msg .= "$c <br>";
        }
    }
    
    $msg .= "<br><br>";
    $msg .= "Ci vediamo ai corsi!<br>";
    $msg .= "</body></html>";

    $resDocenti = mail("info@dvjlabs.org", $subject, $msg, $headers);

    if ($resDocenti)
    {
        echo "Sei registrato! <br>";
    }
    else
    {
        echo "Problemi nell'invio dei dati. Contatta l'<a href=\"mailto:andrea@liceodavincijesi.gov.it\">assistenza oppure chiedi domattina a scuola:(<br />";
    }    
    

    // MAIL DI COMUNICAZIONE ALL'UTENTE -------------------------------------------------------------------------------
    $headers = "From: Registrazione Corsi Shell Project <shellproject@dvjlabs.org>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $subject = "Iscrizione Corsi Shell Project, studente $cognome $nome, classe $class";

    $msg = "<html><body>";
    $msg .= "Ciao $nome,<br><br>";
    $msg .= "ricevi questa mail perché hai appena compilato il modulo di registrazione per l'Iscrizione ai corsi \"Shell Project\" del Liceo \"Da Vinci\" di Jesi.<br>";
    $msg .= "<br>";
    $msg .= "<b>Corsi Selezionati</b><br><br>";
    foreach($nomeCorsi as $c)
    {
        if ($courses[$c] == true)
        {
            $msg .= "$c <br>";
        }
    }
    
    $msg .= "<br><br>";
    $msg .= "Ci vediamo ai corsi!<br>";
    $msg .= "</body></html>";
    
    $resStudenti = mail($email, $subject, $msg, $headers);
        
    if ($resStudenti)
    {
        echo "Dati correttamente inviati! <br>";
        echo "Riceverai una mail di conferma! <br>";
    }
    else
    {
        echo "Problemi nell'invio dei dati. Contatta l'<a href=\"mailto:andrea@dvjlabs.org\">assistenza oppure chiedi domattina a scuola:(<br />";
    }
?>

<!-- ULTIMI SALUTI PRIMA DELLA REDIREZIONE -->
<br>
<p>La pagina verrà automaticamente rediretta alla pagina di registrazione al corso...<br>
Se non avviene in 10 secondi... clicca <a href="https://www.dvjlabs.org/projects/shell.php">qui</a>
</p>
