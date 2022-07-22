<?php

namespace Database\Factories;

use App\Domain\Games\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
            'description' => $this->faker->text(),
            'url_image' => $this->faker->url(),
            'status' => $this->faker->randomElement(StatusEnum::names()),
        ];
    }
}
