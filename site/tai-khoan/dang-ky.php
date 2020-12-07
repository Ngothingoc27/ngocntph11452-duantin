<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);


 if(exist_param("btn_register")){
    $ten_dn = '/^[a-zA-Z0-9_]{5,30}$/';
    $ten = '/^[A-z\sàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{10,30}$/';
    $bieu_thuc = '/^[a-z][A-z0-9_.]{4,25}\@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/'; 
    $pass = '/^.{5,}$/';
   // $number= '/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/';
   
    if($mat_khau != $mat_khau2){
         $MESSAGE = "Xác nhận mật khẩu không đúng!";
     }
    if(!khach_hang_exist($ma_kh)){
        $MESSAGE = "Mã này đã được sử dụng!";
    }
    //tên đăng nhập
    if(!preg_match($ten_dn, $ma_kh)){
        echo  "User k hợp lệ <br>";
    }
    //họ tên 
    if(!preg_match($ten, $ho_ten)){
       echo "Họ tên không hợp lệ <br> ";
    }
    //email
    if(!preg_match($bieu_thuc, $email)){
        echo 'Email k hợp lệ <br>';
    }
    //mật khẩu
    if(!preg_match($pass,$mat_khau)){
        echo 'Mời nhập mật khẩu trên 5 chữ số <br>';
    }
    // if(!preg_match($number,$)){
    //     echo 'Số điện thoại không hợp lệ <br>';
    // }
    ///end chính
    else{
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name?$file_name:"user.png";
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $ngay_sinh);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
}
else{
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2, $ngay_sinh;
}

$VIEW_NAME="tai-khoan/dang-ky-form.php";
require '../layout.php';
