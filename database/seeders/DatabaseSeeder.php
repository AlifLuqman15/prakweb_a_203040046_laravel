<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alif Luqman',
            'username' => 'Alif',
            'email' => 'alifluqmanhakim@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Albert Seftian',
        //     'email' => 'alberty@gmail.com',
        //     'password' => bcrypt('1290')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus, non, praesentium aperiam quas iste eaque, quisquam consequuntur eos possimus mollitia est. Perspiciatis explicabo cum cupiditate dignissimos temporibus minus, nihil debitis aut maxime labore repellendus, assumenda, fugiat accusantium! Nam nemo esse temporibus doloremque nisi necessitatibus maiores soluta, debitis ratione modi quidem provident consequuntur quod delectus, alias a voluptatem iusto! Aliquam dolore fuga ipsum rerum in, repellat consequuntur itaque dolorum quasi veritatis corporis, modi a repudiandae fugiat recusandae enim cupiditate soluta rem delectus! Quisquam dolore quod veniam voluptatibus ducimus alias impedit cumque animi facilis, recusandae, exercitationem odio! Aliquid, reiciendis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus, non, praesentium aperiam quas iste eaque, quisquam consequuntur eos possimus mollitia est. Perspiciatis explicabo cum cupiditate dignissimos temporibus minus, nihil debitis aut maxime labore repellendus, assumenda, fugiat accusantium! Nam nemo esse temporibus doloremque nisi necessitatibus maiores soluta, debitis ratione modi quidem provident consequuntur quod delectus, alias a voluptatem iusto! Aliquam dolore fuga ipsum rerum in, repellat consequuntur itaque dolorum quasi veritatis corporis, modi a repudiandae fugiat recusandae enim cupiditate soluta rem delectus! Quisquam dolore quod veniam voluptatibus ducimus alias impedit cumque animi facilis, recusandae, exercitationem odio! Aliquid, reiciendis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus, non, praesentium aperiam quas iste eaque, quisquam consequuntur eos possimus mollitia est. Perspiciatis explicabo cum cupiditate dignissimos temporibus minus, nihil debitis aut maxime labore repellendus, assumenda, fugiat accusantium! Nam nemo esse temporibus doloremque nisi necessitatibus maiores soluta, debitis ratione modi quidem provident consequuntur quod delectus, alias a voluptatem iusto! Aliquam dolore fuga ipsum rerum in, repellat consequuntur itaque dolorum quasi veritatis corporis, modi a repudiandae fugiat recusandae enim cupiditate soluta rem delectus! Quisquam dolore quod veniam voluptatibus ducimus alias impedit cumque animi facilis, recusandae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni nobis accusamus, non, praesentium aperiam quas iste eaque, quisquam consequuntur eos possimus mollitia est. Perspiciatis explicabo cum cupiditate dignissimos temporibus minus, nihil debitis aut maxime labore repellendus, assumenda, fugiat accusantium! Nam nemo esse temporibus doloremque nisi necessitatibus maiores soluta, debitis ratione modi quidem provident consequuntur quod delectus, alias a voluptatem iusto! Aliquam dolore fuga ipsum rerum in, repellat consequuntur itaque dolorum quasi veritatis corporis, modi a repudiandae fugiat recusandae enim cupiditate soluta rem delectus! Quisquam dolore quod veniam voluptatibus ducimus alias impedit cumque animi facilis, recusandae.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
