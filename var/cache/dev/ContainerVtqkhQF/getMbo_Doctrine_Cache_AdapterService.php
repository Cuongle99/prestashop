<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.doctrine.cache.adapter' shared service.

return $this->services['mbo.doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (\dirname(__DIR__, 4).'/var/cache/dev'.\DIRECTORY_SEPARATOR.'%/ps_mbo'));
