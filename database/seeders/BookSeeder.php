<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $book = [
            [
                'judul' => 'Laravel dan PHP',
                'pengarang' => 'pen name',
                'tahun_terbit' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'NextJs dan Javascript',
                'pengarang' => 'pen name',
                'tahun_terbit' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('buku')->insert($book);
    }
}
