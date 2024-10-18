<?php

namespace Database\Seeders;

use App\Models\Menus;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('menuses')->insert([
            [
                'nama_menu' => 'bacon cheeseburger',
                'harga' => 55000,
                'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod mattis enim ut egestas.'
            ],
            [
                'nama_menu' => 'jalapeńo bacon burger',
                'harga' => 45000,
                'detail' => 'Phasellus suscipit tortor sed arcu molestie, id dignissim urna ultricies. In euismod arcu orci, et vulputate quam lobortis nec.'
            ],
            [

                'nama_menu' => 'chicken rice bowl',
                'harga' => 60000,
                'detail' => 'Aenean nec pretium odio, id maximus arcu. Cras pharetra vitae tellus vel tempus.'
            ]

        ]);
    }
}
