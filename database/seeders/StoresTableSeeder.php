<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        $stores = [
            [
                'name' => '統一超商',
                'web' => 'https://www.7-11.com.tw/'
            ],
            [
                'name' => '全家',
                'web' => 'https://www.family.com.tw/'
            ],
            [
                'name' => '萊爾富',
                'web' => 'https://www.hilife.com.tw/'
            ],
            [
                'name' => 'OK超商',
                'web' => 'https://www.okmart.com.tw/'
            ]
        ];

        foreach ($stores as $store) {
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('stores')->insert([
                'name' => $store['name'],
                'web' => $store['web'],
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}

