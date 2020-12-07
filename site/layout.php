<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
    </head>
    <body>
        <div class="layout">
            <header>
                <h1>SIÊU THỊ TRỰC TUYẾN</h1>
            </header>
            <nav>
                <?php require 'layout/menu.php';?>            
            </nav>
         <div class="layout-all">
                <article>
                    <div>
                    <?php require $VIEW_NAME;?>  
                    </div>
                </article>
                <aside>
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer></footer>
        </div>
        <style>
            h1{
                text-align: center;
            }
            .layout-all{
                display: grid;
                grid-template-columns: 1300px 1fr;
            }
        </style>
    </body>
</html>
