<?php

declare(strict_types=1);

namespace App\Models {
    class Article
    {
        public function __construct(
            public string $titre,
            public string $contenu = ''
        ) {
        }

        public function description(): string
        {
            return $this->titre . ' - ' . $this->contenu;
        }
    }
}

namespace App\Repositories {
    class ArticleRepository
    {
        private array $articles = [];

        public function ajouter(\App\Models\Article $article): void
        {
            $this->articles[] = $article;
        }

        public function compter(): int
        {
            return count($this->articles);
        }
    }
}

namespace {
    $article = new \App\Models\Article('Article de test', 'Premier article');
    $repository = new \App\Repositories\ArticleRepository();

    $repository->ajouter($article);

    echo 'Nombre d\'articles : ' . $repository->compter() . PHP_EOL;
    echo $article->description() . PHP_EOL;
}
