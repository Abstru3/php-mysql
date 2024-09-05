<?php
// Déclaration du tableau des recettes avec des tableaux associatifs
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'besjan@exemple.com',
        'is_enabled' => true
    ],
    [
        'title' => 'Boeuf bourguignon',
        'recipe' => 'Etape 1 : mariner la viande dans le vin rouge...',
        'author' => 'besjan@exemple.com',
        'is_enabled' => true
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'besjan@exemple.com',
        'is_enabled' => false
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .recipe {
            margin-bottom: 20px;
        }
        .recipe h2 {
            margin: 0;
            font-size: 24px;
            color: #000;
        }
        .recipe p {
            margin: 5px 0;
        }
        .recipe .instructions {
            font-style: italic;
        }
        .recipe .author {
            color: gray;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <h1>Affichage des recettes</h1>

    <?php foreach ($recipes as $recipe): ?>
        <?php if ($recipe['is_enabled']): ?>
            <div class="recipe">
                <h2><?php echo $recipe['title']; ?></h2>
                <p class="instructions"><?php echo $recipe['recipe']; ?></p>
                <p class="author"><?php echo $recipe['author']; ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

</body>
</html>
