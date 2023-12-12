<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller {
    public function indexAction () {
        $this->view->render('Main Page');
    }

    public function contactAction () {
        $this->view->render('Contact Page');
    }

    public function aboutAction () {
        $this->view->render('About Page');
    }
}