<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUxv3gxM\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUxv3gxM/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUxv3gxM.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUxv3gxM\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUxv3gxM\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Uxv3gxM',
    'container.build_id' => 'e4e5d698',
    'container.build_time' => 1614875474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUxv3gxM');
