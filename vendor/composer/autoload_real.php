<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8e1d36da03da66e4b5c8d23b9e4e4ffc
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8e1d36da03da66e4b5c8d23b9e4e4ffc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8e1d36da03da66e4b5c8d23b9e4e4ffc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8e1d36da03da66e4b5c8d23b9e4e4ffc::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit8e1d36da03da66e4b5c8d23b9e4e4ffc::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire8e1d36da03da66e4b5c8d23b9e4e4ffc($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire8e1d36da03da66e4b5c8d23b9e4e4ffc($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
