<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTcxfcIV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTcxfcIV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTcxfcIV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTcxfcIV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTcxfcIV\App_KernelDevDebugContainer([
    'container.build_hash' => 'TcxfcIV',
    'container.build_id' => '9cc428ea',
    'container.build_time' => 1617134758,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTcxfcIV');
