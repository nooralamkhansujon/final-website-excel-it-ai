<?php

namespace Database\Factories;

use App\Models\Management;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ManagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Management::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'profile_photo'     => asset('assets\images\product\img-1.png'),
            'designation'      => $this->faker->realText(),
            'email'           => $this->faker->email(), // password
            'phone_number'    => $this->faker->phoneNumber(),
        ];
    }
}