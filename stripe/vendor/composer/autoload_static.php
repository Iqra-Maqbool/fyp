<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf7250387e6e5f6f3706afe2fb3c7e8b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf7250387e6e5f6f3706afe2fb3c7e8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf7250387e6e5f6f3706afe2fb3c7e8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf7250387e6e5f6f3706afe2fb3c7e8b::$classMap;

        }, null, ClassLoader::class);
    }
}
