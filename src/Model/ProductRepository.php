<?php
namespace php_ecommerce\src\Model;

final class ProductRepository {

    public function getAll(): iterable {
        $yaml = Yaml::parseFile(__DIR__.'/../../products.yaml');

        foreach ($yaml as $product) {
            yield $product;
        }
    }

    public function getDetails($id): Product {
        $yaml = Yaml::parseFile(__DIR__.'/../../products.yaml');

        foreach ($yaml as $product) {
            if ($product.id == $id) {
                return $product;
            }
        }
    }
}