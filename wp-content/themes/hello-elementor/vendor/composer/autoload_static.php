<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05c72fd3cff988f6319ad655da525fd6
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elementor\\WPNotificationsPackage\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elementor\\WPNotificationsPackage\\' => 
        array (
            0 => __DIR__ . '/..' . '/elementor/wp-notifications-package/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05c72fd3cff988f6319ad655da525fd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05c72fd3cff988f6319ad655da525fd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05c72fd3cff988f6319ad655da525fd6::$classMap;

        }, null, ClassLoader::class);
    }
}