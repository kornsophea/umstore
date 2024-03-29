<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => 1,
            'date' => Carbon::today(),
            'address' => '5/E-3 New York, USA',
            'status' => 1
        ]);

        Order::create([
            'user_id' => 1,
            'date' => Carbon::today(),
            'address' => '5/E-3 New York, USA',
            'status' => 1
        ]);
    }
}
