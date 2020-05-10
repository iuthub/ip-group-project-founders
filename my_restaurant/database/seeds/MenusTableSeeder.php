<?php

use Illuminate\Database\Seeder;
use App\Menu;
use App\Category;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *olive oil/garam masala/chickpeas/grain pouch/frozen peas/lemons/parsley/mint/radishes
     * @return void
     */
    public function run()
    {
        $menu = new Menu([
        	'title' => 'Spring tabbouleh',
        	'body' => 'A simple, budget, spring salad that can add a healthy dose of vegetables to your midweek meal.',
        	'cost' => '7.99',
        	'cover_img' => 'spring-tabbouleh.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();

        $menu = new Menu([
            'title' => 'Courgetti',
            'body' => 'Dress your courgetti with fresh, zesty spring flavours. Use the best quality ricotta you can find in this simple, vibrant side dish',
            'cost' => '6.99',
            'cover_img' => 'courgetti-with-lemon-ricotta-and-mint.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();


        $menu = new Menu([
            'title' => 'Egg Niçoise',
            'body' => 'A vegetarian Niçoise salad, that is packed with goodness - fibre, folate, iron, vitamin c and gluten-free too',
            'cost' => '9.99',
            'cover_img' => 'nicoise-egg-salad.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();





        $menu = new Menu([
            'title' => 'Beetroot & halloumi',
            'body' => 'Make an easy salad with three of your 5-a-day. Halloumi with juicy pomegranate seeds and the crunch of pumpkin seeds is a moreish combination',
            'cost' => '10.99',
            'cover_img' => 'beet.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();

        $menu = new Menu([
            'title' => 'Spring tabbouleh',
            'body' => 'A simple, budget, spring salad that can add a healthy dose of vegetables to your midweek meal.',
            'cost' => '7.99',
            'cover_img' => 'spring-tabbouleh.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();

        $menu = new Menu([
            'title' => 'Courgetti',
            'body' => 'Dress your courgetti with fresh, zesty spring flavours. Use the best quality ricotta you can find in this simple, vibrant side dish',
            'cost' => '6.99',
            'cover_img' => 'courgetti-with-lemon-ricotta-and-mint.jpg'
     
        ]);

        $menu->category_id = 1;
        $menu->save();



        $menu = new Menu([
        	'title' => 'Southern BBQ Chicken',
        	'body' => 'Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.',
        	'cost' => '14.99',
        	'cover_img' => '1127306.jpg'
     
        ]);
       
        $menu->category_id = 2;
        $menu->save();


        $menu = new Menu([
            'title' => 'Pilaf',
            'body' => 'rice dish, adding spices, and other ingredients such as vegetables or meat, and employing some technique for achieving cooked grains that do not adhere.',
            'cost' => '15.99',
            'cover_img' => 'Без названия_1588531981.jpg'
     
        ]);
        $menu->category_id = 2;
        $menu->save();


        $menu = new Menu([
            'title' => 'Seared Scallops with Brown Butter',
            'body' => 'Juice lemons. Spoon out capers. Heat pan. Cook scallops. Make sauce in same pan. meat, and employing some technique for achieving cooked grains that do not adhere.',
            'cost' => '13.99',
            'cover_img' => 'seared-scallops-with-brown-butter-and-lemon-pan-sauce-recipe-BA-121217.jpg'
     
        ]);
        $menu->category_id = 2;
        $menu->save();


         $menu = new Menu([
            'title' => 'Cauliflower Bolognese',
            'body' => 'Cauliflower and mushrooms provide richness and toothiness that do justice to the meaty original.',
            'cost' => '15.99',
            'cover_img' => 'cauliflower-bolognese-recipe-BA-021320.jpg'
     
        ]);
        $menu->category_id = 2;
        $menu->save();


        $menu = new Menu([
            'title' => 'Southern BBQ Chicken',
            'body' => 'Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.',
            'cost' => '14.99',
            'cover_img' => '1127306.jpg'
     
        ]);
       
        $menu->category_id = 2;
        $menu->save();


        $menu = new Menu([
            'title' => 'Pilaf',
            'body' => 'rice dish, adding spices, and other ingredients such as vegetables or meat, and employing some technique for achieving cooked grains that do not adhere.',
            'cost' => '15.99',
            'cover_img' => 'Без названия_1588531981.jpg'
     
        ]);
        $menu->category_id = 2;
        $menu->save();

         $menu = new Menu([
            'title' => 'White Chocolate Cheesecake',
            'body' => 'Made with real strawberries, this pretty pink cake is filled and frosted with our fresh strawberry buttercream.',
            'cost' => '5.99',
            'cover_img' => 'XQM8uRFoR3OLUsRuhV0D_17.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();

        $menu = new Menu([
            'title' => 'Neapolitan',
            'body' => 'Vanilla almond, strawberry and chocolate cake layers, filled and frosted with our house vanilla, strawberry and chocolate buttercream.',
            'cost' => '7.99',
            'cover_img' => 'image5.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();


        $menu = new Menu([
            'title' => 'White Chocolate Cheesecake',
            'body' => 'Vanilla Almond Amycakes are decorated with sparkly clear crystal sprinkles, pearl sprinkles and a ring of buttercream rosettes.',
            'cost' => '4.99',
            'cover_img' => 'image3.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();

        $menu = new Menu([
            'title' => 'Golden Strawberry',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '6.99',
            'cover_img' => 'image1.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();

         $menu = new Menu([
            'title' => 'White Chocolate Cheesecake',
            'body' => 'Made with real strawberries, this pretty pink cake is filled and frosted with our fresh strawberry buttercream.',
            'cost' => '5.99',
            'cover_img' => 'XQM8uRFoR3OLUsRuhV0D_17.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();

        $menu = new Menu([
            'title' => 'Neapolitan',
            'body' => 'Vanilla almond, strawberry and chocolate cake layers, filled and frosted with our house vanilla, strawberry and chocolate buttercream.',
            'cost' => '7.99',
            'cover_img' => 'image5.jpg'
     
        ]);
        $menu->category_id = 3;
        $menu->save();


        $menu = new Menu([
            'title' => 'Aperol Spritz',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '5.99',
            'cover_img' => 'kuku4.jpg'
     
        ]);
        $menu->category_id = 4;
        $menu->save();

        $menu = new Menu([
            'title' => 'El Presidente',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '7.99',
            'cover_img' => 'kuku3.jpg'
     
        ]);
        $menu->category_id = 4;
        $menu->save();

        $menu = new Menu([
            'title' => 'Santa Vittoria',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '4.99',
            'cover_img' => 'kuku1.jpg'
     
        ]);
        $menu->category_id = 4;
        $menu->save();

        $menu = new Menu([
            'title' => 'Coke',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '3.99',
            'cover_img' => 'kuku2.jpg'
     
        ]);
        
        $menu->category_id = 4;
        $menu->save();
        
                $menu = new Menu([
            'title' => 'Aperol Spritz',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '5.99',
            'cover_img' => 'kuku4.jpg'
     
        ]);
        $menu->category_id = 4;
        $menu->save();

        $menu = new Menu([
            'title' => 'El Presidente',
            'body' => 'Buttery, golden vanilla cake filled with three layers of fresh strawberry compote and frosted with our house vanilla buttercream.',
            'cost' => '7.99',
            'cover_img' => 'kuku3.jpg'
     
        ]);
        $menu->category_id = 4;
        $menu->save();
    }
}
