<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77bb97c842548c661783f10f38b9e192
{
    public static $files = array (
        'd84340d7aab9fda3f6d3b72a31c17a54' => __DIR__ . '/../..' . '/dirs.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'D' => 
        array (
            'Db\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Db\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit77bb97c842548c661783f10f38b9e192::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77bb97c842548c661783f10f38b9e192::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77bb97c842548c661783f10f38b9e192::$classMap;

        }, null, ClassLoader::class);
    }
}
