<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Method ini menangani routing untuk semua halaman: /, /ticket, /about
    public function showPage(Request $request, $page = 'home')
    {
        $allowed_pages = ['home', 'ticket', 'about'];
        
        // Menentukan halaman dari URL, atau default ke 'home'
        if (empty($page) || !in_array($page, $allowed_pages)) {
            $page = 'home'; 
        }

        // Mengirim variabel $page ke view 'welcome'
        return view('welcome', ['page' => $page]);
    }
}