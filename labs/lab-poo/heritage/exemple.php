<?php

class Article {
    protected string $titre;
    protected float $prix;

    public function __construct(string $titre, float $prix) {
        $this->titre = $titre;
        $this->prix = $prix;
    }

    public function afficher(): string {
        return "Titre : {$this->titre}, Prix : {$this->prix} MAD";
    }
}

class ArticlePromo extends Article {
    private float $remise;

    public function __construct(string $titre, float $prix, float $remise) {
        parent::__construct($titre, $prix);
        $this->remise = $remise;
    }

    public function afficher(): string {
        return parent::afficher() . ", Remise : {$this->remise}%";
    }
}

$article = new ArticlePromo("Pack de cours", 500, 10);
echo $article->afficher() . PHP_EOL;
