<?php
    use Carbon\Carbon;

    $today = Carbon::now();
    $tomorrow = $today::tomorrow();
    $next_tomorrow = $today->addDays(2);
?>
<div class="lichchieu">
    <h1>Lịch chiếu</h1>
    <div>
        <button id="btn-today" onclick="hienThiDanhSach(1)" id="today" > <?php echo  Carbon::now()->format('d/m');?>
            <ul class="dsgio-chieu">
            @foreach ($danhSachGioChieu as $gioChieu => $gc)
                <li class="gio-chieu"">
                    {{ $gc->giochieu }}
                </li>
            @endforeach
            </ul>
            </button>
        <button id="btn-tomorrow" onclick="hienThiDanhSach(2)"><?php echo $tomorrow->format('d/m');?>
        <ul class="dsgio-chieu">
            @foreach ($danhSachGioChieu as $gioChieu => $gc)
                <li class="gio-chieu"">
                    {{ $gc->giochieu }}
                </li>
            @endforeach
        </ul>
        </button>
        <button id="btn-last-day" onclick="hienThiDanhSach(3)"><?php echo $next_tomorrow->format('d/m'); ?>
        <ul class="dsgio-chieu">
            @foreach ($danhSachGioChieu as $gioChieu => $gc)
                <li class="gio-chieu"">
                    {{ $gc->giochieu }}
                </li>
            @endforeach
        </ul>
        </button>
    </div>
     
</div>
<style>
    .lichchieu div{
        display: flex;
        justify-content: center;
    }
    .dsgio-chieu {
        position: absolute;
        background-color: white;
        display: none;
        margin-top: 30px;
        padding: 0;
        color: black;
        list-style-type: none;
   }
   .dsgio-chieu li{
        padding: 10px 35px;
   }
   .dsgio-chieu li:hover{
        background-color: pink;
    }
   .active .dsgio-chieu{
        display: grid;
        align-content: space-evenly;
        justify-content: space-between;
        justify-items: center;
   }
   
</style>
<script>
    function hienThiDanhSach(id) {
    const danhSach1 = document.getElementById("btn-today");
    const danhSach2 = document.getElementById("btn-tomorrow");
    const danhSach3 = document.getElementById("btn-last-day");

        if (id === 1) {
            danhSach1.classList.toggle("active");
            danhSach2.classList.remove("active");
            danhSach3.classList.remove("active");

        }
        else if(id === 2) {
            danhSach1.classList.remove("active");
            danhSach2.classList.toggle("active");
            danhSach3.classList.remove("active");

        }
        else if(id === 3) {
            danhSach1.classList.remove("active");
            danhSach2.classList.remove("active");
            danhSach3.classList.toggle("active");
        }
        else{
            danhSach1.classList.remove("active");
            danhSach2.classList.remove("active");
            danhSach3.classList.remove("active");
        }
    }       
</script>