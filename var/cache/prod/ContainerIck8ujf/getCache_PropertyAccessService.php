<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyAccess\\PropertyAccessor.php';

return $this->services['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('Q0lvsTUUuL', NULL, $this->getParameter('container.build_id'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});
