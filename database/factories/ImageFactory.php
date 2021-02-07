<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->imageUrl(),
        ];
    }

    public function aboutimage()
    {
        return $this->state(function (array $attributes) {
            return [
                'url' => $this->faker->imageUrl(About::ABOUT_WIDTH, About::ABOUT_HEIGHT),
            ];
        });
    }

}
