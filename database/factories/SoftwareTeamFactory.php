<?php

namespace Database\Factories;

use App\Models\SoftwareTeam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class SoftwareTeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoftwareTeam::class;

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
            "employee_id"      => Str::random(20),
            'email'           => $this->faker->email(), // password
            'phone_number'    => $this->faker->phoneNumber(),
        ];
    }
}
