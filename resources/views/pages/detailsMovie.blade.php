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
    <title>Chi tiết phim</title>
</head>
<body>
<header>
    
        <div>
            <div class="top-logo">
                <img src="../image/logo.png" alt="">
            </div>
            <div class="top-menu">
                <a href="{{ url('/') }}">PHIM</a>
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
    <div id="container">
        <div class="details">
       
            <div class="image">
                <img src="../image/image_phim/{{$phim->poster}}">
            </div>
            <div class="content">
                <div class="name">
                    <p>{{$phim->tenphim}}</p>
                </div>
                <div class="theloai">
                    <p>Thể loại: {{$phim->theloai}}</p>
                </div>
                <div class="tgian">
                    <p>Thời gian: {{$phim->thoiluongphim}}'</p>
                </div>
                
                <div class="mota">
                    <p>Đạo diễn: <i> {{$phim->daodien}}</i> </p>
                    
                    <p>Diễn viên:  <i> {{$phim->dienvien}}</i> </p>
                
                </div>
                <div class="noidung">
                    <p class="nd" >Nội dung phim:</p>
                    <p>
                    {{$phim->mota}}
                    </p>
                    
                </div>
            </div>
        </div>
        @include('pages.lichChieu')
        <div class="dsChongoi">
           <h3>Màn hình</h3>
           <div class="ghengoi">
            
            <div class="container">
                <div class="row">
                    <div class="seat" data-row="A" data-column="1" id="A1">A1</div>
                    <div class="seat" data-row="A" data-column="2" id="A2">A2</div>
                    <div class="seat" data-row="A" data-column="3" id="A3">A3</div>
                    <div class="seat" data-row="A" data-column="4" id="A4">A4</div>
                    <div class="seat" data-row="A" data-column="5" id="A5">A5</div>
                    <div class="seat" data-row="A" data-column="6" id="A6">A6</div>
                    <div class="seat" data-row="A" data-column="7" id="A7">A7</div>
                    <div class="seat" data-row="A" data-column="8" id="A8">A8</div>
                    <div class="seat" data-row="A" data-column="9" id="A9">A9</div>
                </div>
                <div class="row">
                    <div class="seat" data-row="B" data-column="1" id="B1">B1</div>
                    <div class="seat" data-row="B" data-column="2" id="B2">B2</div>
                    <div class="seat" data-row="B" data-column="3" id="B3">B3</div>
                    <div class="seat" data-row="B" data-column="4" id="B4">B4</div>
                    <div class="seat" data-row="B" data-column="5" id="B5">B5</div>
                    <div class="seat" data-row="B" data-column="6" id="B6">B6</div>
                    <div class="seat" data-row="B" data-column="7" id="B7">B7</div>
                    <div class="seat" data-row="B" data-column="8" id="B8">B8</div>
                    <div class="seat" data-row="B" data-column="9" id="B9">B9</div>
                </div>
                <div class="row">
                    <div class="seat VIP" data-row="C" data-column="1" id="C1">C1</div>
                    <div class="seat VIP" data-row="C" data-column="2" id="C2">C2</div>
                    <div class="seat VIP" data-row="C" data-column="3" id="C3">C3</div>
                    <div class="seat VIP" data-row="C" data-column="4" id="C4">C4</div>
                    <div class="seat VIP" data-row="C" data-column="5" id="C5">C5</div>
                    <div class="seat VIP" data-row="C" data-column="6" id="C6">C6</div>
                    <div class="seat VIP" data-row="C" data-column="7" id="C7">C7</div>
                    <div class="seat VIP" data-row="C" data-column="8" id="C8">C8</div>
                    <div class="seat VIP VIP" data-row="C" data-column="9" id="AB">C9</div>
                </div>
                <div class="row">
                    <div class="seat VIP" data-row="D" data-column="1" id="D1">D1</div>
                    <div class="seat VIP" data-row="D" data-column="2" id="D2">D2</div>
                    <div class="seat VIP" data-row="D" data-column="3" id="D3">D3</div>
                    <div class="seat VIP" data-row="D" data-column="4" id="D4">D4</div>
                    <div class="seat VIP" data-row="D" data-column="5" id="D5">D5</div>
                    <div class="seat VIP" data-row="D" data-column="6" id="D6">D6</div>
                    <div class="seat VIP" data-row="D" data-column="7" id="D7">D7</div>
                    <div class="seat VIP" data-row="D" data-column="8" id="D8">D8</div>
                    <div class="seat VIP" data-row="D" data-column="9" id="D9">D9</div>
                </div>
                <div class="row">
                    <div class="seat VIP" data-row="E" data-column="1" id="E1">E1</div>
                    <div class="seat VIP" data-row="E" data-column="2" id="E2">E2</div>
                    <div class="seat VIP" data-row="E" data-column="3" id="E3">E3</div>
                    <div class="seat VIP" data-row="E" data-column="4" id="E4">E4</div>
                    <div class="seat VIP" data-row="E" data-column="5" id="E5">E5</div>
                    <div class="seat VIP" data-row="E" data-column="6" id="E6">E6</div>
                    <div class="seat VIP" data-row="E" data-column="7" id="E7">E7</div>
                    <div class="seat VIP" data-row="E" data-column="8" id="E8">E8</div>
                    <div class="seat VIP" data-row="E" data-column="9" id="E9">E9</div>
                </div>
                <div class="row">
                    <div class="seat VIP" data-row="F" data-column="1" id="F1">F1</div>
                    <div class="seat VIP" data-row="F" data-column="2" id="F2">F2</div>
                    <div class="seat VIP" data-row="F" data-column="3" id="F3">F3</div>
                    <div class="seat VIP" data-row="F" data-column="4" id="F4">F4</div>
                    <div class="seat VIP" data-row="F" data-column="5" id="F5">F5</div>
                    <div class="seat VIP" data-row="F" data-column="6" id="F6">F6</div>
                    <div class="seat VIP" data-row="F" data-column="7" id="F7">F7</div>
                    <div class="seat VIP" data-row="F" data-column="8" id="F8">F8</div>
                    <div class="seat VIP" data-row="F" data-column="9" id="F9">F9</div>
                </div>
            </div>
           </div>
        </div>
        <div class="ghiChu">
            <div>
                <div class="hetcho">
                    <button> </button>
                    <p>Ghế đã được đặt</p>
                </div>
                <div class="dachon">
                    <button> </button>
                    <p>Ghế bạn chọn</p>
                </div>
                <div class="gheVIP">
                    <button> </button>
                    <p>Ghế VIP</p>
                </div>
                <div class="gheThuong">
                    <button> </button>
                    <p>Ghế thường</p>
                </div>
            </div>
        </div>
        <script>
            var seats = document.querySelectorAll(".seat");
            for (var i = 0; i < seats.length; i++) {
                let isSeatSelected = false;
                seats[i].addEventListener("click", function() {
                    var row = this.getAttribute("data-row");
                    var column = this.getAttribute("data-column");

                    isSeatSelected = !isSeatSelected;
                    if (isSeatSelected) {
                    this.style.backgroundColor = "green";
                    } else {
                    this.style.backgroundColor = "";
                    }
                });
            }
                
        </script>
    </div>
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
      <img src="../image/logoblack.png" alt="">
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

