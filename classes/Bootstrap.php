<?php

class Bootstrap {
    private $controller;

    private $action;

    private $request;

    public function __construct($request) {
        $this->request = $request;
        if ($this->request['controller'] == "") {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        if ($this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    public function createController() {
        // Check class
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            // Check extended
            if (in_array("Controller", $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    echo "<h4> Method does not exist. [" + $this->controller + "]</h4>";
                    return;
                }
            } else {
                echo "<h4> Base controller does not exist. </h4>";
                return;
            }
        } else {
            echo "<h4> Controller class does not exist. </h4>";
            return;
        }
    }
}