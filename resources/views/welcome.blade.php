<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js / bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">

    
    <title>Cinema</title>
</head>
<body>
    
  <header>
    
        <div>
            <div class="top-logo">
                <img src="image/logo.png" alt="">
            </div>
            <div class="top-menu">
                <a href="">PHIM</a>
                <a href="">RẠP</a>
                <a href="">SỰ KIỆN</a>
                <a href="">TUYỂN DỤNG</a>
            </div>
            <div class="top-timkiem">
              <div class="box">
                <div class="container-1">
                    <input type="search" id="search" placeholder="Tìm kiếm..." />
                </div>
              </div>
            </div>
            <div class="top-login">
      <div class="dropdown">
        <button class="dropbtn"> 
          <div class="fa fa-user">
            <p>
              @if(Auth::user())  {{Auth::user()->name}} @endif
            </p>
            </button>
            
            <div class="dropdown-content">
            @if(!Auth::user())
              <a href="{{ url('auth/google') }}">Đăng nhập với Google</a>
              <a href="{{ url('auth/facebook') }}">Đăng nhập với Facebook</a>
    
              @else
              <a href="{{ url('logout-home') }}">Đăng xuất</a>
              @endif
          </div> 
        </div>

      </div>
    </div>
        </div>
    </header>
    
    <section>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/banner-1.jpeg" alt="" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="image/banner-2.jpeg" alt="" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="image/banner-3.jpeg" alt="" class="d-block" style="width:100%">
              </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
       

        @include('pages.dsphim')
    
    </section>
    
    <footer>
      <div class="f-top">
        <div>
          <b>Cinema Việt Nam</b>
          <p>Giới Thiệu</p>
          <p>Tiện Ích Online</p>
          <p>Thẻ Quà TặngTuyển Dụng</p>
          <p>Liên Hệ Quảng Cáo Cinema</p>
          <p>Dành cho đối tác</p>
        </div>
        <div>
          <b>Điều khoản sử dụng</b>
          <p>Điều Khoản Chung</p>
          <p>Điều Khoản Giao Dịch</p>
          <p>Chính Sách Thanh Toán</p>
          <p>Chính Sách Bảo Mật</p>
          <p>Câu Hỏi Thường Gặp</p>

        </div>
        <div>
          <b>Chăm sóc khách hàng</b>
          <p>Hotline: 1900 6017</p>
          <p>Giờ làm việc: 8:00 - 22:00 </p>
          <p>Email hỗ trợ: hoidap@cinema.vn</p>
        </div>
     </div>
     <div class="f-bot">
      <div>
      <img src="image/logoblack.png" alt="">
      </div>
      <div>
        <span>
        CÔNG TY TNHH CJ CGV VIỆT NAM
        <br>Giấy Chứng nhận đăng ký doanh nghiệp: 0303675393 đăng ký lần đầu ngày 31/7/2008, được cấp bởi Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh
        <br>Địa chỉ: Lầu 2, số 7/28, Đường Thành Thái, Phường 14, Quận 10, Thành phố Hồ Chí Minh, Việt Nam
        <br>Đường dây nóng (Hotline): 1900 6017COPYRIGHT 2017 Cinema VIETNAM CO., LTD. ALL RIGHTS RESERVED
        </span>
      </div>
     </div>
    </footer>
    
    </body>
    </html>