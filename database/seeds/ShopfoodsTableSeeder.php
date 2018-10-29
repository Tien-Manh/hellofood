<?php

use Illuminate\Database\Seeder;

class ShopfoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopfoods = [
        	[
        		'shopfood_name' => 'shop1',
        		'shopfood_slug' => 'shop-1',
        		'shopfood_active' => 0,
                'shopfood_address' => ''
        	],
        	[
        		'shopfood_name' => 'shop2',
        		'shopfood_slug' => 'shop-2',
        		'shopfood_active' => 0,
                'shopfood_address' => ''
        	],
        	[
        		'shopfood_name' => 'shop3',
        		'shopfood_slug' => 'shop-3',
        		'shopfood_active' => 1,
                'shopfood_address' => ''
        	],
            [
            'shopfood_name' => 'shop4',
            'shopfood_slug' => 'shop-4',
            'shopfood_active' => 0,
            'shopfood_address' => ''
        ],
        [
            'shopfood_name' => 'shop5',
            'shopfood_slug' => 'shop-5',
            'shopfood_active' => 0,
            'shopfood_address' => ''
        ],
        [
            'shopfood_name' => 'shop6',
            'shopfood_slug' => 'shop-6',
            'shopfood_active' => 0,
            'shopfood_address' => ''
        ],
        [
            'shopfood_name' => 'shop7',
            'shopfood_slug' => 'shop-7',
            'shopfood_active' => 0,
            'shopfood_address' => ''
        ],
        ];
        DB::table('shopfoods')->insert($shopfoods);
    }
}
