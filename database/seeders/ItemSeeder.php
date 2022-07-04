<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_items')->insert([
            'item_name' => 'Clear Intense Brightening Moisturizer',
            'item_desc' => 'Melazero / Secret Water / Polyglutamic Acid',
            'item_img_path' => 'item_img_1.png',
            'item_ingredients' => 'Aqua, Glycerine, Isononyl Isononanoate, Niacinamide, Artemisia Vulgaris Extract, Panax Ginseng Root Extract, etc...',
            'item_price_string' => '300.000,00',
            'item_price' => 300000
        ]);
        DB::table('tbl_items')->insert([
            'item_name' => 'Spotless Brightening Serum',
            'item_desc' => 'Melazero / Secret Water / Rice Bran',
            'item_img_path' => 'item_img_2.png',
            'item_ingredients' => 'Aqua, Butylene Glycol, Glycerine, Niacinamide, Pullulan, Oryza Sativa (Rice) Bran Extract, etc...',
            'item_price_string' => '300.000,00',
            'item_price' => 300000
        ]);
    }
}
