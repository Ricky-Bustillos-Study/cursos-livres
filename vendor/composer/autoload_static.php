<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a435a28e0bee87158a9d94270aa6001
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'M' => 
        array (
            'MF\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a435a28e0bee87158a9d94270aa6001::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a435a28e0bee87158a9d94270aa6001::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
