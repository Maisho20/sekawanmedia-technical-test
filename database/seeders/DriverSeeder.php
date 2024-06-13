<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([
            'name' => 'Parno Adi',
        ]);

        Driver::create([
            'name' => 'Purwadi Sutrisno',
        ]);

        Driver::create([
            'name' => 'Insuwandi Panjaitan',
        ]);

        Driver::create([
            'name' => 'Amba Sutrisno',
        ]);

        Driver::create([
            'name' => 'Eko Didik',
        ]);

        Driver::create([
            'name' => 'Ribut Karsito',
        ]);

        Driver::create([
            'name' => 'Sugeng Riyadi',
        ]);

        Driver::create([
            'name' => 'Agus mulyadi',
        ]);

        Driver::create([
            'name' => 'Fuad Alfarizi',
        ]);

        Driver::create([
            'name' => 'Pedro Dmitry',
        ]);

        Driver::create([
            'name' => 'Wawan Kurniawan',
        ]);

        Driver::create([
            'name' => 'Ronny Saputra',
        ]);

        Driver::create([
            'name' => 'Ahmad Faizal',
        ]);

        Driver::create([
            'name' => 'John Doe',
        ]);

        Driver::create([
            'name' => 'Joko Susilo',
        ]);
    }
}
