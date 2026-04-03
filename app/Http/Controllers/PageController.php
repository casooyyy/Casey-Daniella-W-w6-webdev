<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $packages = [
            [
            "title" => "High Quality Prints",
            "description" => "Studio-quality lighting and professional DSLR cameras ensure your guests look their best."
            ],
            [
            "title" => "Custom Props",
            "description" => "A huge variety of fun, quirky, and themed props tailored for your specific event."
            ],
            [
            "title" => "Instant Sharing",
            "description" => "Share photos instantly via email or QR code direct from the photobooth screen."
            ]
        ];
        return view('index', compact('packages'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {

        $packages = [
            [
            "title" => "Basic Snap",
            "price" => "Rp 1.500.000",
            "hours" => "2 hours",
            "list" => [
                "Unlimited Prints (2x6)",
                "Standard Backdrop",
                "Fun Props Set",
                "Online Gallery",
            ],
            "code" => "basic"
            ],

            [
            "title" => "Premium Joy",
            "price" => "Rp 2.500.000",
            "hours" => "4 hours",
            "list" => [
                "Unlimited Premium Prints (4x6)",
                "Custom Premium Backdrop",
                "Themed High-End Props",
                "Boomerang & GIF Creation",
                "Scrapbook Station",

            ],
            "code" => "premium"
            ],
            [
            "title" => "Wedding VIP",
            "price" => "Rp 4.000.000",
            "hours" => "6 hours",
            "list" => [
                "Everything in Premium",
                "360 Video Booth Included",
                "Custom Photo Template Design",
                "Instant Social Media Sharing Kiosk",
                "Idle Time (1 hour free)",
            ],
            "code" => "vip"
        ]
        ];
        return view('services', compact('packages'));

    }

    public function contact()
    {
        return view('contact');
    }
}
