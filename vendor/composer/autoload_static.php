<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4aaeb6e46a5582a4f6eea2df4c352ed3
{
    public static $files = array (
        'c04f0be2ab860da93abc37350ceb7a11' => __DIR__ . '/../..' . '/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iwindy\\ApiCaptcha\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iwindy\\ApiCaptcha\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4aaeb6e46a5582a4f6eea2df4c352ed3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4aaeb6e46a5582a4f6eea2df4c352ed3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4aaeb6e46a5582a4f6eea2df4c352ed3::$classMap;

        }, null, ClassLoader::class);
    }
}