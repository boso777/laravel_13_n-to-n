<?php

namespace Database\Seeders;
use App\Models\Tag;
use App\Models\tags;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $tags = ['sport','elettronica','attualità','cronaca','scienza','politica','mistero'];

        foreach ($tags as $tag) {
            Tag::create([
                'tag'=>$tag
            ]);
        }
    }
}
