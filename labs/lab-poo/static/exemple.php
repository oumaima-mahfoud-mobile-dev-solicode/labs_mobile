<?php

class CompteurArticle {
    private static int $total = 0;

    public function __construct() {
        self::$total++;
    }

    public static function getTotal(): int {
        return self::$total;
    }
}

new CompteurArticle();
new CompteurArticle();
new CompteurArticle();

echo "Nombre d'articles créés : " . CompteurArticle::getTotal() . PHP_EOL;
