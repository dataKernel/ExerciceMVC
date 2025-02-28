<?php
/**
 * Created by PhpStorm.
 * User: yann
 * Date: 22/04/16
 * Time: 15:48
 */

namespace Model\Entity;


/**
 * Class Page
 * @package Model\Entity
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 */
class Page
{

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $slug;
    /**
     * @var string
     */
    private $h1;
    /**
     * @var string
     */
    private $body;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $img;
    /**
     * @var string
     */
    private $span_text;
    /**
     * @var string
     */
    private $span_class;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * @param mixed $h1
     */
    public function setH1($h1)
    {
        $this->h1 = $h1;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
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
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getSpanText()
    {
        return $this->span_text;
    }

    /**
     * @param mixed $span_text
     */
    public function setSpanText($span_text)
    {
        $this->span_text = $span_text;
    }

    /**
     * @return mixed
     */
    public function getSpanClass()
    {
        return $this->span_class;
    }

    /**
     * @param mixed $span_class
     */
    public function setSpanClass($span_class)
    {
        $this->span_class = $span_class;
    }


}