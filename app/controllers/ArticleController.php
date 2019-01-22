<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 21/01/2019
 * Time: 22:46
 */

class ArticleController extends \exelixi\controller\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function articles(){
        $this->render('articles', []);
    }

    public function new(){
        $this->render('new');
    }
}