<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb42cfa24f57ca8b6e92b28f61afe53ef
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

        spl_autoload_register(array('ComposerAutoloaderInitb42cfa24f57ca8b6e92b28f61afe53ef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb42cfa24f57ca8b6e92b28f61afe53ef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb42cfa24f57ca8b6e92b28f61afe53ef::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $filesToLoad = \Composer\Autoload\ComposerStaticInitb42cfa24f57ca8b6e92b28f61afe53ef::$files;
        $requireFile = \Closure::bind(static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

                require $file;
            }
        }, null, null);
        foreach ($filesToLoad as $fileIdentifier => $file) {
            $requireFile($fileIdentifier, $file);
        }

        return $loader;
    }
}
