<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restoran;

class CustomerController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        return view('customer.home');
    }

    /*
    |--------------------------------------------------------------------------
    | RESTO
    |--------------------------------------------------------------------------
    */

    public function resto()
    {
        $restorans = Restoran::all();

        return view('customer.resto', compact('restorans'));
    }

    /*
    |--------------------------------------------------------------------------
    | MENU
    |--------------------------------------------------------------------------
    */

    public function menu()
    {
        $menus = Menu::all();

        /*
        |--------------------------------------------------------------------------
        | GAMBAR MANUAL DI CODE
        |--------------------------------------------------------------------------
        */

        $gambarMenu = [

            'Burger Duo' =>
            'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1200',

            'Petook' =>
            'https://images.unsplash.com/photo-1513639776629-7b61b0ac49cb?q=80&w=1200',

            'Petook Duo' =>
            'https://images.unsplash.com/photo-1562967916-eb82221dfb92?q=80&w=1200',

            'Big Treat 1' =>
            'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=1200',

            'Big Treat 2' =>
            'https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200',

        ];

        return view('customer.menu', compact(
            'menus',
            'gambarMenu'
        ));
    }
}