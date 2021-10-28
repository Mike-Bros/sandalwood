<?php

namespace Database\Seeders;

use App\Models\Scent;
use Illuminate\Database\Seeder;

class ScentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scent_list = array(
            array(
                'name' => "Eucalyptus Essential Oil",
                'company' => "Vitamin Shoppe",
                'amount' => 4,
                'price' => 999,
                'order_link' => "https://www.vitaminshoppe.com/p/eucalyptus-essential-oil-4-fl-oz-oil/vs-3935",
            ),
            array(
                'name' => "Lavender Essential Oil",
                'company' => "Vitamin Shoppe",
                'amount' => 4,
                'price' => 3299,
                'order_link' => "https://www.vitaminshoppe.com/p/lavender-essential-oil-4-fl-oz-oil/vs-3943",
            ),
            array(
                'name' => "Peppermint Essential Oil",
                'company' => "Vitamin Shoppe",
                'amount' => 4,
                'price' => 2299,
                'order_link' => "https://www.vitaminshoppe.com/p/peppermint-essential-oil-4-oz/vs-3952",
            ),
            array(
                'name' => "Vanilla Essential Oil",
                'company' => "Grandma's Home",
                'amount' => 2,
                'price' => 1199,
                'order_link' => "https://www.amazon.com/gp/product/B076QSG42H/ref=ox_sc_act_title_1?smid=A2XOHLZV608N0Q&psc=1",
            ),
            array(
                'name' => "Very Vanilla",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 868,
                'order_link' => "https://www.candlescience.com/fragrance/very-vanilla-fragrance-oil/",
            ),
            array(
                'name' => "Caribbean Teakwood",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/caribbean-teakwood-fragrance-oil/",
            ),
            array(
                'name' => "Apples and Maple Bourbon",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/apples-maple-bourbon-fragrance-oil/",
            ),
            array(
                'name' => "Rose Petals",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 868,
                'order_link' => "https://www.candlescience.com/fragrance/rose-petals-fragrance-oil/",
            ),
            array(
                'name' => "Cinnamon Candies",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 811,
                'order_link' => "https://www.candlescience.com/fragrance/cinnamon-candies-fragrance-oil/",
            ),
            array(
                'name' => "High Tide",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/high-tide-fragrance-oil/",
            ),
            array(
                'name' => "Spiced Honey and Tonka",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/spiced-honey-and-tonka-fragrance-oil/",
            ),
            array(
                'name' => "Citrus Agave",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/citrus-agave-fragrance-oil/",
            ),
            array(
                'name' => "Ocean Breeze",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 827,
                'order_link' => "https://www.candlescience.com/fragrance/ocean-breeze-fragrance-oil/",
            ),
            array(
                'name' => "Lavender Driftwood",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 868,
                'order_link' => "https://www.candlescience.com/fragrance/lavender-driftwood-fragrance-oil/",
            ),
            array(
                'name' => "Sea Mist",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/sea-mist-fragrance-oil/",
            ),
            array(
                'name' => "Library",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/library-fragrance-oil/",
            ),
            array(
                'name' => "Sandalwood",
                'company' => "Candle Science",
                'amount' => 4,
                'price' => 892,
                'order_link' => "https://www.candlescience.com/fragrance/sandalwood-fragrance-oil/",
            )
        );

        $this->insert($scent_list);
    }

    private function insert(array $items)
    {
        foreach ($items as $scent) {
            Scent::updateOrCreate([
                'name' => $scent['name'],
                'company' => $scent['company'],
                'amount' => $scent['amount'],
                'price' => $scent['price'],
                'order_link' => $scent['order_link']
            ], [
                'name' => $scent['name'],
                'company' => $scent['company'],
                'amount' => $scent['amount'],
                'price' => $scent['price'],
                'order_link' => $scent['order_link']
            ]);
        }
    }
}
