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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Aldi Maulana Bahari',
            'email' => 'aldimaulana160503@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Doddy Ferdiansyah',
            'email' => 'doddycuy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem, itaque cupiditate quidem illo ut voluptate aspernatur pariatur nostrum sapiente quia vitae doloribus, ratione ipsam eius ipsa neque, eligendi obcaecati doloremque facilis. Mollitia, expedita. Quisquam molestiae quas, repudiandae facilis qui, voluptas nulla id fugit magni rerum ipsam nihil necessitatibus iure earum doloremque commodi praesentium at excepturi amet magnam delectus? Ut, magnam facere. Repellendus totam ea hic, culpa sunt praesentium quisquam doloremque, at commodi itaque expedita mollitia beatae numquam recusandae laborum non in! Molestias, quaerat amet eaque fugit autem assumenda, corrupti impedit unde quis laboriosam, eius quam aperiam!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem, itaque cupiditate quidem illo ut voluptate aspernatur pariatur nostrum sapiente quia vitae doloribus, ratione ipsam eius ipsa neque, eligendi obcaecati doloremque facilis. Mollitia, expedita. Quisquam molestiae quas, repudiandae facilis qui, voluptas nulla id fugit magni rerum ipsam nihil necessitatibus iure earum doloremque commodi praesentium at excepturi amet magnam delectus? Ut, magnam facere. Repellendus totam ea hic, culpa sunt praesentium quisquam doloremque, at commodi itaque expedita mollitia beatae numquam recusandae laborum non in! Molestias, quaerat amet eaque fugit autem assumenda, corrupti impedit unde quis laboriosam, eius quam aperiam!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem, itaque cupiditate quidem illo ut voluptate aspernatur pariatur nostrum sapiente quia vitae doloribus, ratione ipsam eius ipsa neque, eligendi obcaecati doloremque facilis. Mollitia, expedita. Quisquam molestiae quas, repudiandae facilis qui, voluptas nulla id fugit magni rerum ipsam nihil necessitatibus iure earum doloremque commodi praesentium at excepturi amet magnam delectus? Ut, magnam facere. Repellendus totam ea hic, culpa sunt praesentium quisquam doloremque, at commodi itaque expedita mollitia beatae numquam recusandae laborum non in! Molestias, quaerat amet eaque fugit autem assumenda, corrupti impedit unde quis laboriosam, eius quam aperiam!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum maiores distinctio exercitationem, itaque cupiditate quidem illo ut voluptate aspernatur pariatur nostrum sapiente quia vitae doloribus, ratione ipsam eius ipsa neque, eligendi obcaecati doloremque facilis. Mollitia, expedita. Quisquam molestiae quas, repudiandae facilis qui, voluptas nulla id fugit magni rerum ipsam nihil necessitatibus iure earum doloremque commodi praesentium at excepturi amet magnam delectus? Ut, magnam facere. Repellendus totam ea hic, culpa sunt praesentium quisquam doloremque, at commodi itaque expedita mollitia beatae numquam recusandae laborum non in! Molestias, quaerat amet eaque fugit autem assumenda, corrupti impedit unde quis laboriosam, eius quam aperiam!',
            'category_id' => 2,
            'user_id' => 2
        ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
