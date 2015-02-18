<?php

namespace EmanueleMinotto\FakerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class validates and merges configuration from your app files.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder.
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('faker');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->booleanNode('twig')
                    ->defaultFalse()
                ->end()
                ->scalarNode('locale')
                    ->defaultValue('en_US')
                ->end()
                ->integerNode('seed')
                    ->defaultNull()
                    ->min(0)
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
