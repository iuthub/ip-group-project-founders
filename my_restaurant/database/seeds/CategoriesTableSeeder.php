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
        $category = new Category(['kind' => 'Salads']);
        $category->save();

        $category = new Category(['kind' => 'Main Dishes']);
        $category->save();

        $category = new Category(['kind' => 'Deserts']);
        $category->save();

        $category = new Category(['kind' => 'Beverages']);
        $category->save();
    }
}
