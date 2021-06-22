<?php

namespace Database\Factories;

use App\Models\Clients;
use App\Models\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->word(),
            'title' => $this->faker->sentence(),
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'VAT' => $this->faker->randomNumber($nbDigits = 2),
            'total' => $this->faker->randomNumber($nbDigits = 3),
            'client_id' => Clients::factory()
        ];
    }
}
