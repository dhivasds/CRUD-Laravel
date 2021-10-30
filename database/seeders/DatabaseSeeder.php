<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Require Models dlu
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
        'name' => 'Dhivas Dharma Saputra',
        'email' => 'dhivas@gmail.com',
        'password' => bcrypt('12345')
    ]);

    User::create([
        'name' => 'Fauzan Kamil',
        'email' => 'fauzan@gmail.com',
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
    'title' => 'Judul Ke Pertama',
    'category_id' => 2,
    'user_id' => 1,
    'slug' => 'judul-pertama',
    'excerpt' => 'Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos praesentium, quam corporis ipsa eaque aliquam nobis, expedita delectus, consequatur voluptatem vel exercitationem soluta esse accusantium iure perspiciatis pariatur debitis similique sequi.</p>Vero itaque asperiores. Odit alias asperiores earum.<p>Aut ipsa sapiente id? Eveniet labore, maxime expedita voluptas nemo consectetur quibusdam ullam iste eaque voluptatem magni adipisci natus aspernatur dolor eius consequatur accusamus, obcaecati dicta quam quasi maiores corporis? Libero reprehenderit, facere sunt adipisci vel ipsam nemo exercitationem ipsum commodi sequi dolor ratione qui tempora rem quidem quaerat modi, corporis suscipit? Exercitationem, voluptate.</p> <p>Non, officiis doloremque magni iusto possimus nam aspernatur cumque provident, dolores itaque rerum et aperiam repudiandae est ipsam perferendis ex quam sint, dolor ducimus nulla accusamus maxime sequi. Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio.</p>'
    ]);

    Post::create([
    'title' => 'Judul Ke Dua',
    'category_id' => 1,
    'user_id' => 1,
    'slug' => 'judul-dua',
    'excerpt' => 'Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos praesentium, quam corporis ipsa eaque aliquam nobis, expedita delectus, consequatur voluptatem vel exercitationem soluta esse accusantium iure perspiciatis pariatur debitis similique sequi.</p>Vero itaque asperiores. Odit alias asperiores earum.<p>Aut ipsa sapiente id? Eveniet labore, maxime expedita voluptas nemo consectetur quibusdam ullam iste eaque voluptatem magni adipisci natus aspernatur dolor eius consequatur accusamus, obcaecati dicta quam quasi maiores corporis? Libero reprehenderit, facere sunt adipisci vel ipsam nemo exercitationem ipsum commodi sequi dolor ratione qui tempora rem quidem quaerat modi, corporis suscipit? Exercitationem, voluptate.</p> <p>Non, officiis doloremque magni iusto possimus nam aspernatur cumque provident, dolores itaque rerum et aperiam repudiandae est ipsam perferendis ex quam sint, dolor ducimus nulla accusamus maxime sequi. Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio.</p>'
    ]);

    Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => 1,
    'user_id' => 1,
    'slug' => 'judul-tiga',
    'excerpt' => 'Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos praesentium, quam corporis ipsa eaque aliquam nobis, expedita delectus, consequatur voluptatem vel exercitationem soluta esse accusantium iure perspiciatis pariatur debitis similique sequi.</p>Vero itaque asperiores. Odit alias asperiores earum.<p>Aut ipsa sapiente id? Eveniet labore, maxime expedita voluptas nemo consectetur quibusdam ullam iste eaque voluptatem magni adipisci natus aspernatur dolor eius consequatur accusamus, obcaecati dicta quam quasi maiores corporis? Libero reprehenderit, facere sunt adipisci vel ipsam nemo exercitationem ipsum commodi sequi dolor ratione qui tempora rem quidem quaerat modi, corporis suscipit? Exercitationem, voluptate.</p> <p>Non, officiis doloremque magni iusto possimus nam aspernatur cumque provident, dolores itaque rerum et aperiam repudiandae est ipsam perferendis ex quam sint, dolor ducimus nulla accusamus maxime sequi. Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio.</p>'
    ]);

    Post::create([
    'title' => 'Judul Ke Empat',
    'category_id' => 1,
    'user_id' => 1,
    'slug' => 'judul-empat',
    'excerpt' => 'Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos praesentium, quam corporis ipsa eaque aliquam nobis, expedita delectus, consequatur voluptatem vel exercitationem soluta esse accusantium iure perspiciatis pariatur debitis similique sequi.</p>Vero itaque asperiores. Odit alias asperiores earum.<p>Aut ipsa sapiente id? Eveniet labore, maxime expedita voluptas nemo consectetur quibusdam ullam iste eaque voluptatem magni adipisci natus aspernatur dolor eius consequatur accusamus, obcaecati dicta quam quasi maiores corporis? Libero reprehenderit, facere sunt adipisci vel ipsam nemo exercitationem ipsum commodi sequi dolor ratione qui tempora rem quidem quaerat modi, corporis suscipit? Exercitationem, voluptate.</p> <p>Non, officiis doloremque magni iusto possimus nam aspernatur cumque provident, dolores itaque rerum et aperiam repudiandae est ipsam perferendis ex quam sint, dolor ducimus nulla accusamus maxime sequi. Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio.</p>'
    ]);

    Post::create([
    'title' => 'Judul Ke Lima',
    'category_id' => 2,
    'user_id' => 2,
    'slug' => 'judul-lima',
    'excerpt' => 'Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos praesentium, quam corporis ipsa eaque aliquam nobis, expedita delectus, consequatur voluptatem vel exercitationem soluta esse accusantium iure perspiciatis pariatur debitis similique sequi.</p>Vero itaque asperiores. Odit alias asperiores earum.<p>Aut ipsa sapiente id? Eveniet labore, maxime expedita voluptas nemo consectetur quibusdam ullam iste eaque voluptatem magni adipisci natus aspernatur dolor eius consequatur accusamus, obcaecati dicta quam quasi maiores corporis? Libero reprehenderit, facere sunt adipisci vel ipsam nemo exercitationem ipsum commodi sequi dolor ratione qui tempora rem quidem quaerat modi, corporis suscipit? Exercitationem, voluptate.</p> <p>Non, officiis doloremque magni iusto possimus nam aspernatur cumque provident, dolores itaque rerum et aperiam repudiandae est ipsam perferendis ex quam sint, dolor ducimus nulla accusamus maxime sequi. Perferendis repellat earum modi deleniti adipisci, molestiae obcaecati ab esse id rem quod. Debitis fugit nisi accusantium voluptas similique necessitatibus tenetur illo, officia, voluptate dolor quia doloribus sapiente distinctio.</p>'
    ]);
    }
}
