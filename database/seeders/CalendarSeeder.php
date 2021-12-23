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
        if(config('app.debug') == true) {
            Calendar::factory()->count(5)->create();
        }
    }
}
