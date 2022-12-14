<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fa08c6e4dd8f15e98c06079b3ddc619
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fa08c6e4dd8f15e98c06079b3ddc619::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fa08c6e4dd8f15e98c06079b3ddc619::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0fa08c6e4dd8f15e98c06079b3ddc619::$classMap;

        }, null, ClassLoader::class);
    }
}
