<?php

namespace App\Repository;

use App\Entity\Post;

interface PostRepository
{
    /**
     * @param int $id
     *
     * @return Post
     */
    public function getById(int $id): Post;

    /**
     * @param int $id
     *
     * @return Post|null
     */
    public function findById(int $id): ?Post;
}
