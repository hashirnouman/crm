<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = ['Lahore', 'Islamabad', 'Rawalpindi', 'Gujranwala','Sialkot', 'Faislabad','Multan', 'Sheikhupura', 'Karachi', 'Peshawar','Bahawalpur',
        'DG Khan','Heydrabad','Quetta'];
        for($i=0; $i<100; $i++){
        DB::table('inquiries')->insert([
            'name' => Str::random(6)." ".Str::random(7),
            'email' => Str::random(10).'@gmail.com',
            'number' => "+92".(rand(10000000, 99999999 ) ),
            'city' => $city[rand(0,13)],
            'course_id' => rand(1,6),
            'interest' => rand(0,1),
            'status' => rand(0,1),
            'follow_up' => '2021-0'.(rand(3,4)).'-'.(rand(1,30)),
            'added_by'=>1
        ]);
        }
    }
}
