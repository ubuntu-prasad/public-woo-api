<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2acb6f063479b343a17674b35c33bd58
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2acb6f063479b343a17674b35c33bd58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2acb6f063479b343a17674b35c33bd58::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}