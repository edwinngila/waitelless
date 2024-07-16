<?php

namespace Database\Factories;

use App\Models\Cancellation;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CancellationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cancellation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reason' => $this->faker->sentence,
            'customer_id' => Customer::factory(),
            // Add other fields as needed
        ];
    }
}
