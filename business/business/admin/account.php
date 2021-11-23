<?php
function account_index(){
    $sql = "select * from user order by id desc";
    $users = executeQuery($sql);
    // admin_render('user/list-user.php', [
    //     'dsTaiKhoan' => $users,
    // ]);
    // admin_render('user/list-user.php', 
    //     [
    //         'dsTaiKhoan' => $users,
    //     ], 
    //     [
    //         'customize/js/account/list.js'
    //     ]
    // );
    include_once "./views/admin/layouts/user/list-user.php";
}

function new_user(){
    if(isset($_POST['Submit'])){
        $name = isset($_POST['name'])?$_POST['name']:'';
        $cmnd = isset($_POST['cmnd'])?$_POST['cmnd']:'';
        $country = isset($_POST['country'])?$_POST['country']:'';
        $phone = isset($_POST['phone'])?$_POST['phone']:'';
        $email = isset($_POST['email'])?$_POST['email']:'';
        $username = isset($_POST['username'])?$_POST['username']:'';
        $pass = isset($_POST['password'])?$_POST['password']:'';
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        $role = isset($_POST['role'])?$_POST['role']:'0';

        $file = $_FILES['avatar'];

        // Lưu ảnh
        if($file['size'] > 0){
            $filename =$file['name'];
            move_uploaded_file($file['tmp_name'], './public/admin/assets/image/' . $filename);
            $avatar =$filename;
        }
        else{
            $avatar = "";
        }
        $sql = "INSERT INTO user (name,username,password,phone,email,address,cmnd,image,role) VALUES('$name','$username','$passHash','$phone','$email','$country','$cmnd','$avatar','$role')  ";
        executeQuery($sql);
        header("location: list_user");

    }
    include_once "./views/admin/layouts/user/new-user.php";

}

function delete_user(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM user WHERE id=$id";
        executeQuery_one($sql);
    }
    account_index();
    include_once "./views/admin/layouts/user/list-user.php";
}

function edit_user(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id=$id";
        $oldData = executeQuery($sql,false);

        if(isset($_POST['submit'])){
            $name = isset($_POST['name'])?$_POST['name']:'';
            $cmnd = isset($_POST['cmnd'])?$_POST['cmnd']:'';
            $country = isset($_POST['country'])?$_POST['country']:'';
            $phone = isset($_POST['phone'])?$_POST['phone']:'';
            $email = isset($_POST['email'])?$_POST['email']:'';
            $username = isset($_POST['username'])?$_POST['username']:'';
            $pass = isset($_POST['password'])?$_POST['password']:'';
            $role = $_POST['role'];
            $file = $_FILES['avatar'];
            // Lưu ảnh
            if($file['size'] > 0){
                $filename =$file['name'];
                move_uploaded_file($file['tmp_name'], './public/admin/assets/image/' . $filename);
                $avatar =$filename;
            }
            else{
                $avatar = $oldData['image'];
            }

            $sql = "UPDATE user SET name='$name',username='$username',password='$pass',phone='$phone',email='$email',address='$country',cmnd='$cmnd',image='$avatar',role='$role' WHERE id=$id";
            executeQuery_one($sql);
            header("location: list_user");

        }

    }
    include_once "./views/admin/layouts/user/user-edit.php";

}


?>
