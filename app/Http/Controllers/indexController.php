<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home(){
        $sapchieu = Phim::orderBy('ngayphathanh','DESC')->limit(4)->get(); 
        $dangchieu = Phim::orderBy('ngayphathanh','ASC')->limit(4)->GET();
        return view('welcome', compact('sapchieu','dangchieu'));

    }
}
?>