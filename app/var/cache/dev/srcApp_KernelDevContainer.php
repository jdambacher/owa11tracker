<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWDsoxbX\srcApp_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWDsoxbX/srcApp_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerWDsoxbX.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevContainer::class, false)) {
    \class_alias(\ContainerWDsoxbX\srcApp_KernelDevContainer::class, srcApp_KernelDevContainer::class, false);
}

return new \ContainerWDsoxbX\srcApp_KernelDevContainer([
    'container.build_hash' => 'WDsoxbX',
    'container.build_id' => '8b30c74e',
    'container.build_time' => 1562788586,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWDsoxbX');
