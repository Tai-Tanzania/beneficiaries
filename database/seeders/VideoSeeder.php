<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Video::create([
            'title' => 'Mbuland',
            'link' => 'https://www.youtube.com/embed/qY-Wh41yr2s',
         ]);

         //3
        Video::create([
            'title' => 'Nivushe',
            'link' => 'https://www.youtube.com/embed/99XW_-HhTG4',
        ]);

        //4
        Video::create([
            'title' => 'Mwangaza Series - Nivushe',
            'link' => 'https://www.youtube.com/embed/vnKYVzO9fa0',
            'featured' => true
        ]);

        //5
        Video::create([
            'title' => 'Mwangaza - African Animated Film',
            'link' => 'https://www.youtube.com/embed/fctal0hryiw',
        ]);

        //6
        Video::create([
            'title' => 'Harakati za Ngeti - Naweza',
            'link' => 'https://www.youtube.com/embed/t08E-Vd5lww',
        ]);

        //7
        Video::create([
            'title' => 'Harakati za Lucy - Nawaza tu',
            'link' => 'https://www.youtube.com/embed/0GEQVouWTAs',
        ]);

        //8
        Video::create([
            'title' => 'Amsha Amsha Short Film',
            'link' => 'https://www.youtube.com/embed/EtStQ9Hjkog'
        ]);

        //9
        Video::create([
            'title' => 'Akulita',
            'link' => 'https://www.youtube.com/embed/GLVylVoL3WE'
        ]);

        //10
        Video::create([
            'title' => 'Harakati za Lucy - Tujifunze',
            'link' => 'https://www.youtube.com/embed/k5CDQwvHUtY'
        ]);

        //11
        Video::create([
            'title' => 'Ujumbe kwako kijana',
            'link' => 'https://www.youtube.com/embed/8eh_xPEBhxY'
        ]);

        //12
        Video::create([
            'title' => 'Harakati za Lucy - Prototype',
            'link' => 'https://www.youtube.com/embed/fKuMlcZZDr8'
        ]);

        //13
        Video::create([
            'title' => 'Shujaa Official Trailer',
            'link' => 'https://www.youtube.com/embed/Z2FUbgbgNek'
        ]);
    }
}
