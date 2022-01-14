<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05c5f9647802be590f98cb0f688f963c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naimur\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naimur\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05c5f9647802be590f98cb0f688f963c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05c5f9647802be590f98cb0f688f963c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05c5f9647802be590f98cb0f688f963c::$classMap;

        }, null, ClassLoader::class);
    }
}
