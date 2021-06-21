<?php

namespace Database\Factories;

use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\Factory;

class Client_Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'société' => $this->faker->company(),
            'téléphone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'adresse' => $this->faker->address(),
            'TVA'=>$this->faker->
        ];
    }
}