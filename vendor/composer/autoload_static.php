<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f7ce217cf7422fcdbf51fa82e28e9ab
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f7ce217cf7422fcdbf51fa82e28e9ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f7ce217cf7422fcdbf51fa82e28e9ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f7ce217cf7422fcdbf51fa82e28e9ab::$classMap;

        }, null, ClassLoader::class);
    }
}
