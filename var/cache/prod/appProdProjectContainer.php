<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIck8ujf\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIck8ujf/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerIck8ujf.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerIck8ujf\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerIck8ujf\appProdProjectContainer(array(
    'container.build_hash' => 'Ick8ujf',
    'container.build_id' => '8714c658',
    'container.build_time' => 1532271710,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIck8ujf');
