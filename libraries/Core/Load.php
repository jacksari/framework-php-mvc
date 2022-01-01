<?php

    // Load
    $controllerFile = 'controllers/'.$controller.'Controller.php';
    if(file_exists($controllerFile))
    {
        require_once($controllerFile);
        $controller = new $controller();
        if(method_exists($controller, $method))
        {
            $controller->{$method}($params);
        } else{
            //echo "No existe el método";
            require_once('controllers/ErrorController.php');

        }
    } else{
        require_once('controllers/ErrorController.php');
    }

?>