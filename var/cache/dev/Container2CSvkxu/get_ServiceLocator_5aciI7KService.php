<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5aciI7K' shared service.

return $this->privates['.service_locator.5aciI7K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.5aciI7K.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.5aciI7K": it references class "App\\Entity\\Article" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
]);
