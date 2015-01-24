<?php

namespace EmanueleMinotto\FakerBundle\Tests\DependencyInjection;

use EmanueleMinotto\FakerBundle\DependencyInjection\FakerExtension;
use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @coversDefaultClass \EmanueleMinotto\FakerBundle\DependencyInjection\FakerExtensionTest
 */
class FakerExtensionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $extension = new FakerExtension();

        $this->container->registerExtension($extension);
        $this->container->loadFromExtension($extension->getAlias());
        $this->container->compile();
    }

    /**
     * @covers ::load
     */
    public function testService()
    {
        $this->assertTrue($this->container->has('em.faker'));
        $this->assertInstanceOf('Faker\\Generator', $this->container->get('em.faker'));
    }

    /**
     * @covers ::load
     */
    public function testParameter()
    {
        $this->assertTrue($this->container->hasParameter('em.faker.locale'));
    }
}
