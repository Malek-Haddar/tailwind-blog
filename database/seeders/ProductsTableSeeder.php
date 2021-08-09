<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'iphone 12 pro',
                'body' => '<p>3and rabi mch b3id !!</p>',
                'image' => 'products\\August2021\\CVMZdkjL7qhSxe788Fhq.png',
                'created_at' => '2021-08-04 10:16:00',
                'updated_at' => '2021-08-04 10:30:09',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mercedes Class G',
                'body' => '<p>Rabi ysahel 😂</p>',
                'image' => 'products\\August2021\\NV5v6yrZgeMv1V3Ju5ub.jpg',
                'created_at' => '2021-08-04 10:36:50',
                'updated_at' => '2021-08-04 10:36:50',
                'user_id' => 2,
            ),
        ));
        
        
    }
}