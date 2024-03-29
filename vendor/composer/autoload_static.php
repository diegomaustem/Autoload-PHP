<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit860b25be9b937aadd70629ecc576659a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'DevelopmentPackages\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'DevelopmentPackages\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit860b25be9b937aadd70629ecc576659a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit860b25be9b937aadd70629ecc576659a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit860b25be9b937aadd70629ecc576659a::$classMap;

        }, null, ClassLoader::class);
    }
}
