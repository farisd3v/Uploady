<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5945ad3276d7348e01910cc39dd50b7b
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Uploady\\' => 8,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Uploady\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Uploady',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5945ad3276d7348e01910cc39dd50b7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5945ad3276d7348e01910cc39dd50b7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5945ad3276d7348e01910cc39dd50b7b::$classMap;

        }, null, ClassLoader::class);
    }
}
