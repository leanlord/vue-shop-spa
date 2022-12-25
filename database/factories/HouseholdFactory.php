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
        $links = [
            "https://pmdn.sokolov.io/pics/7C/F9/FC01C64713E82A96F7CA4B399224.jpg",
            "https://pmdn.sokolov.io/pics/08/6E/A13C745C30778061059A2AF8B993.jpg",
            "https://pmdn.sokolov.io/pics/11/C7/EA58DDC27772FB6E89ACC3BD8145.jpg",
            "https://pmdn.sokolov.io/pics/84/DE/0E48A273029B8C499619DB7291A9.jpg",
            "https://pmdn.sokolov.io/pics/42/C9/ABADD9B76F04F55B67725059FF1D.jpg",
            "https://pmdn.sokolov.io/pics/51/ED/D069C71795B089700DB4D6572BE1.jpg"
        ];

        return [
            'img' => $this->faker->randomElement($links),
            'price' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
