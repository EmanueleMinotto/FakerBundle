<?php

namespace EmanueleMinotto\FakerBundle\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \EmanueleMinotto\FakerBundle\FakerBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $config = __DIR__.'/Resources/config/config_'.$this->getEnvironment().'.yml';

        if (file_exists($config)) {
            $loader->load($config);

            return;
        }

        $loader->load(__DIR__.'/Resources/config/config.yml');
    }
}
