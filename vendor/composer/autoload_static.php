<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8c742e8c27ad0c8755f2eccc0ffb8f0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8c742e8c27ad0c8755f2eccc0ffb8f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8c742e8c27ad0c8755f2eccc0ffb8f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
