<?php

use CodeProject\Client;
use Illuminate\Database\Seeder;

class ClientTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();
        factory(Client::class, 10)->create();
    }
}
