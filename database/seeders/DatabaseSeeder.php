<?php

namespace Database\Seeders;

use App\Models\Jenis;
use App\Models\User;
use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Blog::factory(50)->create();

        // $password = Hash::make('hanif');

    //    Jenis::create([
    //         'nama_jenis' => 'Teknologi',
    //     ]);
    //    Jenis::create([
    //         'nama_jenis' => 'Makanan',
    //     ]);
    //    Jenis::create([
    //         'nama_jenis' => 'Meme',
    //     ]);
    //    Jenis::create([
    //         'nama_jenis' => 'Personal',
    //     ]);
    //    Jenis::create([
    //         'nama_jenis' => 'Design',
    //     ]);
    }
}
