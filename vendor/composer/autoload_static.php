<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ca54fd7e761bed7754ba582c9d83e62
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ajaxray\\PHPWatermark\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ajaxray\\PHPWatermark\\' => 
        array (
            0 => __DIR__ . '/..' . '/ajaxray/php-watermark/src/Ajaxray/PHPWatermark',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ca54fd7e761bed7754ba582c9d83e62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ca54fd7e761bed7754ba582c9d83e62::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
