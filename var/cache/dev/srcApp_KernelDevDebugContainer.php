<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7nTuDKD\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7nTuDKD/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7nTuDKD.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7nTuDKD\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container7nTuDKD\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '7nTuDKD',
    'container.build_id' => '8e79381c',
    'container.build_time' => 1568392161,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7nTuDKD');
