<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0ca8b7a68849ef1508556491351a339
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symch\\Test\\' => 11,
        ),
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symch\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0ca8b7a68849ef1508556491351a339::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0ca8b7a68849ef1508556491351a339::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0ca8b7a68849ef1508556491351a339::$classMap;

        }, null, ClassLoader::class);
    }
}
