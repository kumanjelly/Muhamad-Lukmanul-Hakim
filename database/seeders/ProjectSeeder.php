<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects [
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
[
    'title' => 'Sistem Informasi Akademik',
    'description' => 'Aplikasi berbasis web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
    'teknologi' => 'PHP, Laravel, MySQL,bootstrap',
    'image' => 'project1.jpg',
    'status' => 'selesai'
]
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
