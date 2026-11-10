<?php

abstract class Article {
    protected string $titre;
    protected float $prix;

    public function __construct(string $titre, float $prix) {
        $this->titre = $titre;
        $this->prix = $prix;
    }

    abstract public function afficherDetails(): string;
}

class ArticleNumerique extends Article {
    public function afficherDetails(): string {
        return "Article numérique : {$this->titre} - {$this->prix} MAD";
    }
}

$article = new ArticleNumerique("Cours PHP 8", 250);
echo $article->afficherDetails() . PHP_EOL;
