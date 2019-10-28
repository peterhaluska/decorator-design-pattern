<?php

namespace App\Http\Controllers;

use App\Http\Handlers\Action\ShowPostHandler;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PostController extends Controller
{
    /** @var ShowPostHandler */
    private $showHandler;

    /**
     * @param ShowPostHandler $showHandler
     */
    public function __construct(ShowPostHandler $showHandler)
    {
        $this->showHandler = $showHandler;
    }

    /**
     * @param $id
     *
     * @return Factory|View
     */
    public function show($id)
    {
        $view = $this->showHandler->viewPost($id);

        return view($view->getTemplateName(), $view->getViewData());
    }
}
