<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu([
        	'title' => 'Manti',
        	'body' => 'Manti, also manty, mantu or manta, is a type of dumpling popular in most Turkic cuisines, as well as in the cuisines of the South Caucasus, Central Asia, Afghanistan, Balkans, Bukharan Jews, and Chinese Muslims',
        	'cost' => '14',
        	'cover_img' => 'Без названия (1)_1588525841.jpg'
     
        ]);

        $menu->save();
        $menu = new Menu([
        	'title' => 'Palov',
        	'body' => 'Pilaf, or pilau is a rice dish, or in some regions, a wheat dish, whose recipe usually involves cooking in stock or broth, adding spices, and other ingredients such as vegetables or meat, and employing some technique for achieving cooked grains that do not adhere.',
        	'cost' => '15.6',
        	'cover_img' => 'Без названия_1588531981.jpg'
     
        ]);
        
        $menu->save();
    }
}
