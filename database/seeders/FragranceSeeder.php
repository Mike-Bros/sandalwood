<?php

namespace Database\Seeders;

use App\Models\Fragrance;
use App\Models\Scent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FragranceSeeder extends Seeder
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
        //scent amount is the calculated percentage to that #_candles * (wax_per_candle * amount) = scent_needed_oz
        $comb_list = array(
            // Eucalyptus & Lavender
            array(
                'scent_id_1' => 1,
                'amount_1' => 1/3/5.1,
                'scent_id_2' => 2,
                'amount_2' => .4/3/5.1,
            ),
            // Eucalyptus & Peppermint
            array(
                'scent_id_1' => 1,
                'amount_1' => .6/3/5.1,
                'scent_id_2' => 3,
                'amount_2' => .5/3/5.1,
            )
        );
        $this->insert($comb_list);
        $this->createSingles();
//        foreach (Scent::all()->where('company','Candle Science') as $scent){
//            $combination = new Combination();
//            $combination->scent_id_1 = $scent->scent_id;
//            $combination->amount_1 = 1;
//            $combination->save();
//        }
    }

    private function insert(array $items)
    {
        foreach ($items as $item) {
            Fragrance::updateOrCreate([
                'scent_id_1' => $item['scent_id_1'],
                'scent_id_2' => (array_key_exists('scent_id_2', $item) ? $item['scent_id_2'] : null),
                'scent_id_3' => (array_key_exists('scent_id_3', $item) ? $item['scent_id_3'] : null),
                'scent_id_4' => (array_key_exists('scent_id_4', $item) ? $item['scent_id_4'] : null),
            ], [
                'scent_id_1' => $item['scent_id_1'],
                'amount_1' => $item['amount_1'],
                'scent_id_2' => (array_key_exists('scent_id_2', $item) ? $item['scent_id_2'] : null),
                'amount_2' => ($item['amount_2'] ?? null),
                'scent_id_3' => (array_key_exists('scent_id_3', $item) ? $item['scent_id_3'] : null),
                'amount_3' => ($item['amount_3'] ?? null),
                'scent_id_4' => (array_key_exists('scent_id_4', $item) ? $item['scent_id_4'] : null),
                'amount_4' => ($item['amount_4'] ?? null),
            ]);
        }
    }

    private function createSingles()
    {
        foreach (Scent::all() as $item) {
            Fragrance::updateOrCreate([
                'scent_id_1' => $item->id,
                'scent_id_2' => null
            ], [
                'scent_id_1' => $item->id,
                'amount_1' => 1/3/5.1
            ]);
        }
    }

}
