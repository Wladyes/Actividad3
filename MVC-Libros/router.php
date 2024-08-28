<?php

class Router {
    private $url;
    private $controller = 'HomeController';
    private $method = 'index';
    private $params = [];

    public function __construct($url) {
        $this->url = $url;
        $this->parseUrl();
    }

    private function parseUrl() {
        if (!empty($this->url)) {
            $url = explode('/', filter_var(rtrim($this->url, '/'), FILTER_SANITIZE_URL));

            // Detecta y carga el controlador
            if (isset($url[1]) && file_exists('controllers/' . ucfirst($url[1]) . 'Controller.php')) {
                $this->controller = ucfirst($url[1]) . 'Controller';
                unset($url[1]);
            }

            require_once 'controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;

            // Detecta y carga el método
            if (isset($url[2]) && method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);
            }

            // Resto de la URL se toma como parámetros
            $this->params = $url ? array_values($url) : [];
        }
    }

    public function handle() {
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
