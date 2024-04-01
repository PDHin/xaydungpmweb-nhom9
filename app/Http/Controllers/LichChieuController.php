<?php

namespace App\Http\Controllers;

use App\Models\LichChieu;
use App\Models\Phim;
use App\Models\PhongChieu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class LichChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds = LichChieu::all();
        $phim = Phim::all()->pluck('tenphim', 'maphim');
        $phongchieu = PhongChieu::all()->pluck('tenphong', 'maphong');

        return view('admincp.lichchieu.form', compact('ds','phim','phongchieu'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $lichchieu = new LichChieu();
        $lichchieu->maphim = $data['maphim'];
        $lichchieu->maphong = $data['maphong'];
        $request->validate([
            'ngaychieu' => 'required|date',
        ]);
        $lichchieu->giochieu = $data['giochieu'];
        $lichchieu->ngaychieu = $request->input('ngaychieu');
        $lichchieu->giochieu = $request->input('giochieu');
        
        $lichchieu->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($malich)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ds = LichChieu::all();
        $phim = Phim::all()->pluck('tenphim', 'maphim');
        $lichchieu=LichChieu::find($id);
        $phongchieu = PhongChieu::all()->pluck('tenphong', 'maphong');

        return view('admincp.lichchieu.form', compact('ds','phim','phongchieu','lichchieu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $lichchieu = LichChieu::find($id);
        $lichchieu->maphim = $data['maphim'];
        $lichchieu->maphong = $data['maphong'];
        $request->validate([
            'ngaychieu' => 'required|date',
        ]);
        $lichchieu->giochieu = $data['giochieu'];
        $lichchieu->ngaychieu = $request->input('ngaychieu');
        $lichchieu->giochieu = $request->input('giochieu');
        
        $lichchieu->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LichChieu::find($id)->delete();
        return redirect()->back();
    }
}
?>