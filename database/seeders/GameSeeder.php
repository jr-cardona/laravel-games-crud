<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::factory()->create([
            'name' => 'BAMBOO RUSH',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
        ]);

        Game::factory()->create([
            'name' => 'REELS OF WEALTH',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
        ]);

        Game::factory()->create([
            'name' => 'DRAGON & PHOENIX',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
        ]);

        Game::factory()->create([
            'name' => 'TAKE THE BANK',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
        ]);

        Game::factory()->create([
            'name' => 'CAISHEN’S ARRIVAL',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
        ]);

        Game::factory()->create([
            'name' => 'GEMMED!',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
        ]);
    }
}
