<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDxZjxtV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDxZjxtV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDxZjxtV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDxZjxtV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDxZjxtV\App_KernelDevDebugContainer([
    'container.build_hash' => 'DxZjxtV',
    'container.build_id' => 'ef5fd037',
    'container.build_time' => 1650819942,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDxZjxtV');
