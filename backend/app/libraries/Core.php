<?php

namespace App\Libraries;

class Core {
    protected $currentController = 'Index';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);

            unset($url[0]);
        }

        require_once'../app/controllers/' .  $this->currentController . '.php';

        $controllerPath = 'App\\Controllers\\'.$this->currentController;

        $controllerObj = new $controllerPath;

        if (isset($url[1])) {
            if (method_exists($controllerObj, $url[1])) {
                $this->currentMethod = $url[1];

                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$controllerObj,  $this->currentMethod],$this->params);
    }


    public function getUrl() : array
    {
       if (!isset($_GET['url'])) {
           return [];
       }

        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode('/',$url);
    }

}