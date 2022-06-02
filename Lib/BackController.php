<?php

namespace Library;

class BackController
{
    protected string $action = '';
    protected string $module = '';
    protected ?Page $page = null;
    protected string $view = '';


    public function __construct(Application $app, $module, $action)
    {
        parent::construct($app);
        //$this->managers = new Manager('PDO', PDOFACTORY::getMysqlConnexion())
        $this->page = new Page($app);
        $this->setModule($module);
        $this->setAction($action);
        $this->setView($action);
    }

    public function page(): ?Page
    {
        return $this->page;
    }

    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }

    /**
     * @param string $module
     */
    public function setModule(string $module): void
    {
        if (empty($module)) {
            throw new \InvalidArgumentException('Le module doit etre une chaine de caratères valides');
        }

        $this->module = $module;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action): void
    {
        if(empty($action)) {
            throw new \InvalidArgumentException('L\'action doit etre une chaine de caractère valide');
        }
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * @param string $view
     */
    public function setView(string $view): void
    {
        if (empty($view)) {
            throw new \InvalidArgumentException('La vue doit etre une chaine de caractère valide');
        }
        $this->view = $view;
    }
}