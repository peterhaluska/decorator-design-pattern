<?php

namespace App\Cache\DummyCachePool;

use App\Cache\CachePool;
use App\Entity\DummyORM\PostModel;
use Illuminate\Support\Collection;

class CollectionCachePool implements CachePool
{
    /** @var Collection */
    private $items;

    /**
     * @param string $key
     * @param        $item
     */
    public function cacheItem(string $key, $item)
    {
        $this->items->put($key, $item);
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getCacheItemByKey(string $key)
    {
        $item = $this->items->get($key);

        if ($item instanceof PostModel) {
            $item->setTitle('Post served from cache: ' . $item->getTitle());
        }

        return $item;
    }
}
