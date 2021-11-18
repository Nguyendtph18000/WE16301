<?php
require_once './dao/system_dao.php';
require_once './commons/app_config.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    
    case 'home':
        require_once "./business/homepage/homepage.php";
        index();
        break;
    case 'tour-packages':
        require_once "./business/homepage/tour-packages.php";
        tour_packages();
        break;       
    case 'cp-admin/dashboard':
        require_once './business/admin/dashboard.php';
        dashboard_info();       
        break;
    case 'cp-admin/list_user':
        // echo "Quản trị tài khoản";
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
    case 'cp-admin/tour-add':
        require_once './business/admin/tour.php';
        add_tour();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}

?>