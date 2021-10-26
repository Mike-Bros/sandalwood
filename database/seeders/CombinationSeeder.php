<?php

namespace Database\Seeders;

use App\Models\Combination;
use App\Models\Scent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CombinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // New scent model:
        /*array(
            'scent_id_1' => ,
                'amount_1' => ,
                'scent_id_2' => ,
                'amount_2' => ,
                'scent_id_3' => ,
                'amount_3' => ,
                'scent_id_4' => ,
                'amount_4' => ,
            ),*/

        $comb_list = array(
            // Eucalyptus & Lavender
            array(
                'scent_id_1' => 1,
                'amount_1' => 1,
                'scent_id_2' => 2,
                'amount_2' => .4,
            ),
            // Eucalyptus & Peppermint
            array(
                'scent_id_1' => 1,
                'amount_1' => .6,
                'scent_id_2' => 3,
                'amount_2' => .5,
            ),
        );
        $this->insert($comb_list);

//        foreach (Scent::all()->where('company','Candle Science') as $scent){
//            $combination = new Combination();
//            $combination->scent_id_1 = $scent->scent_id;
//            $combination->amount_1 = 1;
//            $combination->save();
//        }
    }

    private function insert(array $items)
    {
        /*foreach ($items as $item) {
            if (isset($item['scent_id_4'])) {
                $combination = new Combination();
                $combination->scent_id_1 = $item['scent_id_1'];
                $combination->amount_1 = $item['amount_1'];
                $combination->scent_id_2 = $item['scent_id_2'];
                $combination->amount_2 = $item['amount_2'];
                $combination->scent_id_3 = $item['scent_id_3'];
                $combination->amount_3 = $item['amount_3'];
                $combination->scent_id_4 = $item['scent_id_4'];
                $combination->amount_4 = $item['amount_4'];
                $combination->save();

            } elseif (isset($item['scent_id_3'])) {
                $combination = new Combination();
                $combination->scent_id_1 = $item['scent_id_1'];
                $combination->amount_1 = $item['amount_1'];
                $combination->scent_id_2 = $item['scent_id_2'];
                $combination->amount_2 = $item['amount_2'];
                $combination->scent_id_3 = $item['scent_id_3'];
                $combination->amount_3 = $item['amount_3'];
                $combination->save();

            } elseif (isset($item['scent_id_2'])) {
                $combination = new Combination();
                $combination->scent_id_1 = $item['scent_id_1'];
                $combination->amount_1 = $item['amount_1'];
                $combination->scent_id_2 = $item['scent_id_2'];
                $combination->amount_2 = $item['amount_2'];
                $combination->save();

            } else {
                $combination = new Combination();
                $combination->scent_id_1 = $item['scent_id_1'];
                $combination->amount_1 = $item['amount_1'];
                $combination->save();
            }
        }*/
    }
}
