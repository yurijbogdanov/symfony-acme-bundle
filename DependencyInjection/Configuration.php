<?php

namespace Acme\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Acme\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('acme');

        $rootNode
            ->children()
                ->scalarNode('foo')->end()
                ->scalarNode('bar')->end()
            ->end();

        return $treeBuilder;
    }
}
