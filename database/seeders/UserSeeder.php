<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends AbstractSeeder
{
    protected $modelClass = User::class;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected function data(): array
    {
        return [
            [
                'email' => 'admin1@gmail.com',
                'username' => 'admin',
                'email_verified_at' => Carbon::createFromFormat('d/m/Y H:i:s', '29/08/2023 00:00:00'),
                'name' => 'Theresia Agatha Silas Siahaan',
                'password' => Hash::make('theresia'),
            ],
            [
                'email' => 'admin2@gmail.com',
                'username' => 'admin2',
                'email_verified_at' => Carbon::createFromFormat('d/m/Y H:i:s', '29/08/2023 00:00:00'),
                'name' => 'Angelita Dumaria Panjaitan',
                'password' => Hash::make('angelita'),
            ],
            [
                'email' => 'admin3@gmail.com',
                'username' => 'admin3',
                'email_verified_at' => Carbon::createFromFormat('d/m/Y H:i:s', '29/08/2023 00:00:00'),
                'name' => 'Via Uni Rosa Sianipar',
                'password' => Hash::make('via'),
            ],
        ];
    }
}
