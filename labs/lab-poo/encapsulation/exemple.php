<?php

class Article {
    private string $titre;
    private float $prix;

    public function __construct(string $titre, float $prix) {
        $this->setTitre($titre);
        $this->setPrix($prix);
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre): void {
        if (trim($titre) === "") {
            throw new InvalidArgumentException("Le titre ne peut pas être vide.");
        }
        $this->titre = $titre;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function setPrix(float $prix): void {
        if ($prix < 0) {
            throw new InvalidArgumentException("Le prix ne peut pas être négatif.");
        }
        $this->prix = $prix;
    }
}

$article = new Article("Guide Symfony", 320);
echo "Titre : " . $article->getTitre() . PHP_EOL;
echo "Prix : " . $article->getPrix() . " MAD" . PHP_EOL;
