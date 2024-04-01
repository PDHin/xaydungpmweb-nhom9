<div class="content">

    <h2>PHIM SẮP CHIẾU</h2>
    <div class="phimsapchieu">
        <div class="danhsach">
        @foreach($sapchieu as $key => $ds)
            <div>
                <img src="../image/image_phim/{{$ds->poster}}" alt="{{$ds->poster}}" style="width:200px">
            <a href="{{route('details', $ds->maphim) }}">
                <p>{{$ds->tenphim}}</p>
            </a>
            </div>
           
        @endforeach
        </div>
    </div>
    <h2>PHIM ĐANG CHIẾU</h2>
    <div class="phimdangchieu">
        <div class="danhsach">
        @foreach($dangchieu as $key => $dsp)
            <div>
                <img src="../image/image_phim/{{$dsp->poster}}" alt="{{$dsp->poster}}" style="width:200px">
            <a href="{{route('details', $dsp->maphim)}}">
                <p>{{$dsp->tenphim}}</p>
            </a>
            </div>
           
        @endforeach
        </div>
    </div>
    

</div>
       