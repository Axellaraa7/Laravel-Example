<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    $name = $this->faker->unique()->name();
    return [
      'name' => $name,
      'bio' => $this->faker->text(),
      'birthday' => $this->faker->date('Y-m-d'),
      'slug' => Str::slug($name,'-')
    ];
  }
}
