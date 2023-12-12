<?php

namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller {


    public function loginAction () {
        $this->view->render('Log In Page');
    }

    public function logoutAction () {
        exit('Exit');
    }
    public function addAction () {
        $this->view->render('Add Page');
    }

    public function editAction () {
        $this->view->render('Edit Page');
    }

    public function deleteAction () {
        exit('Delete');
    }
}