<?php

namespace EmanueleMinotto\FakerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Provide the different providers for Faker.
 *
 * @link https://github.com/fzaninotto/Faker#faker-internals-understanding-providers
 */
class ProviderCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('faker')) {
            return;
        }

        $definition = $container->getDefinition('faker');

        foreach ($container->findTaggedServiceIds('faker.provider') as $id => $attributes) {
            $providerDefinition = $container->getDefinition($id);
            $providerDefinition->setArguments(array(
                new Reference('faker'),
            ));

            $definition->addMethodCall('addProvider', array(
                new Reference($id),
            ));
        }
    }
}
