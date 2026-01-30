<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all users and products
        $users = User::all();
        $products = Product::all();
        
        // If we don't have enough products, skip seeding orders
        if ($products->count() < 1) {
            echo "No products found. Skipping order seeding.\n";
            return;
        }
        
        // Create 5 sample orders
        for ($i = 0; $i < min(5, $users->count()); $i++) {
            // Select a random user (not the admin)
            $nonAdminUsers = $users->where('email', '!=', 'aridhi123@gmail.com');
            if ($nonAdminUsers->count() < 1) {
                echo "No non-admin users found. Skipping order seeding.\n";
                return;
            }
            $user = $nonAdminUsers->random();
            
            // Create order
            $order = Order::create([
                'user_id' => $user->id,
                'total_amount' => 0, // We'll update this after adding items
                'shipping_address' => '123 Sample Street, Sample City, 12345, Sample Country',
                'payment_method' => 'credit_card',
                'status' => 'pending'
            ]);
            
            // Add random order items
            $totalAmount = 0;
            $itemCount = rand(1, min(3, $products->count()));
            
            for ($j = 0; $j < $itemCount; $j++) {
                $product = $products->random();
                $quantity = rand(1, 3);
                $price = $product->price;
                $itemTotal = $price * $quantity;
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $price
                ]);
                
                $totalAmount += $itemTotal;
            }
            
            // Update the order with the correct total amount
            $order->update(['total_amount' => $totalAmount]);
        }
    }
}