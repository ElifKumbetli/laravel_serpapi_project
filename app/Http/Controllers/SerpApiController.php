<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SerpApiController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function results(Request $request)
    {
        $keyword = $request->input('keyword');
        $location = $request->input('location', 'Türkiye');
        $apiKey = env('SERPAPI_KEY'); // .env dosyasından API anahtarını al

        // API isteğini oluştur
        $url = "https://serpapi.com/search.json?engine=google&q=" . urlencode($keyword) .
               "&location=" . urlencode($location) . "&hl=tr&gl=tr&api_key=" . $apiKey;

        $response = Http::get($url);
        $data = $response->json();
        $ranking = 'Bulunamadı';

        if ($data && isset($data['organic_results'])) {
            foreach ($data['organic_results'] as $index => $result) {
                $title = strtolower($result['title']);
                $snippet = isset($result['snippet']) ? strtolower($result['snippet']) : "";

                if (stripos($title, strtolower($keyword)) !== false || stripos($snippet, strtolower($keyword)) !== false) {
                    $ranking = $index + 1;
                    break;
                }
            }
        }

        return view('results', compact('keyword', 'location', 'ranking', 'data'));
    }
}
