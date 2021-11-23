<?php
session_start();
require_once './dao/system_dao.php';
require_once './commons/app_config.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once "./business/homepage/homepage.php";
        load_tours();
        break;
    case 'home':
        require_once "./business/homepage/homepage.php";
        load_tours();
        break;
    case 'tour-packages':
        require_once "./business/homepage/tour-packages.php";
        tour_packages();
        break;  
    case 'tour-detail':
        require_once "./business/homepage/tour-detail.php";
        tour_detail();
        break;  
    
    case 'confirmation':
        require_once "./business/homepage/confirmation.php";
        load_confirmation();
        break;     


    // admin
    case 'cp-admin/dashboard':
        require_once './business/admin/dashboard.php';
        dashboard_info();       
        break;
    case 'cp-admin/list_user':
        require_once './business/admin/account.php';
        account_index();
        break;
    case 'cp-admin/new_user':
        require_once './business/admin/account.php';
        new_user(); 
        break;
    case 'cp-admin/user-delete':
        require_once './business/admin/account.php';
        delete_user();
        break;
    case 'cp-admin/user-edit':
        require_once './business/admin/account.php';
        edit_user();
        break;

    case 'cp-admin/tour-active':
        require_once './business/admin/tour.php';
        list_tour_avtive();
        break;
    case 'cp-admin/tour-pending':
        require_once './business/admin/tour.php';
        list_tour_pending();
        break;
    case 'cp-admin/tour-active-delete':
        require_once './business/admin/tour.php';
        del_tour();
        save_del_tour_act();
        break;
    case 'cp-admin/tour-expired':
        require_once './business/admin/tour.php';
        list_tour_expired();
        break;
    case 'cp-admin/tour-expired-delete':
        require_once './business/admin/tour.php';
        del_tour();
        save_del_tour_exp();
        break;
    case 'cp-admin/tour-add':
        require_once './business/admin/tour.php';
        add_tour();
        break;
    case 'cp-admin/tour-edit':
        require_once './business/admin/tour.php';
        edit_tour();
        break;
    case 'cp-admin/booking':
        require_once './business/admin/booking.php';
        book_tour();
        break;
    case 'cp-admin/booking-delete':
        require_once './business/admin/booking.php';
        book_delete();
        break;
    case 'cp-admin/booking-detail':
        require_once './business/admin/booking.php';
        booking_detail();
        break;
    case 'cp-admin/booking-edit':
        require_once './business/admin/booking.php';
        booking_edit();
        break;   
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}

?>