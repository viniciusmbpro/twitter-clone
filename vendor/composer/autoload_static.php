<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccd6b4e0e8f769cbe101af9ce100f636
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccd6b4e0e8f769cbe101af9ce100f636::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccd6b4e0e8f769cbe101af9ce100f636::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccd6b4e0e8f769cbe101af9ce100f636::$classMap;

        }, null, ClassLoader::class);
    }
}
