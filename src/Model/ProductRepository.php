<?php
declare(strict_types=1)

namespace App/Model;

final class ProductRepository {
    public function findAll(): iterable {
        $yaml = Yaml::parseFile(__DIR__.'/../../products.yaml');
        foreach
    }
}