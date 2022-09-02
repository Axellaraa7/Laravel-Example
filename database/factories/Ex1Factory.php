<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ex1>
 */
class Ex1Factory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'name' => $this->faker->unique()->name(),
      'bio' => $this->faker->text(),
      'birthday' => $this->faker->date('Y-m-d'),
    ];
  }
}
