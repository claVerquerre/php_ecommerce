<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

final class ProductRepository {

    public function getAll(): iterable {
        try {
            $yaml = Yaml::parseFile('src/products.yaml', Yaml::PARSE_CUSTOM_TAGS);

            foreach ($yaml as $product) {
                yield $product;
            }
        } catch (ParseException $e) {
            printf('Unable to parse the YAML string: %s', $e->getMessage());
        }
    }

    public function getDetails($id): array {
        try {
            $yaml = Yaml::parseFile('src/products.yaml', Yaml::PARSE_CUSTOM_TAGS);

            foreach ($yaml as $products) {
                foreach ($products as $product) {
                    if ($product->getValue()['id'] == $id) {
                        return $product->getValue();
                    }
                }
            }
            return [];
        } catch (ParseException $e) {
            printf('Unable to parse the YAML string: %s', $e->getMessage());
        }        
    }
}