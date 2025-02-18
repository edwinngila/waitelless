<?php

namespace Database\Factories;

use App\Models\WaitList;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaitListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaitList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position' => $this->faker->numberBetween(1, 100),
            'customer_id' => Customer::factory(),
            // Add other fields as needed
        ];
    }
}
