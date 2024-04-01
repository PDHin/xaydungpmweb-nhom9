@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý phim</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($phim))
                    {!! Form::open(['route'=>'Phim.store','method'=>'POST', 'enctype'=>"multipart/form-data"]) !!}
                       @else
                       {!! Form::open(['route'=>['Phim.update',$phim->maphim],'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('tenphim', 'Tên phim', []) !!}
                            {!! Form::text('tenphim',isset($phim) ? $phim->tenphim : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'tenphim'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mota', 'Nội dung phim', []) !!}
                            {!! Form::textarea('mota',isset($phim) ? $phim->mota : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'mota'])!!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('ngayphathanh', 'Ngày phát hành', []) !!}
                            {!! Form::input('date', 'ngayphathanh', isset($phim) ? $phim->ngayphathanh : '', ['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('daodien', 'Đạo diễn', []) !!}
                            {!! Form::text('daodien',isset($phim) ? $phim->daodien : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'daodien'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dienvien', 'Diễn viên', []) !!}
                            {!! Form::text('dienvien',isset($phim) ? $phim->dienvien : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'dienvien'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('theloai', 'Thể loại', []) !!}
                            {!! Form::text('theloai',isset($phim) ? $phim->theloai : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'theloai'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('poster', 'Poster phim', []) !!}
                            {!! Form::file('poster',['class'=>'form-control-file'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('thoiluongphim', 'Thời lượng phim', []) !!}
                            {!! Form::text('thoiluongphim',isset($phim) ? $phim->thoiluongphim : '',['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'thoiluongphim'])!!}
                        </div>
                        @if(!isset($phim))
                        {!!Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                        @else
                        {!!Form::submit('Cập nhật', ['class'=>'btn btn-success']) !!}
                        @endif
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên phim</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Poster</th>
      <th scope="col">Diễn viên</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $key => $dsphim)
    <tr>
      <td scope="row">{{$dsphim->maphim}}</td>
      <td>{{$dsphim->tenphim}}</td>
      <td>{{$dsphim->theloai}}</td>
      <td><img src="../../image/image_phim/{{$dsphim->poster}}" alt="{{$dsphim->poster}}" style="width:80px">
        </td>
      <td>{{$dsphim->dienvien}}</td>
      <td>
        {!!Form::open([
            'method'=>'DELETE',
            'route'=>['Phim.destroy',$dsphim->maphim],
            'onsubmit'=>'return confirm("Bạn chắc chắn muốn xoá?")'
            ]) !!}
        {!!Form::submit('Xoá', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
        <a href="{{route('Phim.edit', $dsphim->maphim)}}" class="btn btn-warning">Sửa</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection
