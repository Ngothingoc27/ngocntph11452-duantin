<!DOCTYPE html>
<html>
    <body>
        <div class="top10">
            <div>TOP 10 YÊU THÍCH</div>
            <div class="item">
                <?php
                    require_once '../../dao/hang-hoa.php';
                    $hh_array = hang_hoa_select_top10();
                    foreach ($hh_array as $hh) {
                        $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                        echo "
                            <div>
                                <div><img src='$CONTENT_URL/images/products/$hh[hinh]'></div>
                                <div><a href='$href'>$hh[ten_hh]</a></div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
        <style>
            .top10{
              
            }
            .top10 img{
                width:70px;
                height:70px;
            }
        </style>
    </body>
</html>
