<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83dce871e95e70e988640f9fd95e6fc1
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app/controllers',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit83dce871e95e70e988640f9fd95e6fc1::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
