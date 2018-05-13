<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $title;

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    public function getBody()
    {
        return $this->body;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}
