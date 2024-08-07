<?php

namespace Database\Seeders;

use App\Models\MemberOfFamily;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberOfFamilySeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     */
    protected $modelClass = MemberOfFamily::class;

    public function data(): array
    {
        return [
            [
                'NIK' => 121212131211,
                'head_of_families_id' => 1,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Anita Manalu',
                'lass_education' => 'Tamat SMP/SLTP sederajat',
                'type_of_work' => 'Petani',
                'etnic' => 'Batak Toba',
                'age' => '48 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Perempuan',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '02/02/1975 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Isteri',
                'marital_status' => 'Kawin'
            ],
            [
                'NIK' => 121212131271,
                'head_of_families_id' => 1,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Berton Sianipar',
                'lass_education' => 'Tamat SMA/SLTA sederajat',
                'type_of_work' => 'Wirausaha',
                'etnic' => 'Batak Toba',
                'age' => '25 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Laki-laki',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '02/04/1998 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Anak',
                'marital_status' => 'Belum kawin'
            ],
            [
                'NIK' => 121212139851,
                'head_of_families_id' => 1,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Pinta Uli Sianipar',
                'lass_education' => 'Tamat SMA/SLTA sederajat',
                'type_of_work' => 'Wirausaha',
                'etnic' => 'Batak Toba',
                'age' => '23 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Perempuan',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '27/03/2000 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Anak',
                'marital_status' => 'Belum kawin'
            ],
            [
                'NIK' => 211245632001,
                'head_of_families_id' => 2,
                'village' => 'Hutatoruan I',
                'address' => 'Hutatoruan I',
                'full_name' => 'Aisya laila Tambunan',
                'lass_education' => 'Tamat SMA/SLTA sederajat',
                'type_of_work' => 'Ibu rumah tangga',
                'etnic' => 'Batak Toba',
                'age' => '40 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Perempuan',
                'religion' => 'Islam',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '27/01/1983 00:00:00'),
                'place_of_birth' => 'Hutatoruan I',
                'relationship_status_in_the_family' => 'Isteri',
                'marital_status' => 'Kawin'
            ],
            [
                'NIK' => 312165100302,
                'head_of_families_id' => 2,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Nirmaya Nababan',
                'lass_education' => 'Tamat SMP/SLTP sederajat',
                'type_of_work' => 'Pelajar/Mahasiswa',
                'etnic' => 'Batak Toba',
                'age' => '17 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Perempuan',
                'religion' => 'Islam',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '13/03/2006 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Anak',
                'marital_status' => 'Belum kawin'
            ],
            [
                'NIK' => 312165120101,
                'head_of_families_id' => 2,
                'village' => 'Sibandang',
                'address' => 'Sibandang',
                'full_name' => 'Nayla Nababan',
                'lass_education' => 'Tamat SMP/SLTP sederajat',
                'type_of_work' => 'Pelajar/Mahasiswa',
                'etnic' => 'Batak Toba',
                'age' => '15 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Perempuan',
                'religion' => 'Islam',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '31/05/2009 00:00:00'),
                'place_of_birth' => 'Sibandang',
                'relationship_status_in_the_family' => 'Anak',
                'marital_status' => 'Belum kawin'
            ],
            [
                'NIK' => 121212047002,
                'head_of_families_id' => 3,
                'village' => 'Sidagal',
                'address' => 'Sidagal',
                'full_name' => 'Darla Sihombing',
                'lass_education' => 'Tamat SMA/SLTA sederajat',
                'type_of_work' => 'Petani',
                'etnic' => 'Batak Toba',
                'age' => '25 tahun',
                'citizenship' => 'WNI',
                'gender' => 'Laki-laki',
                'religion' => 'Protestan',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y H:i:s', '14/11/1998 00:00:00'),
                'place_of_birth' => 'Sidagal',
                'relationship_status_in_the_family' => 'Anak',
                'marital_status' => 'Belum kawin'
            ],
        ];
    }
}