<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://localhost:33067/text/form_website/content/admin/css/layout_admin.css">
    </head>
    <body>
        <div id="content">
            <div class="box1 genaral"><h1>QUẢN TRỊ WEBSITE</h1></div>
            <nav class="box2 genaral">
                <?php require 'menu.php';?>
            </nav>
            <main class="box3 genaral">
            <?php
                require $VIEW_NAME;
                // echo $VIEW_NAME;
                 //echo '../..'.$CONTENT_URL.'/admin/css/layout_admin.css';
            ?>
            </main>
        </div>
    </body>
</html>