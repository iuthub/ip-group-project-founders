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
        $category = new Category(['kind' => 'beverage']);
        $category->save();

        $category = new Category(['kind' => 'main']);
        $category->save();

        $category = new Category(['kind' => 'secondary']);
        $category->save();
    }
}
