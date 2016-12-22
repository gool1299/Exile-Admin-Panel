<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d7f3d8d9f8bff4ff374c7338c3d8879
{
    public static $files = array(
        'ce89ade1b84217abfd74bd4c84863dc1' => __DIR__ . '/..' . '/nizarii/arma-rcon-class/arc.php',
    );

    public static $prefixLengthsPsr4 = array(
        'v' =>
            array(
                'voku\\db\\' => 8,
                'voku\\cache\\' => 11,
                'voku\\' => 5,
            ),
        'P' =>
            array(
                'PageCache\\' => 10,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'voku\\db\\' =>
            array(
                0 => __DIR__ . '/..' . '/voku/simple-mysqli/src/voku/db',
            ),
        'voku\\cache\\' =>
            array(
                0 => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache',
            ),
        'voku\\' =>
            array(
                0 => __DIR__ . '/..' . '/voku/portable-utf8/src/voku',
            ),
        'PageCache\\' =>
            array(
                0 => __DIR__ . '/..' . '/mmamedov/page-cache/src',
            ),
    );

    public static $classMap = array(
        'Normalizer' => __DIR__ . '/..' . '/voku/portable-utf8/src/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d7f3d8d9f8bff4ff374c7338c3d8879::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d7f3d8d9f8bff4ff374c7338c3d8879::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d7f3d8d9f8bff4ff374c7338c3d8879::$classMap;

        }, null, ClassLoader::class);
    }
}