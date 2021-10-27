<?php

namespace Database\Seeders;

use App\Models\Candle;
use App\Models\Fragrance;
use App\Models\Jar;
use App\Models\Scent;
use App\Models\Wax;
use App\Models\Wick;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CandleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$wax_list = array(
            array(
                'brand_name' => "",
                'wax_id' => ,
                'wax_amount' => ,
                'jar_id' => ,
                'wick_id' => ,
                'fragrance_id' => ,
            ),
        );
        $this->insert($wax_list);*/

        $this->insertUsualDynamic();
    }

    private function insert(array $items)
    {
        foreach ($items as $item) {
            Candle::updateOrCreate([
                'brand_name' => $item['brand_name'],
                'wax_id' => $item['wax_id'],
                'wax_amount' => $item['wax_amount'],
                'jar_id' => $item['jar_id'],
                'wick_id' => $item['wick_id'],
                'fragrance_id' => $item['fragrance_id'],
            ], [
                'brand_name' => $item['brand_name'],
                'wax_id' => $item['wax_id'],
                'wax_amount' => $item['wax_amount'],
                'jar_id' => $item['jar_id'],
                'wick_id' => $item['wick_id'],
                'fragrance_id' => $item['fragrance_id'],
            ]);
        }
    }

    private function insertUsualDynamic()
    {
        foreach (Fragrance::all() as $fragrance) {
            $brand_name = $this->getDynamicBrandName($fragrance);

            Candle::updateOrCreate([
                'brand_name' => $brand_name,
                'wax_id' => Wax::select('id')->where('name', 'American Soy Organics')->first()->id,
                'wax_amount' => 5.1,
                'jar_id' => Jar::select('id')->where('name', 'Syntic Yogurt Jars')->first()->id,
                'wick_id' => Wick::select('id')->where('name', 'Twisted Bee Organic Hemp')->first()->id,
                'fragrance_id' => $fragrance->id,
            ], [
                'brand_name' => $brand_name,
                'wax_id' => Wax::select('id')->where('name', 'American Soy Organics')->first()->id,
                'wax_amount' => 5.1,
                'jar_id' => Jar::select('id')->where('name', 'Syntic Yogurt Jars')->first()->id,
                'wick_id' => Wick::select('id')->where('name', 'Twisted Bee Organic Hemp')->first()->id,
                'fragrance_id' => $fragrance->id,
            ]);
        }
    }

    private function getDynamicBrandName($fragrance)
    {
        $brand_name = "DEFAULT - ";
        if($fragrance->scent_id_4){
            $brand_name = $brand_name .
                Scent::select('name')->where('id', $fragrance->scent_id_1)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_2)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_3)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_4)->first()->name;
        }elseif ($fragrance->scent_id_3){
            $brand_name = $brand_name .
                Scent::select('name')->where('id', $fragrance->scent_id_1)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_2)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_3)->first()->name;
        }elseif ($fragrance->scent_id_2){
            $brand_name = $brand_name .
                Scent::select('name')->where('id', $fragrance->scent_id_1)->first()->name . '+' .
                Scent::select('name')->where('id', $fragrance->scent_id_2)->first()->name;
        }else {
            $brand_name = $brand_name .
                Scent::select('name')->where('id', $fragrance->scent_id_1)->first()->name;
        }
        return $brand_name;
    }
}
