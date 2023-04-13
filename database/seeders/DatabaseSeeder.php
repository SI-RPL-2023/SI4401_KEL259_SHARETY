<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Berita::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Berita::factory(30)->create([
            'judul' => fake()->sentence(6, true),
            'slug' => fake()->slug(),
            'gambar' => fake()->imageUrl(640, 480, 'animals', true),
            'isi' => fake()->paragraph(10, false),
            'penulis' => fake()->name(),
            'sumber' => fake()->url(),
            'status' => fake()->randomElement(['publish', 'draft']),
            'kategori' => fake()->randomElement(['berita', 'artikel', 'tutorial']),
        ]);
    }
}
