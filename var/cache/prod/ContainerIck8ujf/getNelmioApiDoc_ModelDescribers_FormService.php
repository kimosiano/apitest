<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.model_describers.form' shared service.

include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\ModelDescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ModelRegistryAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\ModelDescriber\\FormModelDescriber.php';

return $this->services['nelmio_api_doc.model_describers.form'] = new \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
