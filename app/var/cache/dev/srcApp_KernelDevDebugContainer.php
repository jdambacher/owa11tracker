<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQs0XwXL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQs0XwXL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQs0XwXL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQs0XwXL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQs0XwXL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Qs0XwXL',
    'container.build_id' => '5ed72e5a',
    'container.build_time' => 1562788487,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQs0XwXL');
