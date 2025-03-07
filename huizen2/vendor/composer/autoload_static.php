<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1371bae06d1d592538dc0769981ed79
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1371bae06d1d592538dc0769981ed79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1371bae06d1d592538dc0769981ed79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1371bae06d1d592538dc0769981ed79::$classMap;

        }, null, ClassLoader::class);
    }
}
