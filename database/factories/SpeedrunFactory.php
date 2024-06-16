<?php
namespace Database\Factories;

use App\Models\Speedrun;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeedrunFactory extends Factory
{
    protected $model = Speedrun::class;

    public function definition()
    {
        return [
            'player_name' => $this->faker->name,
            'completion_time' => $this->faker->randomFloat(3, 300, 3600),
        ];
    }
}
