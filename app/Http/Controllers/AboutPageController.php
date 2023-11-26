<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        $data = [ 'service_items' => [
            [
                'title' => 'Web Development',
                'description'=> 'Modern and mobile-ready website that will help of your marketing.',
                'icon' => 'la-html5'
            ],
            [
                'title' => 'WP Plugin Development',
                'description'=> 'Create plugin for you WordPress website as per the requirements',
                'icon' => 'la-wordpress'
            ],
            [
                'title' => 'WP Theme Development',
                'description'=> 'Modern and intuitive WordPress theme that will reflect your brand.',
                'icon' => 'la-code'
            ],
            [
                'title' => 'Bug Fixing',
                'description'=> 'Fix bug in your existing WordPress Theme or Plugin system.',
                'icon' => 'la-bug'
            ],
            [
                'title' => 'Custom PHP Development',
                'description'=> 'Get your custom application build with the powerfull support of PHP.',
                'icon' => 'la-code'
            ],
            [
                'title' => 'Laravel App/Package',
                'description'=> 'Create your desired app using Laravel or develop package that can be used in your projects.',
                'icon' => 'la-code'
            ],
        ]
        ];
        return view('pages.about', $data);
    }
}
