<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fbc8e99fa113a746f9602a7c1eb8eb4
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nats\\Nats\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nats\\Nats\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Services',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fbc8e99fa113a746f9602a7c1eb8eb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fbc8e99fa113a746f9602a7c1eb8eb4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fbc8e99fa113a746f9602a7c1eb8eb4::$classMap;

        }, null, ClassLoader::class);
    }
}