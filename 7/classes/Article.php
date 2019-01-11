<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 11.01.2019
 * Time: 15:16
 */

namespace Article;

class Article
{

    protected $title;
    protected $preview;
    protected $text;
    protected $id;

    public function __construct($id, $title)
    {
        $this->title = $title;
        $this->id = $id;
        return $this;
    }

    /**
     * @param mixed $preview
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}