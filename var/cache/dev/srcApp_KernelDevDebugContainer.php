<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9s3Ae9X\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9s3Ae9X/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9s3Ae9X.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9s3Ae9X\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9s3Ae9X\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9s3Ae9X',
    'container.build_id' => '699fb150',
    'container.build_time' => 1602080205,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9s3Ae9X');
