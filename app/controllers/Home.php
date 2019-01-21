<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 21/01/2019
 * Time: 20:31
 */

class Home extends \exelixi\controller\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home(){
        $this->renderView('home');
    }

    public function about(){
        $this->renderView('about');
    }
}