<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }
    
    /**
     * Show the formulario page.
     */
    public function formulario() {
        return view('formulario');
    }
    
    /**
    /* Show the formulario page.
     */
    public function listado() {
        return view('listado');
    }


    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
