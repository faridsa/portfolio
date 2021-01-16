<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Slide;
use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::published()
            ->inRandomOrder()
            ->take(6)
            ->get();
        $browser = new Agent();
        SEOMeta::setKeywords("fotografia, imagen, foto, publicidad, gastronomia, alimento, bebida, comida, modelo, producto, arte, arte fotografico");
        SEO::setDescription("Fotografo publicitario especializado en temas gastronómicos, modelos y productos");
        SEO::jsonLd()->addImage($slides[0]->image_desktop);
        return view('front.home', compact('browser', 'slides'));
    }

    public function bio()
    {
        $slides = Slide::published()
            ->inRandomOrder()
            ->take(6)
            ->get();
        $browser = new Agent();
        SEOMeta::setKeywords("fotografia, imagen, foto, publicidad, gastronomia, alimento, bebida, comida, modelo, producto, arte, arte fotografico");
        SEO::setDescription("Biografía de Carlos Fadigatim, Fotografo publicitario especializado en temas gastronómicos, modelos y productos");
        SEO::jsonLd()->addImage($slides[0]->image_desktop);
        return view('front.bio', compact('browser', 'slides'));
    }
}