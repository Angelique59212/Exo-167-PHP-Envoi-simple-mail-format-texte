<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'angelique.dehainaut59@gmail.com';
$to = 'dehainaut.angelique@orange.fr';
//$message = 'Hello World, sending a simple mail !';
//// TODO Votre code ici.
//mail('dehainaut.angelique@orange.fr', 'test', $message);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$subject = "Mail avec en-tête";
$message = "Je teste les envois de mail depuis mon serveur PHP, avec les versions vu en cours, on a commencé ce cours
aujourd'hui.";
$message = wordwrap($message, 70,"\r\n");
$headers = [
    'Reply-to' => 'dehainaut.angelique@orange.fr',
    'X-Mailer' => 'PHP/' .phpversion(),
];
mail($to,$subject, $message,$headers, "-f angelique.dehainaut59@gmail.com");

// Message error or success
if (mail($to, $subject, $message, $headers)) {
    echo "Email envoyé avec succès à $to ...";
} else {
    echo "Échec de l'envoi de l'email...";
}

file_put_contents('mails.txt', $message);
