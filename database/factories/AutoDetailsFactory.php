<?php

namespace Database\Factories;

use App\Models\AutoDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutoDetails>
 */
class AutoDetailsFactory extends Factory
{
    protected $model = AutoDetails::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $links = [
            "https://pubimg.4mycar.ru/images/02f56ddbde56b5c7c1a6291a60a36fe42ffbe83dcab6701cc98a47.jpeg",
            "https://pubimg.4mycar.ru/images/05abd8e5eedc8b1f7725c2f00a687d1204ce4e407fb7e6cbffcc7f.png",
            "https://pubimg.4mycar.ru/images/0140d7d4bcce1de87dfbb8bd85e56b51b8c2600a428252a61d9990.jpeg",
            "https://pubimg.4mycar.ru/images/0961a62f1e58c09d76aa68bfa550b6e65eec93810fbfb2a7cbdae5.jpeg",
            "https://pubimg.4mycar.ru/images/09ca486fbbd2c461bb9e626b5e2dfbd1ede2d78075f2a3e68e0928.png",
            "https://pubimg.4mycar.ru/images/09555854948cd154aacfbf1fe95cec30a406a680353ed12578611b.jpeg"
        ];

        return [
            'img' => $this->faker->randomElement($links),
            'price' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
