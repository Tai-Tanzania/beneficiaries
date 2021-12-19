<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CharacterVideo;

class CharacterVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CharacterVideo::create([
            'character_id' =>  1,
            'video_id' => 12
        ]);

        CharacterVideo::create([
            'character_id' =>  1,
            'video_id' => 5
        ]);

        CharacterVideo::create([
            'character_id' =>  1,
            'video_id' => 9
        ]);

        CharacterVideo::create([
            'character_id' =>  2,
            'video_id' => 3
        ]);

        CharacterVideo::create([
            'character_id' =>  2,
            'video_id' => 4
        ]);

        CharacterVideo::create([
            'character_id' =>  3,
            'video_id' => 3
        ]);

        CharacterVideo::create([
            'character_id' =>  8,
            'video_id' => 4
        ]);

        CharacterVideo::create([
            'character_id' =>  8,
            'video_id' => 3
        ]);
  
    }
}
