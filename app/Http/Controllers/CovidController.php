<?php

namespace App\Services;

use Illuminate\View\View;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class CovidStatisticService
{
    public function getTotalCasesByCountryAndType($country, $type)
    {
        $today = Carbon::now()->toDateString();

        $httpClient = new \GuzzleHttp\Client();
        $request =
            $httpClient
                ->get("https://api.covid19api.com/total/country/${country}/status/${type}?from=${today}&to=${today}");

        $response = json_decode($request->getBody()->getContents());

        return $response[count($response) - 1];
    }

}



class CovidController extends Controller
{
    public function index(CovidStatisticService $covidStatisticService) {
        $today = Carbon::now()->toDateString();

        $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'confirmed');
        $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'recovered');
        $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'deaths');

        return view('index', [
            'today' => $today,
            'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday,
            'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday,
            'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday,
        ]);
    }
}
