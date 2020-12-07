<?php
require_once 'pdo.php';
    function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $ngay_sinh){
        $sql = "INSERT INTO khachhang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro, ngay_sinh) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ngay_sinh);

    }

    function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
        $sql = "UPDATE khachhang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);

    }

    function khach_hang_delete($ma_kh){
        $sql = "DELETE FROM khachhang  WHERE ma_kh=?";
        if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }

    }

    function khach_hang_select_all(){
        $sql = "SELECT * FROM khachhang";
        return pdo_query($sql);
    }

    function khach_hang_select_by_id($ma_kh){
        $sql = "SELECT * FROM khachhang WHERE ma_kh=?";
        return pdo_query_one($sql, $ma_kh);

    }

    function khach_hang_exist($ma_kh){
        $sql = "SELECT count(*) FROM khachhang WHERE $ma_kh=?";
        return pdo_query_value($sql, $ma_kh) > 0;

    }

    function khach_hang_select_by_role($vai_tro){
        $sql = "SELECT * FROM khachhang WHERE vai_tro=?";
        return pdo_query($sql, $vai_tro);
    }

    function khach_hang_change_password($ma_kh, $mat_khau_moi){
        $sql = "UPDATE khachhang SET mat_khau=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau_moi, $ma_kh);    
    }

    /*function hang_hoa_select_page(){
        $row_per_page = 3;// so ban ghi tren 1 trang
        $total_row = pdo_query_value("SELECT count(*) FROM hanghoa");// dem tong ban ghi
        $total_page = ceil($total_row/$row_per_page);// tinh ra so luong trang
        // ceil : lay so nguyen

        $current_page = exist_param("page_no") ? $_REQUEST['page_no'] : 1;
        if($current_page <1 ){
            $current_page = 1;
        }
        if($current_page > $total_page){
            $current_page = $total_page;
        }

        $start = ( $current_page-1) * $row_per_page;
    $sql = "SELECT * FROM hanghoa ORDER BY ma_hh LIMIT {$start}, {$row_per_page} ";
    // cho cacs thiet lap vao session de dunh o view
    $_SESSION['total_page'] = $total_page;
    $_SESSION['total_page'] = ($current_page >1 ) ? ($current_page - 1) : 1;
    $_SESSION['next_page'] = ($current_page < $total_page) ? ($current_page +1 ) :$total_page;
    return pdo_query($sql);
    }*/
?>