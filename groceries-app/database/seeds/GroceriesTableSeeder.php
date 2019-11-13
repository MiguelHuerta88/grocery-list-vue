<?php

use Illuminate\Database\Seeder;

class GroceriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groceries')->insert([
            'name' => '1 Gallon Milk',
            'quantity' => 1,
            'notes' => 'make sure its 2%'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Lettuce',
            'quantity' => 1,
            'notes' => 'make sure its Romaine, 3 pack'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Potatoes',
            'quantity' => 1,
            'notes' => '3lb. bag'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Tomatos',
            'quantity' => 5
        ]);
    }
}
