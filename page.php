<?php

namespace App\Controllers;

class Page extends BaseController
{

    public function about()
    {
       return view('about',['title' => 'Halaman about','content' => 'Ini adalah Halaman About']);
    }
    public function contact()
    {
        echo "ini halaman contact";
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini  adalah halaman term of services";
    }
    
    
}