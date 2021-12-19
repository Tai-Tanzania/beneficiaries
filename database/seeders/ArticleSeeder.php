<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'National Adolescent Health and Development Strategy 2018 - 2022',
            'thumbnail' => 'learning/profile/NAHD.png',
            'document' => 'learning/UTSS_UPR25_TZA_E_CoverPage.pdf'
        ]);

        Article::create([
            'title' => 'People With Albinism and the Universal Periodic Review of Tanzania',
            'thumbnail' => 'learning/profile/PA.png',
            'document' => 'learning/UTSS_UPR25_TZA_E_CoverPage.pdf'
        ]);
    }
}
