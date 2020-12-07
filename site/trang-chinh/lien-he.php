<?php
      if(isset($_POST['send'])){
        $email_send=$_POST['email'];
        $ho_ten=$_POST['hoten'];
        $noi_dung=$_POST['message'];

    $SENDGRID_API_KEY = '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';

    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();
    //thong tin nguoi guui
    $email->setFrom("ngocntph11452@fpt.edu.vn", "MRS");
    //"ngocntph11452@fpt.edu.vn", "ngothingoc"
    //tie de thu
    $email->setSubject("$ho_ten");
    //thong tin  nguowi nhan
    $email->addTo($email_send,$ho_ten);
    //soan noi dung cho thu
    //
    $email->addContent(
        "text/html", "<h2>Laptop88 chào bạn </h2>"
    );

    //tien hanh guwi thu
    $sendgrid = new \SendGrid($SENDGRID_API_KEY);
    try{
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    } catch(Exception $e){
        echo 'Caught exception:  '. $e->getMessage() . "\n";
    }
   }
?>

<h2>LIÊN HỆ</h2>
<form action="" method="post" class="lien-he">
    <div>
        <input type="email" name="email" required class="form" placeholder = "Email"> <br>
        <input type="text" name="hoten" required class="form" placeholder = "Ho Ten"> <br>
        <textarea name="message" class="form textarea" placehilder="Noi dung"></textarea>
    </div>
    <button name="send">Gui MAil</button>
    <div class="clear"></div>
    <p>Hoac lien he : 0369971883</p>
</form>
 
<style>
h2{
    margin : 30px 0px 0px 650px;
}
    .lien-he{
        
        margin : 30px 0px 0px 550px;
    }
    .lien-he input{
        margin : 10px 0px;
        width : 300px;
        height : 50px;
    }
    .lien-he textarea{
        margin : 10px 0px;
        width : 300px;
        height : 50px;
    }
</style>