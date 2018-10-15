<?php

declare(strict_types=1);
/**
 * This file is part of the BEAR.Sunday package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Sunday\Provide\Transfer;

use BEAR\Sunday\Extension\Transfer\HttpCacheInterface;
use BEAR\Sunday\Provide\Transfer\NullHttpCache;
use Ray\Di\AbstractModule;

class HttpCacheModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind(HttpCacheInterface::class)->to(NullHttpCache::class);
    }
}
