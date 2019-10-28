<?php

namespace App\Cache;

interface CachePool
{
    /**
     * @param string $key
     * @param        $item
     */
    public function cacheItem(string $key, $item);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getCacheItemByKey(string $key);
}
