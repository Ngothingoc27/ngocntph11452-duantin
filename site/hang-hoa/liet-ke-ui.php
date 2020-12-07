<!DOCTYPE html>
<html>
    <body>
        <div class="nm">
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div>
                <div class="n">
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" style="width:300px;height:300px" >
                    </a>
                    <div>
                        <h3>$<?=number_format($don_gia, 2)?></h3>
                        <p><?=$ten_hh?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
        <style>
            .nm{
                display: grid;
                 grid-template-columns: 350px 350px 350px;
                 margin : 30px 0px;
                 grid-gap: 20px;
                 text-align: center;
            }
            .n{
                border: 1px solid #000000;
                padding: 10px;
            }
        </style>
    </body>
</html>
