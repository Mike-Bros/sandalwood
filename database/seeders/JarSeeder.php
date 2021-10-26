<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wax_list = array(
            array(
                'name' => "Folinstall Yogurt Jars",
                'size' => "7oz",
                'quantity' => 20,
                'price' => 2299,
                'order_link' => "https://www.amazon.com/gp/product/B07MFB8Z1S/ref=ppx_yo_dt_b_asin_title_o03_s00?ie=UTF8&psc=1"
            ),
            array(
                'name' => "Syntic Yogurt Jars",
                'size' => "7oz",
                'quantity' => 40,
                'price' => 3495,
                'order_link' => "https://www.amazon.com/Syntic-Yogurt-Pudding-Spices-Mousse/dp/B07VR196PK/ref=sr_1_2?crid=28P0BSZQ10KKA&dchild=1&keywords=%22+Syntic+7oz%22&qid=1635214264&qsid=139-0883866-7933769&sprefix=syntic+7oz+%2Caps%2C133&sr=8-2&sres=B07VR196PK%2CB07HSF2BXB%2CB07MHVX7TK%2CB07SS22SMK%2CB07DGT5ZVX%2CB07VY9MBF1%2CB07VPW91NV%2CB07ZWRQC4H%2CB07FDKY2Z9%2CB07QN3J7P8%2CB08MZVYJS6%2CB01LYEV0DZ%2CB07MFB46MN%2CB079KV35JQ%2CB07B6PS8XV%2CB08FQV45RQ%2CB0772PFC89%2CB07V1CVJ83%2CB01BL9HIJY%2CB08135276G"
            ),
            array(
                'name' => "Home Essentials Shot Glass",
                'size' => "3.25oz",
                'quantity' => 6,
                'price' => 1100,
                'order_link' => "https://www.amazon.com/Home-Essentials-Basic-3-25-Glass/dp/B07V2PTD2H/ref=sr_1_2?dchild=1&keywords=Home+Essentials+shot+glasses&qid=1598888294&sr=8-2"
            ),
        );

        $this->insert($wax_list);
    }

    private function insert(Array $items){
        foreach ($items as $item){
            DB::table('jar')->insert([
                'name' => $item['name'],
                'size' => $item['size'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'order_link' => $item['order_link']
            ]);
        }
    }
}
