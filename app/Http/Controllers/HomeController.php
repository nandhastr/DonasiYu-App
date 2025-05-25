<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index(){
       
    $carouselItem = [
        [
            "id" => 1,
            "img" => asset('/image/donate/donasi-1.jpg'),
            "title" => "Ulurkan Tanganmu",
            "desc" => "Tanganmu harapan orang yang membutuhkan."
        ],
        [
                "id" => 2,
            "img" => asset('/image/donate/donasi-2.jpg'),
            "title" => "Second slide label",
            "desc" => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ],
        [
                "id" => 3,
            "img" => asset('/image/donate/donasi-3.jpg'),
            "title" => "Third slide label",
            "desc" => "Some representative placeholder content for the third slide."
        ]
    ];

    $cardItem = [
        [
            "id" => 1,
            "img" => asset('/image/donate/donasi-bencana.jpg'),
            "title" => "Ulurkan Tanganmu",
            "desc" => "Tanganmu harapan orang yang membutuhkan."
        ],
        [
            "id" => 2,
            "img" => asset('/image/donate/donasi-darurat.jpg'),
            "title" => "Ulurkan Tanganmu",
            "desc" => "Tanganmu harapan orang yang membutuhkan."
        ],
        [
            "id" => 3,
            "img" => asset('/image/donate/donasi-kesehatan.jpg'),
            "title" => "Ulurkan Tanganmu",
            "desc" => "Tanganmu harapan orang yang membutuhkan."
        ],
        [
            "id" => 4,
            "img" => asset('/image/donate/donasi-pendidikan.jpg'),
            "title" => "Ulurkan Tanganmu",
            "desc" => "Tanganmu harapan orang yang membutuhkan."
        ],

        ];

    $data = [
        'carouselItem' => $carouselItem,
        'cardItem' => $cardItem
    ];

    return view('pages.Dashboard.page', $data);
    }
}
