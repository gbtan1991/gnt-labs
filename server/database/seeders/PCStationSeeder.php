<?php

namespace Database\Seeders;

use App\Models\PCStation;
use Illuminate\Database\Seeder;

class PCStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For now we will use 'name' and 'is_online' fields. The rest can be filled in later.
        foreach (range(1, 6) as $index) {
            $name = "PC-" . str_pad($index, 2, '0', STR_PAD_LEFT);

            PCStation::updateOrCreate(
                ['name' => $name],
                ['is_online' => false]
            );
        }
    }
}
