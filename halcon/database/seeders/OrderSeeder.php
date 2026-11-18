<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::updateOrCreate(
            ['invoice_number' => 'INV-1001'],
            [
                'customer_number' => 'C001',
                'product_name' => 'Laptop',
                'status' => 'Processing',
                'order_date' => '2026-11-17',
            ]
        );

        Order::updateOrCreate(
            ['invoice_number' => 'INV-1002'],
            [
                'customer_number' => 'C001',
                'product_name' => 'Keyboard',
                'status' => 'Shipped',
                'order_date' => '2026-11-16',
            ]
        );

        Order::updateOrCreate(
            ['invoice_number' => 'INV-1003'],
            [
                'customer_number' => 'C002',
                'product_name' => 'Monitor',
                'status' => 'Delivered',
                'order_date' => '2026-11-15',
            ]
        );

        Order::updateOrCreate(
            ['invoice_number' => 'INV-1004'],
            [
                'customer_number' => 'C003',
                'product_name' => 'Mouse',
                'status' => 'Pending',
                'order_date' => '2026-11-14',
            ]
        );
    }
}
