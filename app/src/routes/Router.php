<?php
namespace App\routes;

use App\controllers\FrontController;
use App\controllers\ErrorController;
use App\controllers\SecurityController;

use DOMDocument;

class Router
{
    public function getController()
    {
        $xml = new \DOMDocument();
        $xml->load('src/routes/routes.xml');
        $routes = $xml->getElementsByTagName('route');

        isset($_GET['p']) ? $path = htmlspecialchars($_GET['p']) : $path = "";

        foreach ($routes as $route) { 
            if ($path === $route->getAttribute('p')) {
                $controllerClass = 'App\\controllers\\' . $route->getAttribute('controller');
                $action = $route->getAttribute('action');
                $params = [];
                if ($route->hasAttribute('params')) {
                    $keys = explode(',',$route->getAttribute('params'));
                    
                    foreach($keys as $key) {
                        $params[$key] = $_GET[$key];
                    }
                }
                return new $controllerClass($action, $params);
            }
        }
        return new ErrorController('noRoute');
    }
}

?>