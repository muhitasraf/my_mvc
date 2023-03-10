<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit627ab0589795b0a7dd06a6cd3369c484
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit627ab0589795b0a7dd06a6cd3369c484', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit627ab0589795b0a7dd06a6cd3369c484', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit627ab0589795b0a7dd06a6cd3369c484::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
