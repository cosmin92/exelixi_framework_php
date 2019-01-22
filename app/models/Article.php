<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 21/01/2019
 * Time: 22:55
 */

class Article extends \exelixi\model\Model
{
    private $id;
    private $title;
    private $content;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

}