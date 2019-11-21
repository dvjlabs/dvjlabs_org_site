<?php

    // invio 
    header("Refresh: 10; URL=http://www.liceodavincijesi.gov.it/pages/IoT/?sub=Subscriptions");
    
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["mail"];
    $class = $_POST["classe"];
    $getmail = str_replace("@", "_AT_", $email);

    
    $headers = "From: Registrazione Corso IoT <webmaster@liceodavincijesi.gov.it>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $subject = "Iscrizione Corso IoT, studente $cognome $nome, classe $class";

    $msg = "<html><body>";
    $msg .= "Ciao $nome,<br><br>";
    $msg .= "ricevi questa mail perché hai appena compilato il modulo di registrazione per l'Iscrizione al corso IoT del Liceo \"Da Vinci\" di Jesi.<br>";
    $msg .= "Per confermare i tuoi dati e la tua iscrizione, clicca sul seguente <a href=\"http://www.liceodavincijesi.gov.it/pages/IoT/confirm.php?course_id=qse4ft3klknlgfdnlbd&cacaca=a1b2c3d4e5f6&nome=$nome&cognome=$cognome&mail=$getmail&classe=$class\">link</a>.<br>";
    $msg .= "<br>";
    $msg .= "Ci vediamo al corso!<br>";
    $msg .= "</body></html>";
    
    $res = mail($email, $subject, $msg, $headers);
        
    if ($res)
    {
        echo "Dati correttamente inviati! <br>";
        echo "Riceverai una mail di conferma! <br>";
        echo "Ricorda che sarai regolarmente iscritto SOLO dopo aver cliccato sul link di conferma presente nella mail...<br><br>";
    }
    else
    {
        echo "Problemi nell'invio dei dati. Contatta l'<a href=\"mailto:andrea@liceodavincijesi.gov.it\">assistenza oppure chiedi domattina a scuola:(<br />";
    }
?>

<br>
<p>La pagina verrà automaticamente rediretta alla pagina di registrazione al corso...<br>
Se non avviene in 10 secondi... clicca <a href="http://www.liceodavincijesi.gov.it/pages/IoT/?sub=Subscriptions">qui</a>
</p>
