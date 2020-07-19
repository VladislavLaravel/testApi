<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
              'name' =>          'Charles',
              'second_name'  =>  'Dickens',
            ],[
              'name' =>          'Honoré',
              'second_name'  =>  'de Balzac',
            ],[
              'name' =>          'ERNEST',
              'second_name'  =>  'HEMINGWAY',
            ],[
              'name' =>          'Nick',
              'second_name'  =>  'Perumov',
            ],[
              'name' =>          'Rodjer',
              'second_name'  =>  'Jelyazni',
            ]
        ];

        foreach ($authors as $key => $author) {
            Author::create($author);
        }
    }
}
