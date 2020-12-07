<html>
    <body>
        <div class="thumbnail">
            <div class="hinh-anh">
                <img src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' style="max-width: 50%">
            </div>
            <div class="caption">
                <p>
                    <ul>
                        <li>MÃ HH: <?=$ma_hh?></li>
                        <li>TÊN HH: <?=$ten_hh?></li>
                        <li>ĐƠN GIÁ: <?=number_format($don_gia, 2)?></li>
                        <li>GIẢM GIÁ: <?=$giam_gia * 100 ?>%</li>
                    </ul>
                </p>
                <div><?= $mo_ta ?></div>
            </div>
        </div>
        
        <?php require 'binh-luan.php';?>
        
        <?php require 'hang-cung-loai.php';?>
        <style>
            .thumbnail img{
                width: 300px;
                height: 300px; 
                margin-left : 150px;
            }
            .thumbnail{
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        </style>
    </body>
</html>
