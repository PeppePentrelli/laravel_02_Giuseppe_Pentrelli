<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
// Funzioni Pagina Home

public function paginaHomeFunction() {

    return view('home');

}

// paginaChiSiamoFunction

public function paginaChiSiamoFunction() { 

    return view('chiSiamo');

}

}