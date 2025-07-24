<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function index()
    {
        $cars = [
            [
                'name'   => 'BYD SEAL',
                'image'  => 'images/detail-car/seal/seal-fix.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Premium (Extended Range)',
                        'specs' => [
                            'Torsi Maksimum 360 N.m',
                            'Daya Maksimum 230 kW',
                            'Jarak Mengemudi NEDC 650 km',
                            'Kapasitas Baterai 82.56 kWh',
                            '0-100 km/h 5.9s',
                        ],
                        'price' => 639_000_000,
                    ],
                    [
                        'type'  => 'Performance (AWD)',
                        'specs' => [
                            'Torsi Maksimum 670 N.m',
                            'Daya Maksimum 390 kW',
                            'Jarak Mengemudi NEDC 580 km',
                            'Kapasitas Baterai 82.56 kWh',
                            '0-100 km/h 3.8s',
                        ],
                        'price' => 750_000_000,
                    ],
                ],
            ],
            [
                'name'   => 'BYD ATTO 3',
                'image'  => 'images/detail-car/atto3/atto3-white-fix.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Advanced STD (Standard Range)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 410 km',
                            'Kapasitas Baterai 49.92 kWh',
                            '0-100 km/h 7.9s',
                        ],
                        'price' => 390_000_000,
                    ],
                    [
                        'type'  => 'Superior (Extended Range)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 480 km',
                            'Kapasitas Baterai 60.48 kWh',
                            '0-100 km/h 7.3s',
                        ],
                        'price' => 520_000_000,
                    ],
                ],
            ],
            [
                'name'   => 'BYD DOLPHIN',
                'image'  => 'images/detail-car/dolphin/dolphin-fix.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Dynamic (Standard Range)',
                        'specs' => [
                            'Torsi Maksimum 180 N.m',
                            'Daya Maksimum 70 kW',
                            'Jarak Mengemudi NEDC 410 km',
                            'Kapasitas Baterai 44.9 kWh',
                            '0-100 km/h 12.3s',
                        ],
                        'price' => 369_000_000,
                    ],
                    [
                        'type'  => 'Premium (Extended Range)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 490 km',
                            'Kapasitas Baterai 60.48 kWh',
                            '0-100 km/h 7.0s',
                        ],
                        'price' => 429_000_000,
                    ],
                ],
            ],
            [
                'name'   => 'BYD M6',
                'image'  => 'images/detail-car/m6/m6-blue-fix-fixed.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Standard (7 Seater)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 120 kW',
                            'Jarak Mengemudi NEDC 420 km',
                            'Kapasitas Baterai 55.4 kWh',
                            '0-100 km/h 10.1s',
                        ],
                        'price' => 383_000_000,
                    ],
                    [
                        'type'  => 'Superior (7 Seater)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 530 km',
                            'Kapasitas Baterai 71.8 kWh',
                            '0-100 km/h 8.6s',
                        ],
                        'price' => 423_000_000,
                    ],
                    [
                        'type'  => 'Superior Captain (7 Seater)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 530 km',
                            'Kapasitas Baterai 71.8 kWh',
                            '0-100 km/h 8.6s',
                        ],
                        'price' => 433_000_000,
                    ],
                    [
                        'type'  => 'Superior Captain (7 Seater)',
                        'specs' => [
                            'Torsi Maksimum 310 N.m',
                            'Daya Maksimum 150 kW',
                            'Jarak Mengemudi NEDC 530 km',
                            'Kapasitas Baterai 71.8 kWh',
                            '0-100 km/h 8.6s',
                        ],
                        'price' => 433_000_000,
                    ],
                ],
            ],
            [
                'name'   => 'BYD Sealion 7',
                'image'  => 'images/detail-car/sealion7/sealion7-2.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Standard (5 Seater)',
                        'specs' => [
                            'Torsi Maksimum 380 N.m',
                            'Daya Maksimum 230 kW',
                            'Jarak Mengemudi NEDC 567 km',
                            'Kapasitas Baterai 82.56 kWh',
                            '0-100 km/h 6.7s',
                        ],
                        'price' => 629_000_000,
                    ],
                    [
                        'type'  => 'Performance (7 Seater)',
                        'specs' => [
                            'Torsi Maksimum 690 N.m',
                            'Daya Maksimum 390 kW',
                            'Jarak Mengemudi NEDC 542 km',
                            'Kapasitas Baterai 82.56 kWh',
                            '0-100 km/h 4.5s',
                        ],
                        'price' => 719_000_000,
                    ],
                ],
            ],
            [
                'name'   => 'BYD ATTO 1',
                'image'  => 'images/detail-car/atto1/atto1.png',
                'wa'     => '6287855500627',
                'variants' => [
                    [
                        'type'  => 'Dynamic (Standard Range)',
                        'specs' => [
                            'Torsi Maksimum 135 N.m',
                            'Daya Maksimum 55 kW',
                            'Jarak Mengemudi NEDC 300 km',
                            'Kapasitas Baterai 30.08 kWh',
                            '0-100 km/h 4.9s',
                        ],
                        'price' => 195_000_000,
                    ],
                    [
                        'type'  => 'Premium (Long Range)',
                        'specs' => [
                            'Torsi Maksimum 135 N.m',
                            'Daya Maksimum 55 kW',
                            'Jarak Mengemudi NEDC 380 km',
                            'Kapasitas Baterai 38.88 kWh',
                            '0-100 km/h 4.9s',
                        ],
                        'price' => 235_000_000,
                    ],
                ],
            ],
        ];


        return view('front-end-user/byd-pricelist', compact('cars'));
    }
}
