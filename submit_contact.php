<?php
if (
    (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_GET['message']) || empty($_GET['message']))
) {
    echo('<h1>Il faut un email et un message valides pour soumettre le formulaire.</h1>');
    return;
}
$email = htmlspecialchars($_GET['email']);
$message = htmlspecialchars($_GET['message']);
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
