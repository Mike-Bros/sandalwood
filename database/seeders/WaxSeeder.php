<?php

namespace Database\Seeders;

use App\Models\Wax;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaxSeeder extends Seeder
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
                'name' => "American Soy Organics",
                'type' => "soy",
                'weight' => 25,
                'price' => 7400,
                'order_link' => "https://www.amazon.com/gp/product/B07WSFWW8N/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&th=1"
            ),
            array(
                'name' => "Stakich",
                'type' => "bees",
                'weight' => 1,
                'price' => 1295,
                'order_link' => "https://www.amazon.com/Stakich-Yellow-Beeswax-Pellets-Cosmetic/dp/B001LR2CHK/ref=sr_1_16?crid=1VR78GDSBVZS3&dchild=1&keywords=beeswax%2Bcandle%2Bpellets&qid=1635212718&qsid=139-0883866-7933769&sprefix=bees%2Bwax%2Bcandle%2Bpellets%2Caps%2C117&sr=8-16&sres=B07WLQGQHG%2CB07NMNDT1W%2CB01LZA9P8L%2CB07P8WFDG3%2CB07WD4YDY6%2CB07V3GTH9H%2CB00C34V0BO%2CB07RHF1XWK%2CB01M1F25QM%2CB07YKFF3Q2%2CB0022X1GME%2CB001LR2CHK%2CB07SNC342F%2CB093KRZRKL%2CB07ZK14MHS%2CB07V3FKWN7%2CB0823P1GJY%2CB00GHOYSDI%2CB08NY6P6YK%2CB0963QDMKG&srpt=CANDLE&th=1"
            )
        );

        $this->insert($wax_list);
    }

    private function insert(array $items)
    {
        foreach ($items as $item) {
            Wax::updateOrCreate([
                'name' => $item['name'],
                'type' => $item['type'],
                'weight' => $item['weight'],
                'price' => $item['price'],
                'order_link' => $item['order_link']
            ], [
                'name' => $item['name'],
                'type' => $item['type'],
                'weight' => $item['weight'],
                'price' => $item['price'],
                'order_link' => $item['order_link']
            ]);
        }
    }
}
