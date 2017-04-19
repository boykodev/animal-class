<?php

/**
 * Class Autoloader
 */
class Autoloader
{
    public static function load($class_name) {
        $filename = self::getFilename($class_name);

        if (file_exists($filename)) {
            require_once $filename;
        }

        return false;
    }

    private static function getFilename($class_name) {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR .
            str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    }
}

spl_autoload_register('Autoloader::load');
