<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::create([
            'name' => 'Ngeti',
            'age' => '16',
            'description' => 'She is a sensational and inspirational young-female leader 
            at only 16 years of age. Ngeti is bold, intuitive, courageous, a risk-taker 
            who embarks on complex social, behavioral missions.',
            'image' => 'charac/Ngeti 2.png',
            'thumbnail' => 'charac/thumbnail/ngeti-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Nemo',
            'age' => '15',
            'description' => 'Nemo is a charming and energetic young mathematician. At only 15 years of age, Nemo chases the biggest dream than most kids, to become the best innovator in his class, despite being blind.',
            'image' => 'charac/Nemo.png',
            'thumbnail' => 'charac/thumbnail/nemo-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Njaro',
            'age' => '15',
            'description' => 'She is the most energetic young innovator you will ever find. At 15, she has become a sensational figure in her community by showcasing her brilliant finger-snap light switch, which has left most of her peers and elders in awe.  As a person living with albinism, Njaro rises above stereotypical attitudes thrown at her by becoming the best young inventor she can be.',
            'image' => 'charac/Njaro - Nivushe.png',
            'thumbnail' => 'charac/thumbnail/njaro-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Zamla',
            'image' => 'charac/Zamla 1.png',
            'thumbnail' => 'charac/thumbnail/zamla-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Time',
            'image' => 'charac/Time.png',
            'thumbnail' => 'charac/thumbnail/time-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Uwezo',
            'image' => 'charac/uwezo - zungumza.png',
            'thumbnail' => 'charac/thumbnail/uwezo-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Sofia',
            'image' => 'charac/sofia.png',
            'thumbnail' => 'charac/thumbnail/sofia-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Anko Bula',
            'image' => 'charac/Bula.png',
            'thumbnail' => 'charac/thumbnail/bula-thumbnail.png',
            'description' => 'He is that friend, mentor and confidant you want around you. Anko Bula always has and will be the children’s guardian. He comes to the rescue whenever children are in trouble or need an upright, outstanding person to guide them through a challenging situation. Anko Bula is friendly, funny and brave.'
        ]);

        Character::create([
            'name' => 'Amber',
            'image' => 'charac/Amber.png',
            'thumbnail' => 'charac/thumbnail/amber-thumbnail.png'
        ]);

        Character::create([
            'name' => 'Maria',
            'image' => 'charac/Maria.png',
            'thumbnail' => 'charac/thumbnail/maria-thumbnail.png'
        ]);

    }
}
