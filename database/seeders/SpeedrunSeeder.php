<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speedrun;

class SpeedrunSeeder extends Seeder
{
    public function run()
    {
        Speedrun::factory()->count(50)->create();
    }
}
