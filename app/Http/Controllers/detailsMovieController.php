<?php

namespace App\Http\Controllers;

use App\Models\LichChieu;
use App\Models\Phim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class detailsMovieController extends Controller
{
    public function show($maphim)
    {
        $phim = Phim::find($maphim);
        $danhSachGioChieu = LichChieu::where('maphim', $maphim)->orderBy('giochieu','ASC')->get();
        return view('pages.detailsMovie',compact('phim','danhSachGioChieu'));
    }
    
    
}

?>