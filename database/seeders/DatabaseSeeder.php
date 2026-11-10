<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => 'password',
            ]
        );

        // Buat 20 buku hanya jika tabel buku masih kosong.
        if (!Book::exists()) {
            Book::factory(20)->create();
        }
    }
}
