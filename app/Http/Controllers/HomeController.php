<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo_page = 'fa-home';
        $name_page = 'Inicio';
        $description_page = 'Pagina principal del sitio';
        $route_page = 'Inicio';
        return view('pages.home')->with([
            'name_page' => $name_page,
            'description_page' => $description_page,
            'route_page' => $route_page,
            'logo_page' => $logo_page
        ]);
    }
}
