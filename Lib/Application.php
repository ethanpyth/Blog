<?php

namespace Library;

abstract class Application
{
    protected HTTPResquest $httpRequest;
    protected HTTPResponse $httpResponse;
    protected string $name;

    public function __construct()
    {
        $this->httpRequest = new HTTPResquest;
        $this->httpResponse = new HTTPResponse;
        $this->name = '';
    }

    abstract public function run();

    public function httpResponse()
    {
        return $this->httpResponse;
    }

    public function name(): string
    {
        return $this->name;
    }
}