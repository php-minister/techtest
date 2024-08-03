<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title' => 'Test Title1',
            'content' => 'This is the content of test article 1.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'title' => 'Test Title2',
            'content' => 'This is the content of test article 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'title' => 'Test Title3',
            'content' => 'This is the content of test article 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'title' => 'Test Title4',
            'content' => 'This is the content of test article 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'title' => 'Testing Title5',
            'content' => 'This is the content of test article 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
