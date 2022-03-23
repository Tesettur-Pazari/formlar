<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdaf72c2a729be22bd534404d8e502fee
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tekin\\' => 6,
        ),
        'A' => 
        array (
            'Asdfdotdev\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tekin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/libraries',
        ),
        'Asdfdotdev\\' => 
        array (
            0 => __DIR__ . '/..' . '/asdfdotdev/session/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdaf72c2a729be22bd534404d8e502fee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdaf72c2a729be22bd534404d8e502fee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdaf72c2a729be22bd534404d8e502fee::$classMap;

        }, null, ClassLoader::class);
    }
}
