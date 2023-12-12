<?php

namespace app\models;

use app\core\Model;

class Products extends Model {
    public function getAllProducts() {
        $sql = "SELECT * FROM Products";
        return $this->db->row($sql);
    }

    public function getProductById($productId) {
        $sql = "SELECT * FROM products.php WHERE id = :id";
        return $this->db->row($sql, ['id' => $productId]);
    }

    public function addProduct($name, $price, $description) {
        $sql = "INSERT INTO products.php (name, price, description) VALUES (:name, :price, :description)";
        $params = ['name' => $name, 'price' => $price, 'description' => $description];
        $this->db->query($sql, $params);
    }

    public function updateProduct($productId, $name, $price, $description) {
        $sql = "UPDATE products.php SET name = :name, price = :price, description = :description WHERE id = :id";
        $params = ['name' => $name, 'price' => $price, 'description' => $description, 'id' => $productId];
        $this->db->query($sql, $params);
    }

    public function deleteProduct($productId) {
        $sql = "DELETE FROM products.php WHERE id = :id";
        $params = ['id' => $productId];
        $this->db->query($sql, $params);
    }
}