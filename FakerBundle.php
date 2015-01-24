<?php

namespace EmanueleMinotto\FakerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use EmanueleMinotto\FakerBundle\DependencyInjection\Compiler\ProviderCompilerPass;

/**
 * {@inheritdoc}
 */
class FakerBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ProviderCompilerPass());
    }
}
