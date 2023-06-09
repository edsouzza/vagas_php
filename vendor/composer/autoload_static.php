<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5189bbc293f6e68d5f72ccbe27f672fd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5189bbc293f6e68d5f72ccbe27f672fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5189bbc293f6e68d5f72ccbe27f672fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5189bbc293f6e68d5f72ccbe27f672fd::$classMap;

        }, null, ClassLoader::class);
    }
}
