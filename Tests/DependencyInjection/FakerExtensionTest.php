<?php

namespace EmanueleMinotto\FakerBundle\Tests\DependencyInjection;

use EmanueleMinotto\FakerBundle\Tests\AppKernel;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \EmanueleMinotto\FakerBundle\DependencyInjection\FakerExtensionTest
 */
class FakerExtensionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Symfony\Component\HttpKernel\Kernel
     */
    private $kernel;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->kernel = new AppKernel('FakerExtensionTest', true);
        $this->kernel->boot();
    }

    /**
     * @covers ::load
     */
    public function testService()
    {
        $container = $this->kernel->getContainer();

        $this->assertTrue($container->has('faker'));
        $this->assertInstanceOf('Faker\\Generator', $container->get('faker'));
    }

    /**
     * @covers ::load
     */
    public function testParameter()
    {
        $container = $this->kernel->getContainer();

        $this->assertTrue($container->hasParameter('faker.locale'));
        $this->assertTrue($container->hasParameter('faker.seed'));
    }
}
