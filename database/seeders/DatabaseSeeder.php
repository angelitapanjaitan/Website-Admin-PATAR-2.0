<?php

namespace Database\Seeders;

use App\Models\CensusData;
use App\Models\Expenses;
use App\Models\HeadOfFamily;
use App\Models\MemberOfFamily;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CensusDataSeeder::class,
            ExpensesSeeder::class,
            HeadOfFamilySeeder::class,
            MemberOfFamilySeeder::class,
        ]);
    }
}
