<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{


    //! 3lahch ma khdamach __construct() ola global ola $GLOBALS['']
    function showProducts()
    {
        $allProducts = [
            "PC-H" => [
                [

                    "img" => "/img/img1.jpg",
                    "nom" => "MacBook",
                    "desc" => "Core i5 7th",
                    "price" => 3900,
                    "Categorie" => "PC-(HDD)"
                ],
                [

                    'img' => "/img/img7.jpg",
                    'nom' => "EliteBook",
                    'desc' => "Core i7 7th",
                    'price' => 4000,
                    'Categorie' => "PC-(HDD)"
                ], [

                    "img" => "/img/img3.jpg",
                    "nom" => "Hp",
                    "desc" => "Core i5 6th",
                    "price" => 5000,
                    "Categorie" => "PC-(HDD)"
                ], [

                    'img' => "/img/img5.jpg",
                    'nom' => "Lenovo",
                    'desc' => "Core i7 7th",
                    'price' => 4000,
                    'Categorie' => "PC-(HDD)"
                ],
            ],
            "PC-S" => [
                [

                    "img" => "/img/img2.jpg",
                    "nom" => "Dell",
                    "desc" => "Pro 12.3",
                    "price" => 4000,
                    "Categorie" => "PC-(SSD)"
                ],

                [

                    'img' => "/img/img4.jpg",
                    'nom' => "Toshiba",
                    'desc' => "Core i5 7th",
                    'price' => 3990,
                    'Categorie' => "PC-(SSD)"
                ],

                [

                    'img' => "/img/img6.jpg",
                    'nom' => "ZenBook",
                    'desc' => "Core i7 7th",
                    'price' => 4000,
                    'Categorie' => "PC-(SSD)"
                ],

                [

                    'img' => "/img/img8.jpg",
                    'nom' => "Mac M1",
                    'desc' => "Pro 11",
                    'price' => 4000,
                    'Categorie' => "PC-(SSD)"
                ]
            ],
            "Phones" => [
                [

                    'img' => "/img/img9.jpg",
                    'nom' => "Samsung S10",
                    'desc' => "256 GD",
                    'price' => 4000,
                    'Categorie' => "Phones"
                ],
                [

                    'img' => "/img/img10.jpg",
                    'nom' => "Iphone 12",
                    'desc' => "500 GB",
                    'price' => 5000,
                    'Categorie' => "Phones"
                ], [

                    'img' => "/img/img11.png",
                    'nom' => "Iphone 14",
                    'desc' => "500 GB",
                    'price' => 14000,
                    'Categorie' => "Phones"
                ], [

                    'img' => "/img/img12.jpg",
                    'nom' => "Samsung S20 Ultra",
                    'desc' => "256 Gb",
                    'price' => 4000,
                    'Categorie' => "Phones"
                ]
            ],
            "Camera" => [
                [

                    'img' => "/img/img13.jpg",
                    'nom' => "Canon",
                    'desc' => "7500 HD",
                    'price' => 4000,
                    'Categorie' => "Camera"
                ], [

                    'img' => "/img/img14.jpg",
                    'nom' => "Nikon",
                    'desc' => "2500 HD",
                    'price' => 4000,
                    'Categorie' => "Camera"
                ], [

                    'img' => "/img/img15.webp",
                    'nom' => "Canon",
                    'desc' => "2500 HD",
                    'price' => 4000,
                    'Categorie' => "Camera"
                ], [

                    'img' => "/img/img16.jpg",
                    'nom' => "Nikon",
                    'desc' => "7500 HD",
                    'price' => 4000,
                    'Categorie' => "Camera"
                ]

            ]
        ];

        return view("Store.store", ['products' => $allProducts]);
    }

    public function showCameras()
    {
        $cameras = [
            [

                'img' => "/img/img13.jpg",
                'nom' => "Canon",
                'desc' => "7500 HD",
                'price' => 4000,
                'Categorie' => "Camera"
            ], [

                'img' => "/img/img14.jpg",
                'nom' => "Nikon",
                'desc' => "2500 HD",
                'price' => 4000,
                'Categorie' => "Camera"
            ], [

                'img' => "/img/img15.webp",
                'nom' => "Canon",
                'desc' => "2500 HD",
                'price' => 4000,
                'Categorie' => "Camera"
            ], [

                'img' => "/img/img16.jpg",
                'nom' => "Nikon",
                'desc' => "7500 HD",
                'price' => 4000,
                'Categorie' => "Camera"
            ]

        ];
        return view('Store.camera', ['Data' => $cameras]);
    }

    public function showLaps()
    {
        $laps = [
            [

                "img" => "/img/img2.jpg",
                "nom" => "Dell",
                "desc" => "Pro 12.3",
                "price" => 4000,
                "Categorie" => "PC-(SSD)"
            ],

            [

                'img' => "/img/img4.jpg",
                'nom' => "Toshiba",
                'desc' => "Core i5 7th",
                'price' => 3990,
                'Categorie' => "PC-(SSD)"
            ],

            [

                'img' => "/img/img6.jpg",
                'nom' => "ZenBook",
                'desc' => "Core i7 7th",
                'price' => 4000,
                'Categorie' => "PC-(SSD)"
            ],

            [

                'img' => "/img/img8.jpg",
                'nom' => "Mac M1",
                'desc' => "Pro 11",
                'price' => 4000,
                'Categorie' => "PC-(SSD)"
            ], [

                "img" => "/img/img1.jpg",
                "nom" => "MacBook",
                "desc" => "Core i5 7th",
                "price" => 3900,
                "Categorie" => "PC-(HDD)"
            ],
            [

                'img' => "/img/img7.jpg",
                'nom' => "EliteBook",
                'desc' => "Core i7 7th",
                'price' => 4000,
                'Categorie' => "PC-(HDD)"
            ], [

                "img" => "/img/img3.jpg",
                "nom" => "Hp",
                "desc" => "Core i5 6th",
                "price" => 5000,
                "Categorie" => "PC-(HDD)"
            ], [

                'img' => "/img/img5.jpg",
                'nom' => "Lenovo",
                'desc' => "Core i7 7th",
                'price' => 4000,
                'Categorie' => "PC-(HDD)"
            ]
        ];

        return view('Store.laps', ['All' => $laps]);
    }

    public function showPhones()
    {
        $phones = [
            [

                'img' => "/img/img9.jpg",
                'nom' => "Samsung S10",
                'desc' => "256 GD",
                'price' => 4000,
                'Categorie' => "Phones"
            ],
            [

                'img' => "/img/img10.jpg",
                'nom' => "Iphone 12",
                'desc' => "500 GB",
                'price' => 5000,
                'Categorie' => "Phones"
            ], [

                'img' => "/img/img11.png",
                'nom' => "Iphone 14",
                'desc' => "500 GB",
                'price' => 14000,
                'Categorie' => "Phones"
            ], [

                'img' => "/img/img12.jpg",
                'nom' => "Samsung S20 Ultra",
                'desc' => "256 Gb",
                'price' => 4000,
                'Categorie' => "Phones"
            ]
        ];

        return view('Store.phones', ['All' => $phones]);
    }
}
