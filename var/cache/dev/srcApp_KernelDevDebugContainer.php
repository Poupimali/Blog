<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV4pF7xx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV4pF7xx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV4pF7xx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV4pF7xx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerV4pF7xx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'V4pF7xx',
    'container.build_id' => 'f9e88050',
    'container.build_time' => 1560784457,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV4pF7xx');
