<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69d2ace82da26d5b07476ad7ac4e028f
{
    public static $files = array (
        '4232e5d69cf556e43d02352e6e7a4a86' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69d2ace82da26d5b07476ad7ac4e028f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69d2ace82da26d5b07476ad7ac4e028f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69d2ace82da26d5b07476ad7ac4e028f::$classMap;

        }, null, ClassLoader::class);
    }
}
