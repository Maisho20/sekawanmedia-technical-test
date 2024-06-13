<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'vehicle_name' => 'Belaz 75710 Dump Truk',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Komatsu 980E-5SE',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Komatsu 980E-5',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Caterpillar 797F Dump Truk',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Terex MT 6300AC',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Liebherr T 284',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Belaz 75601',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Komatsu PC210-8',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Komatsu PC300-8',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Toyota Innova',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Liebherr T 282B',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Komatsu 980E-4',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Toyota Fortuner',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Toyota Hiace',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Hino Dutro',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Kawasaki KLX 150',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Honda CRF 150',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Honda CRF 250',
        ]);

        Vehicle::create([
            'vehicle_name' => 'Kawasaki KLX 250',
        ]);
    }
}
