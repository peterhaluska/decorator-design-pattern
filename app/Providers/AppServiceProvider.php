<?php

namespace App\Providers;

use App\Cache\DummyCachePool\CollectionCachePool;
use App\Collection\PostCollection;
use App\Entity\DummyORM\PostModel;
use App\Repository\DummyORM\PostModelRepository;
use App\Repository\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepository::class, PostModelRepository::class);

        $postCollection = new PostCollection();

        $post = new PostModel(333, 'We will be decorating...', file_get_contents(public_path('post_1.html')));

        $postCollection->add($post);

        $this->app->when(PostModelRepository::class)
            ->needs(PostCollection::class)
            ->give(function() use ($postCollection) {
                return $postCollection;
            });

        $collectionCachePool = new CollectionCachePool();
        $cachedPost = new PostModel(333, 'POST IS CACHED: We will be decorating...', file_get_contents(public_path('post_1.html')));
        $collectionCachePool->cacheItem('posts.333', $cachedPost);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
