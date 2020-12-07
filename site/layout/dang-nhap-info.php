<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="title-tk">TÀI KHOẢN</div>
            <div class="taikhoan-dn">
                <div>
                    <img src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>' style="width:150px;height:200px">
                    <br>
                    <?= $_SESSION['user']['ho_ten']?>
                </div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>   
        <style>
            .title-tk{
               
                
            }
            .taikhoan-dn{
                
                border : 1px solid #000000;
                padding : 20px;
                margin-top : 10px;
                
            }
        </style>     
    </body>
</html>
