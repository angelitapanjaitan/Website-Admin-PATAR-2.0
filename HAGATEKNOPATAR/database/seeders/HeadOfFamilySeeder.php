<?php

namespace Database\Seeders;

use App\Models\HeadOfFamily;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HeadOfFamilySeeder extends AbstractSeeder
{
    protected $modelClass = HeadOfFamily::class;

    public function data(): array
    {
        return [
            [
                'NIK' => 121212121211,
                'expenses_id' => 1,
                'census_data_id' => 1,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Sabar Sianipar',
                'lass_education' => 'Tamat SMP/SLTP sederajat',
                'family_card_id' => 131312421211,
                'type_of_work' => 'Petani',
                'etnic' => 'Batak Toba',
                'status_of_residence' => 'Milik sendiri',
                'age' => '50 tahun',
                'latrines_ownership' => 'Keramik',
                'widest_floor_type' => 'Punya',
                'citizenship' => 'WNI',
                'gender' => 'Laki-laki',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '30/03/1970 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Kepala Keluarga',
                'marital_status' => 'Kawin'
            ],
            [
                'NIK' => 110212121211,
                'expenses_id' => 2,
                'census_data_id' => 2,
                'village' => 'Hutatoruan I',
                'address' => 'Hutatoruan I',
                'full_name' => 'Amir Nababan',
                'lass_education' => 'Tamat SMA/SLTA sederajat',
                'family_card_id' => 312165121211,
                'type_of_work' => 'Wirausaha',
                'etnic' => 'Batak Toba',
                'status_of_residence' => 'Milik sendiri',
                'age' => '43 tahun',
                'latrines_ownership' => 'Lantai semen',
                'widest_floor_type' => 'Punya',
                'citizenship' => 'WNI',
                'gender' => 'Laki-laki',
                'religion' => 'Islam',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '27/03/1980 00:00:00'),
                'place_of_birth' => 'Balige',
                'relationship_status_in_the_family' => 'Kepala Keluarga',
                'marital_status' => 'Kawin'
            ],
            [
                'NIK' => 121212030303,
                'expenses_id' => 3,
                'census_data_id' => 3,
                'village' => 'Sidagal',
                'address' => 'Sidagal',
                'full_name' => 'Sahala Sihombing',
                'lass_education' => 'Diploma IV/Sarjana',
                'family_card_id' => 211234212121,
                'type_of_work' => 'Petani',
                'etnic' => 'Batak Toba',
                'status_of_residence' => 'Milik sendiri',
                'age' => '53 tahun',
                'latrines_ownership' => 'Keramik',
                'widest_floor_type' => 'Punya',
                'citizenship' => 'WNI',
                'gender' => 'Laki-laki',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '01/04/1970 00:00:00'),
                'place_of_birth' => 'Sidagal',
                'relationship_status_in_the_family' => 'Kepala Keluarga',
                'marital_status' => 'Cerai Mati'
            ],
        ];
    }
}