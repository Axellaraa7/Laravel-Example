<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'title' => $this->faker->sentence()." ".$this->faker->emoji(),
          'body' => $this->faker->paragraph()
        ];
    }

    public function configure(){
      return $this->afterCreating(function(){
        \Illuminate\Support\Facades\DB::table('taggables')->where('taggable_type','App\Models\Video')->update(['tag_id' => rand(\App\Models\Tag::min('id'),\App\Models\Tag::max('id'))]);
      });
    }
}
