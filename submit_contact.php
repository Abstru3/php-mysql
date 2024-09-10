<?php
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['message']) || empty($_POST['message']))
) {
    echo('<h1>Il faut un email et un message valides pour soumettre le formulaire.</h1>');
    return;
}
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
        {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['screenshot']['size'] <= 1000000)
        {
        // Testons si l'extension est autorisée
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions))
        {
        // On peut valider le fichier et le stocker définitivement
        move_uploaded_file($_FILES['screenshot']['tmp_name'],
        'uploads/' . basename($_FILES['screenshot']['name']));
        echo "L'envoi a bien été effectué !";
        }
    }
}
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message bien reçu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <?php include_once('header.php'); ?>

    <h1 class="my-4">Message bien reçu !</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo $email; ?> </p>
            <p class="card-text"><b>Message</b> : <?php echo $message; ?> </p>

        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
</body>
</html>
