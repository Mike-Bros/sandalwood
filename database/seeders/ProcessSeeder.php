<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
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
                'name' => "Standard Process 2021",
                'description' => "Melted wax to 170F and added scents. Let cool to 160F then poured into 3 candles. Stirred every 5-8 minutes until hardened.",
                'max_temp' => 170,
                'pour_temp' => 160,
                ),
        );

        $this->insert($wax_list);
    }

    private function insert(Array $items){
        foreach ($items as $item){
            DB::table('process')->insert([
                'name' => $item['name'],
                'description' => $item['description'],
                'max_temp' => $item['max_temp'],
                'pour_temp' => $item['pour_temp']
            ]);
        }
    }
}
