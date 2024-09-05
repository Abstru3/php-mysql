<?php
include_once('variables.php');
include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <?php include_once('header.php'); ?>

    <h1 class="my-4">Site de recettes</h1>

    <?php foreach(getRecipes($recipes) as $recipe) : ?>
    <article class="mb-4">
        <h3><?php echo htmlspecialchars($recipe['title']); ?></h3>
        <div><?php echo htmlspecialchars($recipe['recipe']); ?></div>
        <i><?php echo htmlspecialchars(displayAuthor($recipe['author'], $users)); ?></i>
    </article>
    <?php endforeach; ?>
</div>

<?php include_once('footer.php'); ?>
</body>
</html>
