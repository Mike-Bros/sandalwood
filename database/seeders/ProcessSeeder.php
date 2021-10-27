<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $process_list = array(
            array(
                'name' => "Standard Process 2021",
                'description' => "Melted wax to 170F and added scents. Let cool to 160F then poured into 3 candles. Stirred every 5-8 minutes until hardened.",
                'max_temp' => 170,
                'pour_temp' => 160,
            ),
        );

        $this->insert($process_list);
    }

    private function insert(array $items)
    {
        foreach ($items as $item) {
            Process::updateOrCreate([
                'name' => $item['name'],
                'description' => $item['description'],
                'max_temp' => $item['max_temp'],
                'pour_temp' => $item['pour_temp']
            ], [
                'name' => $item['name'],
                'description' => $item['description'],
                'max_temp' => $item['max_temp'],
                'pour_temp' => $item['pour_temp']
            ]);
        }
    }
}
