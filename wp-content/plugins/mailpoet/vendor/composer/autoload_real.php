<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInita1ef0784429b38662eaf3c21e1a62d60
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInita1ef0784429b38662eaf3c21e1a62d60', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInita1ef0784429b38662eaf3c21e1a62d60', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInita1ef0784429b38662eaf3c21e1a62d60::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInita1ef0784429b38662eaf3c21e1a62d60::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequirea1ef0784429b38662eaf3c21e1a62d60($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequirea1ef0784429b38662eaf3c21e1a62d60($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
