<?php


class App
{

    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            $url[0] = 'login';
        }

        session_start();
        if (isset($_SESSION['id'])) {
            if (time() > $_SESSION['sessionTime']) {
                header('Location: ' . URL . 'login');
                die();
            }
            if ($url[0] == 'login' && !isset($url[1])) {
                header('Location: ' . URL . 'dashboard/getEmployee');
                die();
            }

        } else {
            if (!$url[0] == 'login') {
                header('Location: ' . URL . 'login');
                die();
            }
        }



        $fileController = 'controllers/' . $url[0] . '.php';
        // print_r($fileController);

        if (file_exists($fileController)) {
            require_once $fileController;

            //inicializa el controlador
            $controller = new $url[0];

            $nparam = sizeof($url);

            if ($nparam > 1) {
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    if ($url[1] != "public") {
                        $controller->{$url[1]}($param);
                    }
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        } else {
            require_once 'controllers/error.php';
            $controller = new Myerror();
        }
    }
}
