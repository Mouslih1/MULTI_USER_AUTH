<?php

class Application
{
    public static function process()
    {
        $controllerName = "userController";
        $action = "indexAction";

        if(!empty($_GET['controller']))
        {
            $controller = $_GET['controller'];
        }

        if(!empty($_GET['action']))
        {
            $action = $_GET['action'];
        }

        $controllerName = "\Controllers\\" . $controllerName;
        $controller = new $controllerName();
        $controller->$action();
    } 
}