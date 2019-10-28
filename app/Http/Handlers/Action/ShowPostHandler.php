<?php

namespace App\Http\Handlers\Action;

use App\Repository\PostRepository;
use App\ValueObject\ViewData;

class ShowPostHandler
{
    /** @var PostRepository */
    private $postRepository;

    /**
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param int $id
     *
     * @return ViewData
     */
    public function viewPost(int $id): ViewData
    {
        $post = $this->postRepository->getById($id);

        $viewParams = [
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'body' => $post->getBody(),
        ];

        return new ViewData('post/show', $viewParams);
    }
}
