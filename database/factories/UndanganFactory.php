<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Undangan>
 */
class UndanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->string('name');
            // $table->string('description');
            // $table->integer('price');
            // $table->string('image');
            // $table->string('image_alt');
            // $table->string('paket');
            // $table->string('kategori');
            // $table->timestamps();
            // name are undangan1, undangan2, and increasing
            'name' => $this->faker->text(10),
            'description' => $this->faker->text(30),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'image' => $this->faker->imageUrl(),
            'image_alt' => $this->faker->text(),
            'paket' => $this->faker->randomElement(['Basic', 'Premium', 'Platinum']),
            'kategori' => "Wedding",
        ];
    }
}
