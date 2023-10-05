$to = "info@anansis.eu"; 
$subject = "Contactformulier ingevuld door $name"; 
$message = "Naam: $name\n";
$message .= "E-mail: $email\n";
$message .= "Bericht:\n$message\n";

// Stuur de e-mail
$mailSent = mail($to, $subject, $message);

if ($mailSent) {
    // E-mail is succesvol verzonden, stuur de gebruiker door naar de bedankpagina
    header("Location: bedankt.html");
    exit();
} else {
    // Er is een fout opgetreden bij het verzenden van de e-mail, geef een foutmelding weer
    echo "An error occurred while sending the email. Please try again later.";
}
