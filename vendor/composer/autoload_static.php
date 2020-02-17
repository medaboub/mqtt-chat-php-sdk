<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit950c2bf3f0ceeb39fb3512eb2ac277df
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '154e0d165f5fe76e8e9695179d0a7345' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'telifoun\\mqttchat\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'telifoun\\mqttchat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/telifoun/mqttchat',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Browser' => __DIR__ . '/..' . '/cbschuld/browser.php/lib/Browser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit950c2bf3f0ceeb39fb3512eb2ac277df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit950c2bf3f0ceeb39fb3512eb2ac277df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit950c2bf3f0ceeb39fb3512eb2ac277df::$classMap;

        }, null, ClassLoader::class);
    }
}