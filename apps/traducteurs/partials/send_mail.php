<?php

if (!empty($_POST['nom']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $nom = trim(addslashes(htmlentities($_POST['nom'])));
    $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
    $age = (int)trim(addslashes(htmlentities($_POST['age'])));
    $telephone = trim(addslashes(htmlentities($_POST['telephone'])));
    $email = trim(addslashes(htmlentities($_POST['email'])));
    $langue = (int)trim(addslashes(htmlentities($_POST['langue'])));
    $description = trim(addslashes(htmlentities($_POST['description'])));
    $image = $_FILES['image']['name'];

    $destination = "./assets/images/";
    move_uploaded_file($_FILES['image']['tmp_name'], $destination . $_FILES['image']['name']);
    
    $to = 'dwwm94@gmail.com';
    $subject = 'Inscription';
    $message = "
        <html>
            <head>
                <style>
                    h1,h2{
                        color:blue;
                    }
                    ul{
                        background-color:grey;
                        color: white;
                    }
                </style>
                <title>Traducteurs Pro</title>
            </head>
            <body>
                <h1>Informations de Mr/Mme:" . $prenom . "  " . strtoupper($nom) . "</h1>
                <table>
                    <tr>
                        <th>Nom: </th><td>$nom</td>
                    </tr>
                    <tr>
                        <th>Prenom: </th><td>$prenom</td>
                    </tr>
                    <tr>
                        <th>Age: </th><td>$age</td>
                    </tr>
                    <tr>
                        <th>Téléphone: </th><td>$telephone</td>
                    </tr>
                    <tr>
                        <th>Email: </th><td>$email</td>
                    </tr>
                    <tr>
                        <th>Image: </th><td>$image</td>
                    </tr>
                </table>
            </body>
        </html>
    ";
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';

    // En-têtes additionnels
    $headers[] = "To: Dwwm <dwwm94@gmail.com>, Adimi <adimicool@gmail.com>";
    $headers[] = "From: No-Reply <$email>";
    $headers[] = "Reply-To: $nom <$email>";
    $headers[] = 'Cc: ';
    $headers[] = 'Bcc: ';

    if (mail($to, $subject, $message, implode("\r\n", $headers))) {
        mail($email, "Traducteurs Pro", "Merci pour votre mail, vous serez contacté très prochainement");
        header('location:index.php');
    }
}
?>