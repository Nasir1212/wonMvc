<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit850179bd4704529ac05beab401e72aa8
{
    public static $files = array (
        'a5c48b0b1c5e4668b8615caf14e1e5e8' => __DIR__ . '/../..' . '/bootstrap/helpers/app.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bootstrap',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit850179bd4704529ac05beab401e72aa8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit850179bd4704529ac05beab401e72aa8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit850179bd4704529ac05beab401e72aa8::$classMap;

        }, null, ClassLoader::class);
    }
}