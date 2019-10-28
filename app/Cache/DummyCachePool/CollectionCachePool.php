<?php

namespace App\Cache\DummyCachePool;

use App\Cache\CachePool;
use Illuminate\Support\Collection;

class CollectionCachePool implements CachePool
{
    /** @var Collection */
    private $items;

    /**
     * @param Collection $items
     */
    public function __construct(Collection $items = null)
    {
        if ($items === null) {
            $items = new Collection([]);
        }

        $this->items = $items;
    }

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
        return $this->items->get($key);
    }
}
