<?php

namespace Database\Factories;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Type;
class AnimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anime::class;

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
            'Images' =>$this->faker->image('public/images',640,480, null, false),
            'type_id' => Type::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
