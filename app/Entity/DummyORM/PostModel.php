<?php

namespace App\Entity\DummyORM;

use App\Entity\Post;

class PostModel implements Post
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $body;

    /**
     * @param int    $id
     * @param string $title
     * @param string $body
     */
    public function __construct(int $id, string $title, string $body)
    {
        $this->id    = $id;
        $this->title = $title;
        $this->body  = $body;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
