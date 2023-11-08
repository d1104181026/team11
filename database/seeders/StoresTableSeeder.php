<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomName() {
        $name = [
            '阿薩姆奶茶',
            '立頓原味奶茶',
            '立頓巧克力奶茶',
            '午後時光奶茶',
            '午後時光草莓奶茶',
            '麥香紅茶',
            '麥香奶茶',
            '麥香綠茶',
            '生活泡沫綠茶',
            '波蜜果菜汁',
            '光泉巧克力牛奶',
            '咖啡廣場',
            '可爾必思',
            '阿薩姆紅茶',
            '特上紅茶',
            '可口可樂',
            '可口可樂ZERO',
            '雪碧',
            '蠻牛',
            '偉恩咖啡'
        ];
        return $name[rand(0, count($name)-1)];
    }
    public function generateRandomWeb() {
        $web = ['https://www.7-11.com.tw/',
                'https://www.family.com.tw/',
                'https://www.hilife.com.tw/'
        ];
        return $web[rand(0, count($web)-1)];
    }
    public function run()
    {
        for ($i=0; $i<20; $i++){
            $name = $this->generateRandomName();
            $web = $this->generateRandomWeb();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));

            DB::table('stores')->insert([
                'name' => $name,
                'web' => $web,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);

        }
    }
}
