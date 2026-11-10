<?php

class Article {
    protected string $titre;

    public function __construct(string $titre) {
        $this->titre = $titre;
    }

    public function afficherDetails(): string {
        return "Article : {$this->titre}";
    }
}

class ArticlePapier extends Article {
    public function afficherDetails(): string {
        return "Livre : {$this->titre}";
    }
}

class ArticleBonus extends Article {
    public function afficherDetails(): string {
        return "Cadeau : {$this->titre}";
    }
}

function afficherArticle(Article $article): void {
    echo $article->afficherDetails() . PHP_EOL;
}

afficherArticle(new Article("Cours PHP"));
afficherArticle(new ArticlePapier("POO pour débutants"));
afficherArticle(new ArticleBonus("Guide de réalisation"));
