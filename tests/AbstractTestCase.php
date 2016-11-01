<?php

namespace CodePress\CodeDatabase\Tests;

use Orchestra\Testbench\TestCase;

/**
 * Class AbstractTestCase
 * @package CodePress\CodeDatabase\Tests
 */
abstract class AbstractTestCase extends TestCase
{
    /**
     * Execute migrations files from TestCase
     */
    public function migrate()
    {
        $this->artisan('migrate', [
            '--realpath' => realpath(__DIR__ . '/resources/migrations')
        ]);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    /*public function getPackageProviders($app)
    {
        return [];
    }*/

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

}