<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ9UVYWZ\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ9UVYWZ/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerQ9UVYWZ.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerQ9UVYWZ\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerQ9UVYWZ\appAppKernelProdContainer([
    'container.build_hash' => 'Q9UVYWZ',
    'container.build_id' => '1630d01a',
    'container.build_time' => 1710156379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ9UVYWZ');
