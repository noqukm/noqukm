<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Nasi Lemak',
           'description' => 'Served with a hot spicy sauce (sambal), and usually includes various garnishes, including fresh cucumber slices, small fried anchovies (ikan bilis), roasted peanuts, and hard-boiled or fried egg',
           'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Nasi_Lemak%2C_Mamak%2C_Sydney.jpg/1200px-Nasi_Lemak%2C_Mamak%2C_Sydney.jpg',
           'price' => 3.50,
           'type' => 'special'
        ]);

        DB::table('products')->insert([
           'name' => 'Nasi Ayam',
           'description' => 'Served with a dipping sauce of freshly minced red chilli and garlic, accompanied with dark soy sauce and freshly ground ginger. Fresh cucumber boiled in the chicken broth and light soy sauce with a dash of sesame oil are served with the chicken, served at room temperature.',
           'photo' => 'https://upload.wikimedia.org/wikipedia/commons/7/71/Hainanese_Chicken_Rice.jpg',
           'price' => 4.00,
           'type' => 'special'
        ]);

        DB::table('products')->insert([
           'name' => 'Nasi Kerabu',
           'description' => ' A type of Nasi Ulam, in which blue-coloured rice comes from the petals of Clitoria ternatea (butterfly-pea) flowers (bunga telang) is eaten with dried fish or fried chicken, crackers, pickles and other salads.',
           'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Nasi_kerabu.jpg/1280px-Nasi_kerabu.jpg',
           'price' => 5.00,
           'type' => 'special'

        ]);

        DB::table('products')->insert([
           'name' => 'Nasi Dagang',
           'description' => 'The combination of fenugreek seeds and coconut milk gives Nasi Dagang its unique flavour and fragrance, serve with Kari Ikan. ',
           'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Mak_ngah_nasi_dagang.jpg/330px-Mak_ngah_nasi_dagang.jpg',
           'price' => 4.50,
           'type' => 'special'
        ]);

        DB::table('products')->insert([
           'name' => 'Nasi Kandar',
           'description' => 'The rice is accompanied by side dishes such as fried chicken, curried beef spleen, cubed beef, lamb, fish roe, fried prawns or fried squid. A mixture of curry sauces is poured on the rice.',
           'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Nasi_Kandar.jpg/330px-Nasi_Kandar.jpg',
           'price' => 5.00,
           'type' => 'special'
        ]);

        //DRINKS
        DB::table('products')->insert([
           'name' => 'Teh O Ais/Panas',
           'description' => 'Best hot tea (without milk, sweetened) in Selangor',
           'photo' => 'https://img.astroawani.com/2015-04/81428063348_295x200.jpg',
           'price' => 1.00,
           'type' => 'drinks'
        ]);

        DB::table('products')->insert([
           'name' => 'Teh Tarik',
           'description' => 'Teh tarik is more than just a cup of tea mixed with condensed milk.It is foamy, creamy, sweet with a little kick.',
           'photo' => 'https://www.authenticfoodquest.com/wp-content/uploads/2017/10/TehTarik_MalaysianDrinks_AuthenticFoodQuest.jpg',
           'price' => 2.00,
           'type' => 'drinks'
        ]);

        DB::table('products')->insert([
           'name' => 'Barley Juice',
           'description' => 'Served with lots of ice, barley juice is a clear liquid, which is slightly thick with added sugar and lime for taste.',
           'photo' => 'https://www.authenticfoodquest.com/wp-content/uploads/2017/10/BarleyJuice_MalaysianDrinks_AuthenticFoodQuest.jpg',
           'price' => 3.00,
           'type' => 'drinks'
        ]);

        DB::table('products')->insert([
           'name' => 'Air Bandung Juice',
           'description' => 'It is made of evaporated milk or condensed milk with rose-flavored syrup giving it a very distinctive bright pink color',
           'photo' => 'https://www.authenticfoodquest.com/wp-content/uploads/2017/08/AirBandungJuice_PenangFood_AuthenticFoodQuest.jpg',
           'price' => 3.50,
           'type' => 'drinks'
        ]);

        DB::table('products')->insert([
           'name' => 'Longan Juice',
           'description' => 'Black longan juice is made from the dried longan fruit which are dark brown to almost black in color. On the other hand, the white longan juice comes from the white and juicy flesh of the fruit.',
           'photo' => 'https://www.authenticfoodquest.com/wp-content/uploads/2017/10/Longan_MalaysianDrinks_AuthenticFoodQuest.jpg',
           'price' => 4.00,
           'type' => 'drinks'
        ]);

        //DESSERTS
        DB::table('products')->insert([
           'name' => 'Ais Batu Campur',
           'description' => 'Nata de coco cubes, adzuki beans, fresh fruit bites, pickled mango slices and even a dollop of ice cream. ABC is a godsend to those who can’t bear the boiling Malaysian weather.',
           'photo' => 'https://blog.tourism.gov.my/wp-content/uploads/2016/09/Screen-Shot-2016-09-23-at-12.18.59-PM.png',
           'price' => 2.50,
           'type' => 'desserts'
        ]);
        DB::table('products')->insert([
           'name' => 'Pisang Goreng',
           'description' => 'Made from fresh bananas coated in flour batter, it is fried for a couple of minutes and ready to serve. The sweet and savoury taste with a crunchy exterior and soft mushy interior can bring on unstoppable cases of the munchies.',
           'photo' => 'https://blog.tourism.gov.my/wp-content/uploads/2016/09/Pisang-Goreng.jpg',
           'price' => 0.50,
           'type' => 'desserts'
        ]);
        DB::table('products')->insert([
           'name' => 'Apam Balik',
           'description' => 'Folded pancake with creamed corn and chopped peanuts. In between is anything thin and crunchy or thick and fluffy.',
           'photo' => 'https://blog.tourism.gov.my/wp-content/uploads/2016/09/Screen-Shot-2016-09-23-at-12.24.28-PM.png',
           'price' => 2.50,
           'type' => 'desserts'
        ]);
        DB::table('products')->insert([
           'name' => 'Kuih Lapis',
           'description' => 'This rice flour pudding comes in so many tantalising colours, shapes and sizes. The pudding comprises of stacks of sweet multi-coloured layers that have a gooey texture that melts in the mouth.',
           'photo' => 'https://blog.tourism.gov.my/wp-content/uploads/2016/09/Screen-Shot-2016-09-23-at-12.20.36-PM.png',
           'price' => 0.50,
           'type' => 'desserts'
        ]);
        DB::table('products')->insert([
           'name' => 'Bubur Cha Char',
           'description' => 'It is a Malaccan Nyonya sago porridge served with sweet potato chunks and coconut milk.',
           'photo' => 'https://blog.tourism.gov.my/wp-content/uploads/2016/09/Babur-Cha-Cha.png',
           'price' => 4.50,
           'type' => 'desserts'
        ]);
    }
}
