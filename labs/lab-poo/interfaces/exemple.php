<?php

interface ArticleInterface {
    public function getTitre(): string;
    public function getPrix(): float;
}

class Article implements ArticleInterface {
    private string $titre;
    private float $prix;

    public function __construct(string $titre, float $prix) {
        $this->titre = $titre;
        $this->prix = $prix;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getPrix(): float {
        return $this->prix;
    }
}

$article = new Article("Livre de POO", 180);
echo "Titre : " . $article->getTitre() . PHP_EOL;
echo "Prix : " . $article->getPrix() . " MAD" . PHP_EOL;
