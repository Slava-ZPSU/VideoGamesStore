<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller {
    public function registerAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['email', 'login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            } else if ($this->model->isEmailExists($_POST['email'])) {
                $this->view->message('error', $this->model->error);
            } else if (!$this->model->isLoginExists($_POST['login'])) {
                $this->view->message('error', $this->model->error);
            }

            $this->model->register($_POST);
            $this->view->message('success', 'Реєстрацію успішно завершено, підтвердіть свою електронну адресу');
        }
        $this->view->render('Реєстрація');
    }

    public function loginAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            } else if (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('error', $this->model->error);
            } else if (!$this->model->checkStatus('login', $_POST['login'])) {
                $this->view->message('error', $this->model->error);
            }

            $this->model->login($_POST['login']);
            $this->view->location('account/profile');
        }
        $this->view->render('Вхід');
    }

    public function logoutAction() {
        unset($_SESSION['account']);
        $this->view->redirect('account/login');
    }

    public function confirmAction() {
        if (!$this->model->isTokenExists($this->route['token'])) {
            $this->view->redirect('account/login');
        }

        $this->model->activate($this->route['token']);
        $this->view->render('Акаунт активовано');
    }

    public function recoveryAction() {
        if (!empty($_POST)) {
            if (!$this->model->validate(['email'], $_POST)) {
                $this->view->message('error', $this->model->error);
            } else if (!$this->model->isEmailExists($_POST['email'])) {
                $this->view->message('error', $this->model->error);
            } else if (!$this->model->checkStatus('email', $_POST['email'])) {
                $this->view->message('error', $this->model->error);
            }

            $this->model->recovery($_POST);
            $this->view->message('success', 'Запрос на відновлення паролю відправленний на електронну адресу');
        }
        $this->view->render('Відновлення пароля');
    }

    public function resetAction() {
        if(!$this->model->isTokenExists($this->route['token'])) {
            $this->view->redirect('account/login');
        }

        $password = $this->model->reset($this->route['token']);
        $vars = [
            'password' => $password,
        ];

        $this->view->render('Пароль зкинуто', $vars);
    }

    public function profileAction() {
        if (!$this->checkAcl()) {
            $this->view->redirect('account/login');
        }

        if (!empty($_POST)) {
            if (!$this->model->validate(['email'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }

            $id = $this->model->isEmailExists($_POST['email']);
            if ($id && $id != $_SESSION['account']['id']) {
                $this->view->message('error','Дана адреса електронної пошти вже зайнята');
            }
            if (!empty($_POST['password']) && !$this->model->validate(['password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }

            $this->model->save($_POST);
            $this->view->message('success', 'Дані збережено');
        }
        $this->view->render('Профіль');
    }
}