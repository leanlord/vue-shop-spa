<?php

namespace Database\Factories;

use App\Models\Household;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Household>
 */
class HouseholdFactory extends Factory
{
    protected $model = Household::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'img' => 'https://a.lmcdn.ru/product/M/P/MP002XM085XD_17091779_1_v1_2x.jpg',
            'price' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
