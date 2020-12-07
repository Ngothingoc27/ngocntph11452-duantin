
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <header>
                    <img src="https://cf.shopee.vn/file/0395ebc4f7ede9dce164d0a231bf76ee" alt="">
            </header>
            <div class="product-trangchu">
                <?php
                            require_once '../../dao/hang-hoa.php';
                            $hh_array = hang_hoa_select_top10();
                            foreach ($hh_array as $hh) {
                                $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                                echo "
                                    <div>
                                        <img src='$CONTENT_URL/images/products/$hh[hinh]'><br>
                                        <a href='$href'>$hh[ten_hh]</a>
                                    </div>
                                ";
                            }
                        ?>
            </div>
                <div class="footer-main">
                    <div class="footer-logo">
                        <img src="https://s3.nhattao.com/users/2016/11/7376925_f9d0d01ea96451667cac9326f8f25cfa.jpg" alt="">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu
                            erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                            metus.</p>
                    </div>
                    <div class="footer-reach">
                        <div class="footer-reach-title">
                            <span>REACH US</span>
                        </div>
                        <div class="footer-teach-conten">
                            <div class="footer-icon"></div>
                            <div class="footer-text">
                                <a href="">HeraKorean@gmail.com</a> <br>
                                <a href="">(091) 385-1490</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-info">
                        <span>INFO LINK</span> 
                        <a href="">About Hera</a> 
                        <a href="">How to shop Hera</a>
                        <a href="">Contact us</a>
                    </div>
                    <div class="footer-help">
                        <span>HELP DESH</span> 
                        <a href="">View Cart</a> 
                        <a href="">My Wishlist</a> 
                        <a href="">Help</a> 
                    </div>
                </div>
       <style>
            .product-trangchu img{
                width : 300px;
                height : 300px;
                margin : 20px 0px;
            }
            .product-trangchu{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 10px;
                margin : 20px 0px 20px 0px;
                text-align : center;
            }
            .product-trangchu a{
                text-decoration: none;
                color: #2E2EFE;
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 20px;
            }
            .product-trangchu div{
                border : 1px solid #000000;
                width : 350px;
                margin-top : 20px;
            }
            .footer-main{
                display: grid;
                grid-template-columns: 400px 1fr 1fr 1fr;
                padding: 30px 115px 150px 115px;
                grid-gap: 30px;
                border-bottom: 1px solid #ffffff;
                background-color: #070B19;
                width : 1280px;
            }
            .footer-main span{
                color: #fff;
                font-size: 25px;
                margin-bottom: 30px;
            }
            .footer-main a{
                text-decoration: none;
                font-size: 15px;
                color: #fff;
            }
            .footer-main p{
                color: #ffffff;
                margin-top: 30px;
            }
            .footer-button p{
                color: #ffffff;
                margin: 20px 0px 0px 115px;
            }
            .footer-info a{
                display: block;
                margin: 20px 0px;
            }
            .footer-help a{
                display: block;
                margin: 20px 0px;
            }
            .footer-main a:hover{
                text-decoration: underline;
            }
            .footer-logo img{
                width: 300px;
                height : ;
            }
       </style> 
</body>
</html>

