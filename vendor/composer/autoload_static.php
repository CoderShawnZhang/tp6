<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3466be9791e5021ccff30def60ddb4e9
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/think',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3466be9791e5021ccff30def60ddb4e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3466be9791e5021ccff30def60ddb4e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
