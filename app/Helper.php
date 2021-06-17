<?php

function getController($level = 0)
{
    $controller = request()->route()->getAction()['controller'];
    $controller = explode('\\', $controller);
    $controller = str_replace('@', ' ', strtolower(end($controller)));
    return $controller;
}
