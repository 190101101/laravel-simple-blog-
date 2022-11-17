<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            [
                'setting_description' => 'title',
                'setting_key' => 'title',
                'setting_value' => 'blog title',
                'setting_type' => 'text',
                'setting_must' => 0,
                'setting_delete' => '0',
                'setting_status' => '1',
            ],
            [
                'setting_description' => 'description',
                'setting_key' => 'description',
                'setting_value' => 'blog description',
                'setting_type' => 'text',
                'setting_must' => 1,
                'setting_delete' => '0',
                'setting_status' => '1',
            ],
            [
                'setting_description' => 'phone number',
                'setting_key' => 'phone',
                'setting_value' => '994 xx xxx xx xx',
                'setting_type' => 'text',
                'setting_must' => 4,
                'setting_delete' => '0',
                'setting_status' => '1',
            ],
            [
                'setting_description' => 'copyright',
                'setting_key' => 'copyright',
                'setting_value' => 'copyright',
                'setting_type' => 'text',
                'setting_must' => 4,
                'setting_delete' => '0',
                'setting_status' => '1',
            ],
        ]);
    }
}
