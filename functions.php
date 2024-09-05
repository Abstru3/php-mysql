<?php

function isValidRecipe(array $recipe) : bool {
    return isset($recipe['is_enabled']) && $recipe['is_enabled'];
}

function getRecipes(array $recipes) : array {
    $validRecipes = [];
    foreach ($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}

function displayAuthor(string $authorEmail, array $users) : string {
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . ' (' . $user['age'] . ' ans)';
        }
    }
    return 'Auteur inconnu'; 
}
?>
