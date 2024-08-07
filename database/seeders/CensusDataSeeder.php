<?php

namespace Database\Seeders;

use App\Models\CensusData;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CensusDataSeeder extends AbstractSeeder
{
    protected $modelClass = CensusData::class;

    protected function data(): array
    {
        return [
            [
                'user_id' => 1,
                'census_name' => 'Sensus Sibandang',
                'schedule' => Carbon::parse('2023-06-01'),
            ],
            [
                'user_id' => 2,
                'census_name' => 'Sensus Hutatoruan I',
                'schedule' => Carbon::parse('2023-07-20'),
            ],
            [
                'user_id' => 3,
                'census_name' => 'Sensus Sidagal',
                'schedule' => Carbon::parse('2023-08-30'),
            ],
        ];
    }
}
