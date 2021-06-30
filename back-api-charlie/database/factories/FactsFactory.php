<?php

namespace Database\Factories;

use App\Models\Facts;
use Illuminate\Database\Eloquent\Factories\Factory;

class FactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(10, true),
            'type' => "cats",
            'deleted' => 0,
            "used" => 0,
            "verified" => 1,
            "count" => 0
        ];
    }

}
