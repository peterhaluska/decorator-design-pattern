<?php

namespace App\Collection;

use App\Entity\Post;

class PostCollection
{
    /** @var array */
    private $items = [];

    /**
     * @param array $items
     */
    public function __construct(array $items = null)
    {
        if ($items !== null) {
            foreach ($items as $item) {
                $this->add($item);
            }
        }
    }

    /**
     * @param Post $post
     */
    public function add(Post $post): void
    {
        $this->items[$post->getId()] = $post;
    }

    /**
     * @param int $id
     *
     * @return Post|null
     */
    public function find(int $id): ?Post
    {
        if (empty($this->items[$id])) {
            return null;
        }

        return $this->items[$id];
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }
}
