<?php

namespace Database\Seeders;

use App\Models\Clients;
use App\Models\Invoices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $clients = Clients::factory(5)->create();
        $invoice = Invoices::factory(5)->create(['client_id' => 1]);
    }
}
