<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9',
            'description' => 'A brand new, sealed Lilac Purple Verizon Global
Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation
ready.',
            'photo' =>
                'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_3
5.JPG?set_id=89040003C1',
            'price' => 698.88
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone X',
            'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS
WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8
64gb. iPhone X with iOS 11.',
            'photo' =>
                'https://i5.walmartimages.com/asr/91888b76-e666-45df-84f8-2f75baf523df_1.1b240cc85c02a9fa833584ef67125d85.jpeg',
            'price' => 983.00
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 2 XL',
            'description' => 'New condition
• No returns, but backed by eBay Money back guarantee',
            'photo' =>
                'https://cdn.shopify.com/s/files/1/0808/0067/products/title_pixel2_xl_liquid_crystal_03_2048x2048.jpg?v=1508954612',
            'price' => 675.00
        ]);
        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'description' => 'NETWORK Technology GSM. Protection Corning
Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean
Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' =>
                'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.
JPG?set_id=89040003C1',
            'price' => 159.99
        ]);
        DB::table('products')->insert([
            'name' => 'Huawei Elate',
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei
Elate Smartphone.',
            'photo' => 'https://sep.yimg.com/ay/yhst-38148694942392/huawei-elate-techskin-brushed-aluminum-skin-4g-10.gif',
            'price' => 68.00
        ]);
        DB::table('products')->insert([
            'name' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and will
show minor scratches and/or scuff marks.',
            'photo' => 'https://www1-lw.xda-cdn.com/files/2016/02/24492653859_0616fd0ba6_b.jpg',
            'price' => 129.99
        ]);
    }
}
