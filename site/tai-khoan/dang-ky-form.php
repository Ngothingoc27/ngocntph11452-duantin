<!DOCTYPE html>
<html>
    <body>
        <h3 class="tt">ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data" class="dk">
            <div>
                <label>Tên đăng nhập</label> <br>
                <input name="ma_kh" id="ma_kh" value="<?=$ma_kh?>">
                <span class="error-name">* <?php ?></span>
                <br><br>
            </div>
            <div>
                <label>Mật khẩu</label> <br>
                <input name="mat_khau" type="password" value="<?=$mat_khau?>"> *
            </div>
            <div>
                <label>Xác nhận mật khẩu</label> <br>
                <input name="mat_khau2" type="password" value="<?=$mat_khau2?>"> *
            </div>
            <div>
                <label>Họ và tên</label> <br>
                <input name="ho_ten" value="<?=$ho_ten?>"> *
                <?php //echo $err ?>
            </div>
            <div>
                <label>Địa chỉ email</label> <br>
                <input name="email" value="<?=$email?>"> *
                <?php //echo $emailErr ?>
            </div>
            <div>
                <label>Ngày sinh</label> <br>
                <input name="ngay_sinh" value="<?=$ngay_sinh?>"> 
            </div>
            <div>
                <label>Hình</label> 
                <input name="up_hinh" type="file">
            </div>
            <div>
                <button name="btn_register">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
        <style>
            .dk{
                margin-left: 450px;
                width : 500px;
            }
            .dk input{
                width : 300px;
                height : 40px;
                margin : 10px 0px;
            }
            .tt{
                margin-left : 500px;
            }
        </style>
    </body>
</html>
