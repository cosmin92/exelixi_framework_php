<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: util_functions.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */


namespace exelixi\dispatcher;

/**
 * Class Request
 * @package exelixi\dispatcher
 */
class Request
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $query_string;

    /**
     * @var array
     */
    private $params = array();

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->url = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $this->method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        $this->query_string = filter_input(INPUT_SERVER, 'QUERY_STRING');
        $this->params = explode('/', trim(rtrim(ltrim($this->query_string, '/'), '/')));
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getQueryString(): string
    {
        return $this->query_string;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

}