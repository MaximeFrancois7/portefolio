<?php
if($_POST){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $object = $_POST['objet'];
    $message = $_POST['message'];
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP"
    
    $subject = "$object";
    $destinataire= "francois.maxime45@gmail.com";
    $body= "$message";

    if(mail($destinataire,$subject,$body,$headers)) {
        $response['status'] = 'Envoi réussi';
        $response['message'] = 'Votre email est envoyé';
    } else{
        $response['status'] = 'Echec de l\'envoi';
        $response['message'] = 'Votre email n\'a pas été envoyé';
    }

    echo json_encode($response);
}
?>