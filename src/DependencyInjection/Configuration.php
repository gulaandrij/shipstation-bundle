<?php


namespace ShipstationBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('shipstation');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode->children()
            ->scalarNode('api_key')
                ->isRequired()
            ->end()
            ->scalarNode('api_secret')
                ->isRequired()
            ->end()
            ->end();
        return $treeBuilder;
    }
}
