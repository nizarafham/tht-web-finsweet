<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs = [
        [
            'id' => 1,
            'title' => 'Design tips for designers that cover everything you need',
            'content' => 'This post covers essential design tips for beginners and professionals alike...',
            'category' => 'Startup',
            'author' => 'John Doe',
            'image' => '/images/blog1.jpg',
        ],
        [
            'id' => 2,
            'title' => 'How to build rapport with your web design clients',
            'content' => 'Building trust with clients is crucial for successful collaboration in web design...',
            'category' => 'Startup',
            'author' => 'Jane Smith',
            'image' => '/images/blog5.jpg',
        ],
        [
            'id' => 3,
            'title' => 'Logo design trends to avoid in 2022',
            'content' => 'In this post, we look at outdated logo trends you should steer clear of...',
            'category' => 'Startup',
            'author' => 'Michael Johnson',
            'image' => '/images/blog1.jpg',
        ],
        [
            'id' => 4,
            'title' => '8 Figma design systems you can download for free today',
            'content' => 'Figma is a powerful tool for designers. Here are 8 free design systems...',
            'category' => 'Startup',
            'author' => 'Emily Davis',
            'image' => '/images/blog5.jpg',
        ],
        [
            'id' => 5,
            'title' => 'Font sizes in UI design: The complete guide to follow',
            'content' => 'Choosing the right font sizes is critical for great user interfaces...',
            'category' => 'Startup',
            'author' => 'Alex Brown',
            'image' => '/images/blog1.jpg',
        ],

    ];

    public function index()
    {
        $blogs = $this->blogs;
        return view('blog.index', ['blogs' => $blogs]);

    }

    public function show($id)
    {
        $blog = collect($this->blogs)->firstWhere('id', $id);

        if (!$blog) {
            abort(404, 'Blog not found');
        }

        return view('blog.show', ['blog' => $blog]);
    }

    public function home()
    {
        $blogs = collect($this->blogs)->take(3); 
        return view('home.index', ['blogs' => $blogs]);
    }
}
