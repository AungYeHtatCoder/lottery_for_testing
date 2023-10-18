<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{

public function fetchStockData() {
    $client = new Client();
    $response = $client->request('GET', 'https://api.thaistock2d.com/live');
    
    $data = json_decode($response->getBody(), true);
     if (request()->ajax()) {
        return response()->json($data);
    }
    return view('lottery', ['data' => $data]);
}


public function fetchHistory() {
    $response = Http::get('https://api.thaistock2d.com/2d_result');

    if ($response->successful()) {
        $data = $response->json();
        // Process and return the data as needed, e.g., passing it to a view
        return view('result', ['data' => $data]);
    }

    return back()->with('error', 'Failed to fetch stock data.');
}


}