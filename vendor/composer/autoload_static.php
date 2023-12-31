<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f6d0eec6cbc2ed94087a950fd511a54
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f6d0eec6cbc2ed94087a950fd511a54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f6d0eec6cbc2ed94087a950fd511a54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f6d0eec6cbc2ed94087a950fd511a54::$classMap;

        }, null, ClassLoader::class);
    }
}
