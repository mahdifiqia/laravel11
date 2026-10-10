<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Sistem Informasi AKademik',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahas...',
                'tech' => 'Laravel & Bootstrap',
                'image' => 'https://via.placeholder.com/300x180' // Ganti dengan path/URL gambar kamu
            ],
            [
                'id' => 2,
                'title' => 'E-Commerce SEO Optimization',
                'status' => 'In progress',
                'status_color' => 'bg-success',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexin...',
                'tech' => 'PHP & Google Search Console',
                'image' => 'https://via.placeholder.com/300x180'
            ],
            [
                'id' => 3,
                'title' => 'Redesign COver dan Branding',
                'status' => 'Selesai',
                'status_color' => 'bg-success',
                'description' => 'Perancangan element grafis personal branding dan...',
                'tech' => 'Figma & Canva',
                'image' => 'https://via.placeholder.com/300x180'
            ],
        ];

        return view('project', compact('projects'));
    }
}