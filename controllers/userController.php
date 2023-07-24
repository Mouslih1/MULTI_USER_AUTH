<?php

namespace Controllers;

require_once("models/Model.php");

class userController extends Controller
{
    protected $modelName = \Models\User::class;

    public function indexAction()
    {
        require_once("views/login.php");
    }

    public function loginAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            extract($_POST);
            $result = $this->model->login($username, $password, $user_type);
            $_SESSION['user'] = $result;
            header("location: index.php?controller=userController&action=dashbordAction");
            exit;
        }
    }


    function dashbordAction()
    {
        $users = $_SESSION['user'];
        require_once("views/home.php");
    }

    function logoutAction()
    {
        $_SESSION = array();
        session_destroy();
        header("location: index.php?controller=userController&action=indexAction");
        exit;
    }
}
