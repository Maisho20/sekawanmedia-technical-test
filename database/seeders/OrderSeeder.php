<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'driver_id' => 1,
            'vehicle_id' => 1,
            'order_date' => '2021-01-01',
            'end_date' => '2021-01-02',
            'status' => 'pending',
        ]);

        Order::create([
            'driver_id' => 2,
            'vehicle_id' => 2,
            'order_date' => '2021-01-02',
            'end_date' => '2021-01-03',
            'status' => 'approved1',
        ]);

        Order::create([
            'driver_id' => 3,
            'vehicle_id' => 3,
            'order_date' => '2021-01-03',
            'end_date' => '2021-01-04',
            'status' => 'approved2',
        ]);

        Order::create([
            'driver_id' => 4,
            'vehicle_id' => 4,
            'order_date' => '2021-01-04',
            'end_date' => '2021-01-05',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 5,
            'vehicle_id' => 4,
            'order_date' => '2021-01-05',
            'end_date' => '2021-01-06',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 4,
            'vehicle_id' => 19,
            'order_date' => '2021-01-06',
            'end_date' => '2021-01-07',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 1,
            'vehicle_id' => 7,
            'order_date' => '2021-01-07',
            'end_date' => '2021-01-08',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 2,
            'vehicle_id' => 18,
            'order_date' => '2021-01-08',
            'end_date' => '2021-01-09',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 14,
            'vehicle_id' => 18,
            'order_date' => '2021-01-09',
            'end_date' => '2021-01-10',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 7,
            'vehicle_id' => 18,
            'order_date' => '2021-01-10',
            'end_date' => '2021-01-11',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 3,
            'vehicle_id' => 8,
            'order_date' => '2021-01-08',
            'end_date' => '2021-01-09',
            'status' => 'done',
        ]);


        Order::create([
            'driver_id' => 3,
            'vehicle_id' => 9,
            'order_date' => '2021-01-09',
            'end_date' => '2021-01-10',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 9,
            'vehicle_id' => 5,
            'order_date' => '2021-01-10',
            'end_date' => '2021-01-11',
            'status' => 'pending',
        ]);

        Order::create([
            'driver_id' => 6,
            'vehicle_id' => 9,
            'order_date' => '2021-01-11',
            'end_date' => '2021-01-12',
            'status' => 'done',
        ]);

        Order::create([
            'driver_id' => 7,
            'vehicle_id' => 6,
            'order_date' => '2021-01-12',
            'end_date' => '2021-01-13',
            'status' => 'rejected',
        ]);

        Order::create([
            'driver_id' => 8,
            'vehicle_id' => 12,
            'order_date' => '2021-01-13',
            'end_date' => '2021-01-14',
            'status' => 'pending',
        ]);

        Order::create([
            'driver_id' => 4,
            'vehicle_id' => 19,
            'order_date' => '2021-01-14',
            'end_date' => '2021-01-15',
            'status' => 'done',
        ]);
    }
}
