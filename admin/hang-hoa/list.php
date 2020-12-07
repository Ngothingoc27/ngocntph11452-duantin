<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <nav aria-lable = "Page navigation example">
        <ul class = "pagination">
            <li><a href="?btn_list&page_no=1">Đầu</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['prev_page']?>">Trước</a></li>
            <?php
                for($i = 1; $i<=$_SESSION['total_page']; $i++){
                    echo '<li><a href = "?bnt_list&page_no='.$i.'">'.$i.'</a></li>';
                }
            ?>
            <li><a href="?btn_list&page_no=<?=$_SESSION['next_page']?>">Sau</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['total_page']?>">Cuối</a></li>
        </ul>
        </nav>

        <form action="index.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th>MÃ GIẢM GIÁ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?=$ma_hh?>"></th>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td>$<?=number_format($don_gia, 2)?></td>
                        <td><?=number_format($giam_gia*100)?>%</td>
                        <td><?=$so_luot_xem?></td>
                        <td><?=$ma_giam_gia?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_hh=<?=$ma_hh?>">Sửa</a>
                            <a href="index.php?btn_delete&ma_hh=<?=$ma_hh?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button id="check-all" type="button">Chọn tất cả</button>
                            <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <a href="index.php">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <style>
            
        </style>
    </body>
</html>
