<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2h7MTzh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2h7MTzh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2h7MTzh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2h7MTzh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2h7MTzh\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2h7MTzh',
    'container.build_id' => 'c9231df7',
    'container.build_time' => 1566471942,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2h7MTzh');
