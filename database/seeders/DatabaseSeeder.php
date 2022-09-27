<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);  
        User::create([
            'name' => 'Muhammad Rizki Ramadhan',
            'username' => 'muhrizram',
            'email' => 'muhrizram19@gmail.com',
            'password' => bcrypt('kiki191299')    
        ]);

        User::factory(5)->create();

        // User::create([
        //     'name' => 'Geananda Derrina Fassya',
        //     'email' => 'geanandadf@gmail.com',
        //     'password' => bcrypt('12345')    
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus dolorem cum reprehenderit ducimus expedita repellendus eius nihil architecto vitae ex!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, nihil! Non pariatur esse ullam fuga hic dolore, illo commodi excepturi laborum. Culpa aliquam beatae distinctio dolorum, voluptatibus corporis iste ab sed commodi officia architecto fugit facilis consectetur quisquam rem, ducimus quidem nisi quo. Consequatur neque dignissimos qui iste dolore porro soluta quam accusamus necessitatibus itaque aliquid expedita odit incidunt fugiat, tenetur officiis illum exercitationem unde ad voluptatum eum earum totam temporibus. Facilis porro, quidem earum sequi enim asperiores sit repellendus est voluptates. Quibusdam aliquam atque nobis, est nulla sapiente animi distinctio. Delectus, sequi quasi harum exercitationem assumenda quam non sint quis error? Harum, minima rem. Error quam impedit ea sunt voluptatem debitis quis, et, aperiam asperiores reiciendis facilis sed odio temporibus, accusantium aliquam non iure nulla? Possimus dolor voluptatibus quod eum ea consequuntur facilis quaerat, cum voluptas excepturi magni obcaecati soluta officiis, culpa provident sit quidem facere velit sed maxime, tenetur molestias explicabo vero! Ratione consequatur perferendis eius, tempore delectus itaque. Ullam consequuntur tempora pariatur modi ipsam harum ad quam, vero sit corporis ratione non quas molestias, aliquid dicta quidem quae voluptatum incidunt quia et repudiandae debitis itaque! Fuga recusandae quia corporis quas libero facilis quisquam! Soluta omnis amet dolorum!'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus dolorem cum reprehenderit ducimus expedita repellendus eius nihil architecto vitae ex!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, nihil! Non pariatur esse ullam fuga hic dolore, illo commodi excepturi laborum. Culpa aliquam beatae distinctio dolorum, voluptatibus corporis iste ab sed commodi officia architecto fugit facilis consectetur quisquam rem, ducimus quidem nisi quo. Consequatur neque dignissimos qui iste dolore porro soluta quam accusamus necessitatibus itaque aliquid expedita odit incidunt fugiat, tenetur officiis illum exercitationem unde ad voluptatum eum earum totam temporibus. Facilis porro, quidem earum sequi enim asperiores sit repellendus est voluptates. Quibusdam aliquam atque nobis, est nulla sapiente animi distinctio. Delectus, sequi quasi harum exercitationem assumenda quam non sint quis error? Harum, minima rem. Error quam impedit ea sunt voluptatem debitis quis, et, aperiam asperiores reiciendis facilis sed odio temporibus, accusantium aliquam non iure nulla? Possimus dolor voluptatibus quod eum ea consequuntur facilis quaerat, cum voluptas excepturi magni obcaecati soluta officiis, culpa provident sit quidem facere velit sed maxime, tenetur molestias explicabo vero! Ratione consequatur perferendis eius, tempore delectus itaque. Ullam consequuntur tempora pariatur modi ipsam harum ad quam, vero sit corporis ratione non quas molestias, aliquid dicta quidem quae voluptatum incidunt quia et repudiandae debitis itaque! Fuga recusandae quia corporis quas libero facilis quisquam! Soluta omnis amet dolorum!'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus dolorem cum reprehenderit ducimus expedita repellendus eius nihil architecto vitae ex!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, nihil! Non pariatur esse ullam fuga hic dolore, illo commodi excepturi laborum. Culpa aliquam beatae distinctio dolorum, voluptatibus corporis iste ab sed commodi officia architecto fugit facilis consectetur quisquam rem, ducimus quidem nisi quo. Consequatur neque dignissimos qui iste dolore porro soluta quam accusamus necessitatibus itaque aliquid expedita odit incidunt fugiat, tenetur officiis illum exercitationem unde ad voluptatum eum earum totam temporibus. Facilis porro, quidem earum sequi enim asperiores sit repellendus est voluptates. Quibusdam aliquam atque nobis, est nulla sapiente animi distinctio. Delectus, sequi quasi harum exercitationem assumenda quam non sint quis error? Harum, minima rem. Error quam impedit ea sunt voluptatem debitis quis, et, aperiam asperiores reiciendis facilis sed odio temporibus, accusantium aliquam non iure nulla? Possimus dolor voluptatibus quod eum ea consequuntur facilis quaerat, cum voluptas excepturi magni obcaecati soluta officiis, culpa provident sit quidem facere velit sed maxime, tenetur molestias explicabo vero! Ratione consequatur perferendis eius, tempore delectus itaque. Ullam consequuntur tempora pariatur modi ipsam harum ad quam, vero sit corporis ratione non quas molestias, aliquid dicta quidem quae voluptatum incidunt quia et repudiandae debitis itaque! Fuga recusandae quia corporis quas libero facilis quisquam! Soluta omnis amet dolorum!'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus dolorem cum reprehenderit ducimus expedita repellendus eius nihil architecto vitae ex!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, nihil! Non pariatur esse ullam fuga hic dolore, illo commodi excepturi laborum. Culpa aliquam beatae distinctio dolorum, voluptatibus corporis iste ab sed commodi officia architecto fugit facilis consectetur quisquam rem, ducimus quidem nisi quo. Consequatur neque dignissimos qui iste dolore porro soluta quam accusamus necessitatibus itaque aliquid expedita odit incidunt fugiat, tenetur officiis illum exercitationem unde ad voluptatum eum earum totam temporibus. Facilis porro, quidem earum sequi enim asperiores sit repellendus est voluptates. Quibusdam aliquam atque nobis, est nulla sapiente animi distinctio. Delectus, sequi quasi harum exercitationem assumenda quam non sint quis error? Harum, minima rem. Error quam impedit ea sunt voluptatem debitis quis, et, aperiam asperiores reiciendis facilis sed odio temporibus, accusantium aliquam non iure nulla? Possimus dolor voluptatibus quod eum ea consequuntur facilis quaerat, cum voluptas excepturi magni obcaecati soluta officiis, culpa provident sit quidem facere velit sed maxime, tenetur molestias explicabo vero! Ratione consequatur perferendis eius, tempore delectus itaque. Ullam consequuntur tempora pariatur modi ipsam harum ad quam, vero sit corporis ratione non quas molestias, aliquid dicta quidem quae voluptatum incidunt quia et repudiandae debitis itaque! Fuga recusandae quia corporis quas libero facilis quisquam! Soluta omnis amet dolorum!'
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Love',
            'slug' => 'love'
        ]);
    }
}
