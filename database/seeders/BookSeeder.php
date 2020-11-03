<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_name' => Str::random(10),
            'book_author' => Str::random(10),
            'book_description' => Str::random(10),
            'book_img' => '/storage/uploads/defoult.png',
            'status' => true,

        ]);
    }
}
