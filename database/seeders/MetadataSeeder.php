<?php

namespace Database\Seeders;

use App\Models\Metadata;
use Illuminate\Database\Seeder;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metadata::factory(20)->create();
    }
}