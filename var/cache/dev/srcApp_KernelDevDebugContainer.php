<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZpGxMAI\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZpGxMAI/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZpGxMAI.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZpGxMAI\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZpGxMAI\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZpGxMAI',
    'container.build_id' => 'a3653c2e',
    'container.build_time' => 1559117329,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZpGxMAI');
