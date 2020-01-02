<?php

namespace ShipstationBundle\DependencyInjection;

use ShipstationBundle\Service\ShipstationClient;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

class ShipstationExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');


        $definition = $container->getDefinition(ShipstationClient::class);
        $definition->replaceArgument(0, $config['api_key']);
        $definition->replaceArgument(1, $config['api_secret']);
    }
}
