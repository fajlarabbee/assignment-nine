<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index()
    {
        $data = [
            'blog_items' => []
        ];

        for($i = 0; $i < 5; $i++) {
            $date = Carbon::now()->subDays(rand(0, 180));
            $randomSize = floor(rand(375, 380));

            $data['blog_items'][] = [
                'featured_image' => 'https://picsum.photos/800/' . $randomSize,
                'title' => fake()->sentence(),
                'category' => fake()->randomElement(['Coding', 'Fixing', 'Design', 'Theme Development', 'Plugin Development']),
                'date' => [
                    'month' => $date->format('M'),
                    'day' => $date->day
                ]
            ];
        }
        return view('pages.blog',$data);
    }
}
