<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mark;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::create(['name' => 'N/A']);
        Mark::create(['name' => 'MONTANA']);
        Mark::create(['name' => 'MANPICA']);
        Mark::create(['name' => 'PROTEX']);
        Mark::create(['name' => 'REXONA']);
        Mark::create(['name' => 'EVERY NIGHT']);
        Mark::create(['name' => 'PANTENE']);
        Mark::create(['name' => 'LAVANSAN']);
        Mark::create(['name' => 'LAS LLAVES']);

    }

}
