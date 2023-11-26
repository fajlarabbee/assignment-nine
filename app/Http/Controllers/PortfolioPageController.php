<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function index()
    {

        $data = [
            'portfolio_items' => []
        ];
        for($i = 0; $i <10; $i++) {

            $randomSize = floor(rand(400, 600));
            $data['portfolio_items'][] = [
                'featured_image' => 'https://picsum.photos/800/' . $randomSize,
                'name' => fake()->sentence(2),
                'category' => fake()->randomElement(['Coding', 'Fixing', 'Design', 'Theme Development', 'Plugin Development']),
                'icon' => fake()->randomElement(['la-camera-retro', 'la-video-camera', 'la-music']),
            ];
        }

        return view('pages.portfolio', $data);
    }
}
