<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Endereço de e-mail para o qual o formulário será enviado
    $to = "tobybongotha@gmail.com";
    
    // Assunto do e-mail
    $email_subject = "Contact Form: " . $subject;
    
    // Corpo do e-mail
    $email_body = "You have received a new message from the contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message";
    
    // Cabeçalhos do e-mail
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    // Envia o e-mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
