<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category(['kind' => 'Salad']);
        $category->save();

        $category = new Category(['kind' => 'Main Dish']);
        $category->save();

        $category = new Category(['kind' => 'Desert']);
        $category->save();

        $category = new Category(['kind' => 'Beverage']);
        $category->save();
    }
}
