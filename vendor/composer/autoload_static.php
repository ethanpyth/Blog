<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita08c387b59ac57427d6a856cde3af515
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita08c387b59ac57427d6a856cde3af515::$classMap;

        }, null, ClassLoader::class);
    }
}