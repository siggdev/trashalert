<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('app.debug') == false) {
            Calendar::factory()->count(10)->create();
        }
    }
}
