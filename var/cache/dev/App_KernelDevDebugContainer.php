<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVJx1Xwu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVJx1Xwu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVJx1Xwu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVJx1Xwu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVJx1Xwu\App_KernelDevDebugContainer([
    'container.build_hash' => 'VJx1Xwu',
    'container.build_id' => '4c7660c3',
    'container.build_time' => 1658830306,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVJx1Xwu');
