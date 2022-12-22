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
            "https://media.komus.ru/medias/sys_master/root/he3/ha8/10034903875614/363576-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/ha0/h28/11174588940318/784581-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/he4/h7e/10338826354718/1117961-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/h15/h12/11433230434334/1557731-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/h02/h22/11231595986974/1552077-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/hb5/hbe/11532065669150/213386-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/h01/h07/10923608932382/1461958-1-800Wx800H.jpg",
            "https://media.komus.ru/medias/sys_master/root/h8f/h37/10296776523806/870161-1-800Wx800H.jpg",
        ];

        return [
            'img' => $this->faker->randomElement($links),
            'price' => $this->faker->numberBetween(1000, 5000)
        ];
    }
}
