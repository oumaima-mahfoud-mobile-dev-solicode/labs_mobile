<?php

declare(strict_types=1);

function validerTitre(string $titre): string
{
    $titreNettoye = trim($titre);

    if ($titreNettoye === '') {
        throw new InvalidArgumentException('Le titre ne peut pas être vide.');
    }

    if (strlen($titreNettoye) < 3) {
        throw new InvalidArgumentException('Le titre doit contenir au moins 3 caractères.');
    }

    return $titreNettoye;
}

function publierArticle(string $titre): void
{
    try {
        $titreValide = validerTitre($titre);
        echo "Article publié : {$titreValide}\n";
    } catch (InvalidArgumentException $exception) {
        echo "Erreur : " . $exception->getMessage() . "\n";
    }
}

publierArticle('  PHP et POO  ');
publierArticle('');
publierArticle('OK');
