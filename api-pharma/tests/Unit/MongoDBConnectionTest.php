<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use MongoDB\Client;

class MongoDBConnectionTest extends TestCase
{
    /** @test */
    public function it_can_connect_to_mongodb()
    {
        $client = new Client(env('DB_URI'));

        $databases = $client->listDatabases();

        $this->assertNotEmpty($databases);
    }
}
