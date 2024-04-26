<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteComponentController extends Controller
{
    public function home()
    {
        return view('inheritance.home');
    }

    public function Portfolio()
    {
        return view('component.portfolio', [
            'pagination' => true,
            'projects' => [
                [
                    'active' => true,
                    'image' => 'cabin.png'
                ],
                [
                    'active' => true,
                    'image' => 'cake.png'
                ],
                [
                    'active' => true,
                    'image' => 'circus.png'
                ],
                [
                    'active' => false,
                    'image' => 'game.png'
                ],
                [
                    'active' => true,
                    'image' => 'safe.png'
                ],
                [
                    'active' => true,
                    'image' => 'submarine.png'
                ]
            ]
        ]);
    }

    public function About()
    {
        return view('component.about');
    }

    public function Contact()
    {
        return view('component.contact');
    }
}
