<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'title' => 'Belajar Laravel',
                'description' => 'Laravel merupakan framework yang dapat membantu web developer dalam memaksimalkan penggunaan PHP dalam proses pengembangan website.'

            ],
            [
                'category_id' => 2,
                'title' => 'Belajar Php',
                'description' => 'PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server.'
            ],
        ]);
    }
}
