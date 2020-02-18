<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

final class ProductRepository {

    public function getAll(): iterable {
        $yaml = Yaml::parseFile('src/products.yaml',Yaml::PARSE_CUSTOM_TAGS);

        foreach ($yaml as $product) {
            yield $product;
        }
    }

    public function getDetails($id): Product {
        $yaml = Yaml::parseFile(__DIR__.'/src/products.yaml');

        foreach ($yaml as $product) {
            if ($product->getId() == $id) {
                return $product;
            }
        }
    }
}