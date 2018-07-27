<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.serializer.exception_normalizer.jms' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Util\\ExceptionValueMap.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Serializer\\Normalizer\\AbstractExceptionNormalizer.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Handler\\SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Serializer\\Normalizer\\ExceptionHandler.php';

return $this->services['fos_rest.serializer.exception_normalizer.jms'] = new \FOS\RestBundle\Serializer\Normalizer\ExceptionHandler(new \FOS\RestBundle\Util\ExceptionValueMap(array('Symfony\\Component\\HttpKernel\\Exception\\HttpException' => true, 'Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException' => true)), true);
