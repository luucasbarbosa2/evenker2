<?php

namespace App\Controller;

//use RestApi\Controller\ApiController;
use GraphAware\Neo4j\Client\ClientBuilder;

/**
 * Foo Controller
 */
class FooController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * bar method
     *
     */
    public function bar() {
        $this->viewBuilder()->setLayout(false);
        $client = ClientBuilder::create()
                ->addConnection('default', 'http://neo4j:123456@localhost:7474') // Example for HTTP connection configuration (port is optional)
                ->build();
        
        var_dump($client);
    }

}
