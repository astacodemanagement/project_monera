<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimony;

class BerandaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Set page title and subtitle
        $title = "Parcel by Monera";
        $subtitle = "Menu Beranda";

        // Ambil produk dan urutkan berdasarkan created_at terbaru
        $produk = Product::orderBy('created_at', 'desc')->get();

        return view('front.beranda', compact(
            'produk',
            'title',
            'subtitle',
        ));
    }



    public function katalog()
    {
        // Set page title and subtitle
        $title = "Katalog - Parcel by Monera";
        $subtitle = "Menu Katalog";
        $produk = Product::all();
        return view('front.katalog', compact(
            'title',
            'subtitle',
            'produk',
        ));
    }

    public function katalog_detail($slug)
    {
        $title = "Halaman Produk Detail";
        $subtitle = "Menu Produk Detail";
        $produk = Product::where('slug', $slug)->firstOrFail();
        $produk_lain = Product::all();
        // $kategori_produk = KategoriProduk::all();
        return view('front.katalog_detail', compact(
            'title',
            'produk',
            'produk_lain',
            'subtitle',
           
        ));
    }

    public function testimoni()
    {
        // Set page title and subtitle
        $title = "Testimoni - Parcel by Monera";
        $subtitle = "Menu Testimoni";
        $data_testimonial = Testimony::all();


        return view('front.testimoni', compact(
            'data_testimonial',
            'title',
            'subtitle',
           
        ));
    }


    public function blog_detail_1()
    {
        // Set page title and subtitle
        $title = "Blog - Parcel by Monera";
        $subtitle = "Menu Blog";
        


        return view('front.blog_detail_1', compact(
            'title',
            'subtitle',
           
        ));
    }

    public function blog_detail_2()
    {
        // Set page title and subtitle
        $title = "Blog - Parcel by Monera";
        $subtitle = "Menu Blog";



        return view('front.blog_detail_2', compact(
            'title',
            'subtitle',

        ));
    }


   

    
}
