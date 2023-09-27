<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('category_articles')->insert([
            ['name'=> 'Laravel',
             'slug' => 'laravel'
            ],

            ['name'=> 'Django',
            'slug' => 'django'
           ],

           ['name'=> 'Symfony',
           'slug' => 'symfony'
           ],

           ['name'=> 'Javascript',
           'slug' => 'javascript'
           ],

           ['name'=> 'DevOpps',
           'slug' => 'devopps'
           ],

           ['name'=> 'Securite informatique',
           'slug' => 'securite-informatique'
           ],

           ['name'=> 'React Js',
           'slug' => 'react-js'
           ],

           ['name'=> 'Css/Html',
           'slug' => 'css-html'
           ],

           ['name'=> 'Talwind Css',
           'slug' => 'talwind-css'
           ],

           ['name'=> 'Sql',
           'slug' => 'sql'
           ],

           ['name'=> 'Git',
           'slug' => 'git'
           ],

           ['name'=> 'Gitlab',
           'slug' => 'gitlab'
           ],
           ['name'=> 'Java',
           'slug' => 'java'
           ],
        ]);

    }
}
