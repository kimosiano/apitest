<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.inflector' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\InflectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\DoctrineInflector.php';

return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
