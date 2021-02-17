<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49d8cf968bf60ebb5e455da5802b306d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\core\\Application' => __DIR__ . '/../..' . '/core/Application.php',
        'app\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49d8cf968bf60ebb5e455da5802b306d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49d8cf968bf60ebb5e455da5802b306d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49d8cf968bf60ebb5e455da5802b306d::$classMap;

        }, null, ClassLoader::class);
    }
}
