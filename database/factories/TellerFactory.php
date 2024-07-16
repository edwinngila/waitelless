<?php

namespace Database\Factories;

use App\Models\Teller;
use Illuminate\Database\Eloquent\Factories\Factory;

class TellerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'active' => $this->faker->boolean,
            // Add other fields as needed
        ];
    }
}
