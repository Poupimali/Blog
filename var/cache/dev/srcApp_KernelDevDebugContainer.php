<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG03Cu7Y\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG03Cu7Y/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG03Cu7Y.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG03Cu7Y\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerG03Cu7Y\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'G03Cu7Y',
    'container.build_id' => '923dd245',
    'container.build_time' => 1560071969,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG03Cu7Y');
