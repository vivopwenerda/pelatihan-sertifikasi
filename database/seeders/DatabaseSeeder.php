<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Porto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

      //   User::create([
      //      'name' => 'Vivo Putri',
      //      'email' => 'vivopwenerda@gmail.com',
      //      'password' => bcrypt(12345)
      //   ]);

      //   User::create([
      //       'name' => 'Lee Jeno',
      //       'email' => 'leejeno@gmail.com',
      //       'password' => bcrypt(54321)
      //    ]);

         User::factory(3)->create();

         Category::create([
            'name' => 'Romance',
            'slug' => 'romance' 
         ]);

         Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy' 
         ]);

         Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy' 
         ]);

         Category::create([
            'name' => 'Horror',
            'slug' => 'horror' 
         ]);

         Category::create([
            'name' => 'Action',
            'slug' => 'action' 
         ]);


         Porto::factory(20)->create();

         // Porto::create([
         //    'title' => 'Cerita Pertama',
         //    'category_id' => 1,
         //    'user_id' => 1,
         //    'slug' => 'cerita-pertama',
         //    'image' => 'https://unsplash.com/photos/ysqg_siWpKc',
         //    'place' => 'BKT',
         //    'dateporto' => '2021-12-12',
         //    'desc' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
         //    'excerpt' => 'Where does pertama come from?'
         // ]);

         // Porto::create([
         //    'title' => 'Cerita Kedua',
         //    'category_id' => 2,
         //    'user_id' => 1,
         //    'slug' => 'cerita-kedua',
         //    'image' => 'https://unsplash.com/photos/ysqg_siWpKc',
         //    'place' => 'BKT',
         //    'dateporto' => '2021-12-12',
         //    'desc' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
         //    'excerpt' => 'Where does kedua come from?'
         // ]);

         // Porto::create([
         //    'title' => 'Cerita Ketiga',
         //    'category_id' => 2,
         //    'user_id' => 2,
         //    'slug' => 'cerita-ketiga',
         //    'image' => 'https://unsplash.com/photos/ysqg_siWpKc',
         //    'place' => 'BKT',
         //    'dateporto' => '2021-12-12',
         //    'desc' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
         //    'excerpt' => 'Where does ketiga come from?'
         // ]);

         // Porto::create([
         //    'title' => 'Cerita Keempat',
         //    'category_id' => 1,
         //    'user_id' => 2,
         //    'slug' => 'cerita-keempat',
         //    'image' => 'https://unsplash.com/photos/ysqg_siWpKc',
         //    'place' => 'BKT',
         //    'dateporto' => '2021-12-12',
         //    'desc' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
         //    'excerpt' => 'Where does keempat come from?'
         // ]);


    }
}
