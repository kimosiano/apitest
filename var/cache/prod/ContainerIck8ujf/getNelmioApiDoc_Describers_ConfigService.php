<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.config' shared service.

include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\DescriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\api-doc-bundle\\Describer\\ExternalDocDescriber.php';

return $this->services['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(array('host' => '127.0.0.1:8000', 'schemes' => array(0 => 'http', 1 => 'https'), 'info' => array('title' => 'API Adherent documentation', 'description' => 'This is an awesome app!', 'version' => '1.0.0'), 'sandbox' => array('accept_type' => array(0 => 'application/json', 1 => 'application/xml'), 'body_format' => array('formats' => array(0 => 'json', 1 => 'xml'), 'default_format' => 'json'), 'request_format' => array('formats' => array('json' => 'application/json', 'xml' => 'application/xml')))));
