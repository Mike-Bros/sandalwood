<?php

namespace Database\Seeders;

use App\Models\Wick;
use Illuminate\Database\Seeder;

class WickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wick_list = array(
            array(
                'name' => "EricX Light Organic Hemp",
                'type' => "Hemp & Beeswax",
                'thickness' => 1,
                'length' => 200,
                'price' => 795,
                'order_link' => "https://www.amazon.com/gp/product/B01I2TXJEY/ref=ppx_yo_dt_b_asin_title_o06_s00?ie=UTF8&psc=1"
            ),
            array(
                'name' => "Twisted Bee Organic Hemp",
                'type' => "Hemp & Beeswax",
                'thickness' => 2,
                'length' => 200,
                'price' => 2099,
                'order_link' => "https://www.amazon.com/gp/product/B01DPNGXDQ/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1"
            )
        );

        $this->insert($wick_list);
    }

    private function insert(array $items)
    {
        foreach ($items as $item) {
            Wick::updateOrCreate([
                'name' => $item['name'],
                'type' => $item['type'],
                'thickness' => $item['thickness'],
                'length' => $item['length'],
                'price' => $item['price'],
                'order_link' => $item['order_link']
            ], [
                'name' => $item['name'],
                'type' => $item['type'],
                'thickness' => $item['thickness'],
                'length' => $item['length'],
                'price' => $item['price'],
                'order_link' => $item['order_link']
            ]);
        }
    }
}
