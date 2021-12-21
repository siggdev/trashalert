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
        $calendars = [
            [
                'name' => 'Siggenhofen',
            ],
        ];

        foreach($calendars as $calendar) {
            Calendar::updateOrCreate($calendar);
        }
    }
}
