<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Ex1::factory(20)->create();
        Tag::factory(5)->create();
        \App\Models\Post::factory(10)->
          hasAttached(Tag::factory()->count(1),fn() => ['tag_id' => rand(Tag::min('id'),Tag::max('id'))])->create();
        \App\Models\Video::factory(10)->hasTags(1)->create();
    }
}
