<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            [
                'nama_kategori' => 'Teknologi',
                'deskripsi' => 'Kategori buku yang membahas teknologi informasi, pemrograman, dan sistem komputer.'
            ],
            [
                'nama_kategori' => 'Sains',
                'deskripsi' => 'Kategori buku yang membahas ilmu pengetahuan alam seperti fisika, kimia, dan biologi.'
            ],
            [
                'nama_kategori' => 'Sastra',
                'deskripsi' => 'Kategori buku yang membahas karya sastra, novel, puisi, dan bahasa.'
            ],
        ]);
    }
}
