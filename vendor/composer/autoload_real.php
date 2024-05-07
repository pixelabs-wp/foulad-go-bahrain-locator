<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3c08c6e6944aec7062583eddb7efbd8e
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

        spl_autoload_register(array('ComposerAutoloaderInit3c08c6e6944aec7062583eddb7efbd8e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3c08c6e6944aec7062583eddb7efbd8e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3c08c6e6944aec7062583eddb7efbd8e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
