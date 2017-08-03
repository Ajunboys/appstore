<?php

namespace OCA\{{ app.namespace }}\Tests\Integration\Controller;

use OCP\AppFramework\App;
use OCP\App\IAppManager;

use PHPUnit_Framework_TestCase;


/**
 * This test shows how to make a small Integration Test. Query your class
 * directly from the container, only pass in mocks if needed and run your tests
 * against the database
 */
class AppTest extends PHPUnit_Framework_TestCase {

    private $container;

    public function setUp() {
        $app = new App('{{ app.id }}');
        $this->container = $app->getContainer();
    }

    public function testAppInstalled() {
        $appManager = $this->container->query(IAppManager::class);
        $this->assertTrue($appManager->isInstalled('{{ app.id }}'));
    }

}
