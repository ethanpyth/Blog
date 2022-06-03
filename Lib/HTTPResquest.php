<?php

namespace Library;

class HTTPResquest
{
    public function cookieData($key)
    {
        return $_COOKIE[$key] ?? null;
    }

    public function cookieExists($key): bool
    {
        return isset($_COOKIE[$key]);
    }

    public function getData($key)
    {
        return $_GET[$key] ?? null;
    }

    public function getExists($key): bool
    {
        return isset($_GET[$key]);
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function postData($key)
    {
        return $_POST[$key] ?? null;
    }

    public function postExists($key): bool
    {
        return isset($_POST[$key]);
    }
}