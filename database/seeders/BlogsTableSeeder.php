<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'first blog',
                'body' => '<p>this is our first blog guys !!</p>',
                'image' => 'blogs\\August2021\\JE2Yjrw6d8tKycuSppRy.jpg',
                'created_at' => '2021-08-06 09:50:00',
                'updated_at' => '2021-08-06 11:53:17',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'second blog',
                'body' => '<p>Voyager is awesome !!</p>',
                'image' => 'blogs\\August2021\\qLrBYSMLeSSZmVKbyUMz.png',
                'created_at' => '2021-08-06 10:13:18',
                'updated_at' => '2021-08-06 10:13:18',
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'iphone 12 pro',
                'body' => '<p>here we will talk about the new phone from apple !!</p>',
                'image' => 'blogs\\August2021\\Uo4sAGklVYQF0lCmCbIR.png',
                'created_at' => '2021-08-06 11:38:30',
                'updated_at' => '2021-08-06 11:38:30',
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'G-Class electric version.',
            'body' => '<p><span style="color: #595858; font-family: Roboto, sans-serif; font-size: 15px;">Perhaps the surprise is that the Mercedes G-Class electric (Mercedes&nbsp;</span><strong style="box-sizing: border-box; color: #333333; font-family: Roboto, sans-serif; font-size: 15px;"><a style="box-sizing: border-box; background: transparent; color: #595858; text-decoration-line: none;" href="https://mercedesblog.com/mercedes-eqg-rendered-and-it-looks-quite-electric/" target="_blank" rel="noopener"><span style="box-sizing: border-box; color: #ff0000;">EQG</span></a></strong><span style="color: #595858; font-family: Roboto, sans-serif; font-size: 15px;">) shows up so early. But it is a concept because the series version will come only in 2023.</span></p>',
                'image' => 'blogs\\August2021\\4s0dxTmA2R6BYv3XiRJF.jpg',
                'created_at' => '2021-08-06 14:59:00',
                'updated_at' => '2021-08-06 15:04:05',
                'user_id' => 1,
            ),
        ));
        
        
    }
}