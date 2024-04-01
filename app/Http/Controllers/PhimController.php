<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Phim;
use App\Http\Controllers\File;
use Illuminate\Support\Facades\DB;
class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function show(Phim $phim)
    {

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds = Phim::all();
        return view('admincp.phim.form', compact('ds'));

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
        $phim = new Phim();
        $phim->tenphim = $data['tenphim'];
        $phim->mota = $data['mota'];
        $phim->daodien = $data['daodien'];
        $phim->dienvien = $data['dienvien'];
        $phim->theloai = $data['theloai'];
        $phim->poster = $data['poster'];
        $phim->thoiluongphim = $data['thoiluongphim'];
        
        $request->validate([
            'ngayphathanh' => 'required|date']);
        $phim->ngayphathanh = $request->input('ngayphathanh');
        $get_image = $request->file('poster');
        $path = 'image/image_phim/';
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $phim->poster = $new_image;
        }
        $phim->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($maphim)
    {
        $phim = Phim::find($maphim);
        $ds = Phim::all();
        return view('admincp.phim.form', compact('ds','phim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maphim)
    {
        $data = $request->all();
        $phim = Phim::find($maphim);
        $phim->tenphim = $data['tenphim'];
        $phim->mota = $data['mota'];
        $phim->daodien = $data['daodien'];
        $phim->dienvien = $data['dienvien'];
        $phim->theloai = $data['theloai'];
        $phim->poster = $data['poster'];
        $phim->thoiluongphim = $data['thoiluongphim'];
        
        $request->validate([
            'ngayphathanh' => 'required|date']);
        $phim->ngayphathanh = $request->input('ngayphathanh');
        $get_image = $request->file('poster');
        $path = 'image/image_phim/';
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $phim->poster = $new_image;
        }
        $phim->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($maphim)
    {
        Phim::find($maphim)->delete();
        return redirect()->back();
    }
}
