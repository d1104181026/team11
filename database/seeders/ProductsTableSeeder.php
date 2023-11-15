<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
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
    public function generateRandomPrice() {
        $price = ['10', '15', '18', '20', '25', '8', '13', '35', '12'];
        return $price[rand(0, count($price)-1)];
    }
    public function generateRandomDiscount() {
        $discount = ['買一送一', '第二件六折', ' ', '第二件10元'];
        return $discount[rand(0, count($discount)-1)];
    }
    public function generateRandomTid() {
        $tid = ['1', '2', '3','4'];
        return $tid[rand(0, count($tid)-1)];
    }
    public function generateRandomInventory() {
        $inventory = ['20', '40', '50', '55', '60', '75', '85', '90', '95', '100', '150', '200', '250'];
        return $inventory[rand(0, count($inventory)-1)];
    }
    public function run()
    {
        for ($i=0; $i<50; $i++)
        {
            $name = $this->generateRandomName();
            $price = $this->generateRandomPrice();
            $discount = $this->generateRandomDiscount();
            $tid = $this->generateRandomTid();
            $inventory = $this->generateRandomInventory();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            DB::table('products')->insert([
                'name' => $name,
                'price' => $price,
                'discount' => $discount,
                'tid' => $tid,
                'inventory' => $inventory,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime 
            ]);
        }

    }


}

        
