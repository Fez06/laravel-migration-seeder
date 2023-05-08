<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = Train::all();
        // $trains = Train::where('departure_time','>=', Carbon::today());

        return view('home', compact('trains'));
    }
}
