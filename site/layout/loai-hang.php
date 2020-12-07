<!DOCTYPE html>
<html>
    <body>
        <div class = "title-dm">DANH MỤC</div>
        <div class= "container">
            <div class = "tenloai">
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<a href='$href'>$loai[ten_loai]</a> <hr>";
                    }
                ?>
            </div>
            <div>
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                   Tìm kiếm : <input name="keywords" placeholder="Từ khóa tìm kiếm">
                </form>                
            </div>            
        </div>
        <style>
            .container{
               
                border : 1px solid #000000;
                padding : 20px;
                margin-top : 10px;
                width : 150px
            }
            .tenloai a{
                text-decoration: none;
                font-size: 20px;
                color : #000000;
            }
            .title-dm{
              
                margin-top: 20px;
            }
        </style>
    </body>
</html>
