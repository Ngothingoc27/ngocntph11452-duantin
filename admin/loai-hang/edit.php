<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="<?=$ma_loai?>" readonly>
            </div>
            <div>
                <label>Tên loại</label>
                <input name="ten_loai" value="<?=$ten_loai?>" >
            </div>
            <div>
                <button name="btn_update">Cập nhật</button>
                <button type="reset">Nhập lại</button>
                <a href="index.php">Thêm mới</a>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </body>
</html>
