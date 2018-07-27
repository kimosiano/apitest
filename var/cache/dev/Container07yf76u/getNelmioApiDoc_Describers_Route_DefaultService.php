<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.route.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\DescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\RouteDescriber.php';

return $this->services['nelmio_api_doc.describers.route.default'] = new \Nelmio\ApiDocBundle\Describer\RouteDescriber(${($_ = isset($this->services['nelmio_api_doc.routes.default']) ? $this->services['nelmio_api_doc.routes.default'] : $this->load('getNelmioApiDoc_Routes_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_api_doc.controller_reflector']) ? $this->services['nelmio_api_doc.controller_reflector'] : $this->load('getNelmioApiDoc_ControllerReflectorService.php')) && false ?: '_'}, new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['nelmio_api_doc.route_describers.route_metadata']) ? $this->services['nelmio_api_doc.route_describers.route_metadata'] : $this->services['nelmio_api_doc.route_describers.route_metadata'] = new \Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber()) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['nelmio_api_doc.route_describers.fos_rest']) ? $this->services['nelmio_api_doc.route_describers.fos_rest'] : $this->load('getNelmioApiDoc_RouteDescribers_FosRestService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['nelmio_api_doc.route_describers.php_doc']) ? $this->services['nelmio_api_doc.route_describers.php_doc'] : $this->services['nelmio_api_doc.route_describers.php_doc'] = new \Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber()) && false ?: '_'};
}, 3));