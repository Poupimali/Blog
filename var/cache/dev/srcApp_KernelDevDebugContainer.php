<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPsbuJiK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPsbuJiK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPsbuJiK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPsbuJiK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPsbuJiK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PsbuJiK',
    'container.build_id' => '5b076536',
    'container.build_time' => 1557756221,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPsbuJiK');
