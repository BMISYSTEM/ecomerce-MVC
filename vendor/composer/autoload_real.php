<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbada515daad2f5893f7e14c4bd138350
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

        spl_autoload_register(array('ComposerAutoloaderInitbada515daad2f5893f7e14c4bd138350', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbada515daad2f5893f7e14c4bd138350', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbada515daad2f5893f7e14c4bd138350::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
