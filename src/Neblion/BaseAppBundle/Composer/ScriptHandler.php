<?php

namespace Neblion\BaseAppBundle\Composer;

use Symfony\Component\ClassLoader\ClassCollectionLoader;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\PhpExecutableFinder;

class ScriptHandler
{
    public static function InstallParameters($event)
    {
        $options = self::getOptions($event);
        $appDir = $options['symfony-app-dir'];
        
        print_r($options);

        if (!is_dir($appDir)) {
            echo 'The symfony-app-dir ('.$appDir.') specified in composer.json was not found in '.getcwd().', can not install the requirements file.'.PHP_EOL;

            return;
        }

        copy($appDir.'/config/parameters.yml.dist', $appDir.'/config/parameters.yml');
    }
    
    public static function CopyImgTwitterBootstrapToWebImg($event)
    {
        if (!is_dir('web/img')) {
            mkdir('web/img');
        }
        
        foreach (glob('vendor/twitter/bootstrap/img/*') as $file) {
            if (is_file($file)) {
                copy($file, 'web/img/' . basename($file));
            }
        }
    }
    
    protected static function getOptions($event)
    {
        $options = array_merge(array(
            'symfony-app-dir' => 'app',
            'symfony-web-dir' => 'web',
            'symfony-assets-install' => 'hard'
        ), $event->getComposer()->getPackage()->getExtra());

        $options['symfony-assets-install'] = getenv('SYMFONY_ASSETS_INSTALL') ?: $options['symfony-assets-install'];

        $options['process-timeout'] = $event->getComposer()->getConfig()->get('process-timeout');

        return $options;
    }

    protected static function getPhp()
    {
        $phpFinder = new PhpExecutableFinder;
        if (!$phpPath = $phpFinder->find()) {
            throw new \RuntimeException('The php executable could not be found, add it to your PATH environment variable and try again');
        }

        return $phpPath;
    }
}
