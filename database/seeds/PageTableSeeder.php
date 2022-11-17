<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page')->insert([
            'page_title' => 'page title 01',
            'page_slug' => 'page slug 01',
            'page_content' => 'page content 01',
        ]);
    }
}
