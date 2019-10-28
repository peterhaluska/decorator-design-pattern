<?php

namespace App\Repository\DummyORM;

use App\Collection\PostCollection;
use App\Entity\Post;
use App\Exceptions\PostNotFoundException;
use App\Repository\PostRepository;

class PostModelRepository implements PostRepository
{
    /** @var PostCollection */
    private $postCollection;

    /**
     * @param PostCollection $postCollection
     */
    public function __construct(PostCollection $postCollection)
    {
        $this->postCollection = $postCollection;
    }

    /**
     * @param int $id
     *
     * @return Post
     * @throws PostNotFoundException
     */
    public function getById(int $id): Post
    {
        $post = $this->findById($id);

        if ($post === null) {
            throw new PostNotFoundException($id);
        }

        return $post;
    }

    /**
     * @param int $id
     *
     * @return Post|null
     */
    public function findById(int $id): ?Post
    {
        return $this->postCollection->find($id);
    }
}
