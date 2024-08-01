<?php

namespace Database\Seeders;

use App\Models\Expenses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpensesSeeder extends AbstractSeeder
{
    protected $modelClass = Expenses::class;

    public function data(): array
    {
        return [
            [
                'cost_of_water_per_month' => 34000,
                'electricity_costs_per_month' => 123000
            ],
            [
                'cost_of_water_per_month' => 27000,
                'electricity_costs_per_month' => 98900
            ],
            [
                'cost_of_water_per_month' => 32000,
                'electricity_costs_per_month' => 144000
            ],
        ];
    }
}
