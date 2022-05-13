<?php

namespace Database\Factories;

use App\Models\Clothe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clothe>
 */
class ClotheFactory extends Factory
{
    protected $model = Clothe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'color' => $this->faker->colorName,
            'size' => strtoupper($this->faker->randomElement(['xl', 'l', 'm', 's', 'xs'])),
            'img' => 'https://prodota.ru/forum/uploads/monthly_2021_04/pig_162595.png.e238f36d0d6429514a5bdf0dd4e9dc9b.png',
            'price' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
