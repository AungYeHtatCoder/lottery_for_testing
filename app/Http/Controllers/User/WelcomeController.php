<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Lottery;
use App\Models\Admin\Category;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $lotteries = Lottery::whereHas('category', function ($query) {
        $query->where('category_name', 'Thai_Lottery_Simple');
    })->paginate(6);

    $lottery_air = Lottery::whereHas('category', function ($query) {
        $query->where('category_name', 'Thai_Lottery_Air');
    })->paginate(6);

    $lottery_3d = Lottery::whereHas('category', function ($query) {
        $query->where('category_name', 'Thai_3D');
    })->paginate(6);

    $lottery_singapore = Lottery::whereHas('category', function ($query) {
        $query->where('category_name', 'Singapore_Lottery');
    })->paginate(6);

    return view('welcome', compact('lotteries', 'lottery_air', 'lottery_3d', 'lottery_singapore'));
}

//    public function index()
// {
//     $lotteries = Lottery::whereHas('category', function ($query) {
//         $query->where('category_name', 'Thai_Lottery_Simple');
//     })->get();

//     $lottery_air = Lottery::whereHas('category', function ($query) {
//         $query->where('category_name', 'Thai_Lottery_Air');
//     })->get();

//     $lottery_3d = Lottery::whereHas('category', function ($query) {
//         $query->where('category_name', 'Thai_3D');
//     })->get();
//     $lottery_singapore = Lottery::whereHas('category', function ($query) {
//         $query->where('category_name', 'Singapore_Lottery');
//     })->get();
//     return view('welcome', compact('lotteries', 'lottery_air', 'lottery_3d', 'lottery_singapore'));
// }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}