<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slider_title'       => $this->faker->name(),
            'slider_img'         => asset('assets\images\product\img-1.png'),
            'slider_description' => $this->faker->realText(),
        ];
    }
}
