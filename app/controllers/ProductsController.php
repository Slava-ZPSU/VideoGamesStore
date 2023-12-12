<?php

namespace app\controllers;

use app\core\Controller;

class ProductsController extends Controller {
    public function showAction() {
        $result = $this->model->getAllProducts();
        $vars = [
            'products' => $result,
        ];

        $this->view->render('Store Page', $vars);
    }

    public function addAction() {
        $this->view->render('Add Product Page');
    }
}