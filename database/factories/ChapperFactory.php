<?php

namespace Database\Factories;

use App\Models\Chapper;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anime;
class ChapperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Title' => $this->faker->title(20),
            'Content' => $this->faker->word,
            'Video' => $this->faker->image('public/assets/video',640,480,null,false),
            'episode' 1,
            'anime_id' => Anime::all()->random()->id,
        ];
    }
}
