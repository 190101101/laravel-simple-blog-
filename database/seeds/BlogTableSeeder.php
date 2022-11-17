<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'blog_title' => 'blog title 01',
            'blog_slug' => 'blog slug 01',
            'blog_content' => 'blog content 01',
        ]);
    }
}
