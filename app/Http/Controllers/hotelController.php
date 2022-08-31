<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class hotelController extends Controller
{
    public function index()
    {

  Http::withHeaders(
    [
        'X-RapidAPI-Host: booking-com.p.rapidapi.com',
		'X-RapidAPI-Key: 5c9e25cd60msh486d28ca63426b8p191e48jsn7d5cbb44153d',
    ]
   )->get('https://booking-com.p.rapidapi.com/v1/metadata/exchange-rates?currency=USD&locale=en-us');

    }
}
