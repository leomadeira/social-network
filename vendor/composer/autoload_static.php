<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1991e0f999d9b872f419983a1f04318a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1991e0f999d9b872f419983a1f04318a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1991e0f999d9b872f419983a1f04318a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1991e0f999d9b872f419983a1f04318a::$classMap;

        }, null, ClassLoader::class);
    }
}
