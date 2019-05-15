<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45a97f7ccff4dbe5130f00248f8c8084
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebPConvert\\' => 12,
            'WebPConvertCloudService\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebPConvert\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert/src',
        ),
        'WebPConvertCloudService\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert-cloud-service/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45a97f7ccff4dbe5130f00248f8c8084::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45a97f7ccff4dbe5130f00248f8c8084::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}