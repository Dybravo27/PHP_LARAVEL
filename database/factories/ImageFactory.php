<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$faker = \Faker\Factory::create();
$faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "path" => $this->faker->imageUrl(1200,800, false),
        ];
    }
}
