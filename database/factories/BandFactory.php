<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bandnaam' => $this->faker->name(),
            'biografie' => $this->Str::random(100),
            'tekstkleur' => '#333333',
            'achtegrrondkleur' => '#FFFFFF',
            'themakleur' => '#222222',
            'url1' => 'https://youtu.be/W_9xz1XXRQQ',
            'url2' => 'https://youtu.be/W_9xz1XXRQQ',
            'url3' => 'https://youtu.be/W_9xz1XXRQQ',

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
