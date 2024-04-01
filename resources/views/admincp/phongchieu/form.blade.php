@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý phòng chiếu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route'=>'PhongChieu.store','method'=>'POST', 'enctype'=>"multipart/form-data"]) !!}
                        
                        <div class="form-group">
                            {!! Form::label('maphong', 'Mã phòng', []) !!}
                            {!! Form::text('maphong',null,['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'maphong'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tenphong', 'Tên phòng', []) !!}
                            {!! Form::text('tenphong',null,['class'=>'form-control','placeholder'=>'Nhập dữ liệu vào...','id'=>'tenphong'])!!}
                        </div>
                         
                       
                        {!!Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã phòng</th>
      <th scope="col">Tên phòng</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $key => $phongchieu)
    <tr>
      <td>{{$phongchieu->maphong}}</td>
      <td>{{$phongchieu->tenphong}}</td>

      <td>
        {!!Form::open([
            'method'=>'DELETE',
            
            'onsubmit'=>'return confirm("Bạn chắc chắn muốn xoá?")'
            ]) !!}
        {!!Form::submit('Xoá', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    @endforeach
    </tr>
    
  </tbody>
</table>
</div>
@endsection
