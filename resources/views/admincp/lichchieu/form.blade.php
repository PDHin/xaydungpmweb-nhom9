@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý lịch chiếu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (!isset($lichchieu))
                    {!! Form::open(['route'=>'LichChieu.store','method'=>'POST', 'enctype'=>"multipart/form-data"]) !!}
                    @else
                    {!! Form::open(['route'=>['LichChieu.update',$lichchieu->malich],'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('maphim', 'Tên phim', []) !!}
                            {!! Form::select('maphim', $phim, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('maphong', 'Tên phòng', []) !!}
                            {!! Form::select('maphong', $phongchieu, null, ['class' => 'form-control']) !!}
                        </div>
                         <div class="form-group">
                            {!! Form::label('ngaychieu', 'Ngày chiếu', []) !!}
                            {!! Form::input('date', 'ngaychieu', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('giochieu', 'Giờ chiếu', []) !!}
                            {!! Form::input('time', 'giochieu', null, ['class' => 'form-control']) !!}
                        </div>
                        
                       
                        @if(!isset($lichchieu))
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
      <th scope="col">Mã phim</th>
      <th scope="col">Mã phòng</th>
      <th scope="col">Ngày chiếu</th>
      <th scope="col">Giờ chiếu</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $key => $lichchieu)
    <tr>
      <td scope="row">{{$lichchieu->malich}}</td>
      <td>{{$lichchieu->maphim}}</td>
      <td>{{$lichchieu->maphong}}</td>
      <td>{{$lichchieu->ngaychieu}}</td>
      <td>{{$lichchieu->giochieu}}</td>

      <td>
        {!!Form::open([
            'method'=>'DELETE',
            'route'=>['LichChieu.destroy',$lichchieu->malich],
            'onsubmit'=>'return confirm("Bạn chắc chắn muốn xoá?")'
            ]) !!}
        {!!Form::submit('Xoá', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
        <a href="{{route('LichChieu.edit', $lichchieu->malich)}}" class="btn btn-warning">Sửa</a>
      </td>
    @endforeach
    </tr>
    
  </tbody>
</table>
</div>
@endsection
