<?php

declare(strict_types=1);

trait Timestampable
{
    private string $createdAt;
    private string $updatedAt;

    public function initializeTimestamps(): void
    {
        $date = new DateTimeImmutable('now');
        $this->createdAt = $date->format('Y-m-d H:i:s');
        $this->updatedAt = $this->createdAt;
    }

    public function touch(): void
    {
        $this->updatedAt = (new DateTimeImmutable('now'))->format('Y-m-d H:i:s');
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}

class Article
{
    use Timestampable;

    public function __construct(public string $titre)
    {
        $this->initializeTimestamps();
    }
}

class Commentaire
{
    use Timestampable;

    public function __construct(public string $message)
    {
        $this->initializeTimestamps();
    }
}

$article = new Article('Le cours de PHP');
$commentaire = new Commentaire('Très bon exemple');

sleep(1);
$article->touch();
$commentaire->touch();

echo 'Article créé le : ' . $article->getCreatedAt() . PHP_EOL;
echo 'Article mis à jour le : ' . $article->getUpdatedAt() . PHP_EOL;
echo 'Commentaire créé le : ' . $commentaire->getCreatedAt() . PHP_EOL;
echo 'Commentaire mis à jour le : ' . $commentaire->getUpdatedAt() . PHP_EOL;
