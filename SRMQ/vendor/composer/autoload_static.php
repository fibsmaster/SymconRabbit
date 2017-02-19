<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6aa34d3d1f3c7ef9db5425f76bc0fa5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6aa34d3d1f3c7ef9db5425f76bc0fa5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6aa34d3d1f3c7ef9db5425f76bc0fa5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
