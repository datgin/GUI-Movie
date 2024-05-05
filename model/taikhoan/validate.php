<?php
function validate($username, $password, $email, $enterpass)
{
    $error = [];
    // Validate username
    if (empty($username)) {
        $error['username'] = "Tên không được để trống!";
    } elseif (strlen($username) < 6) {
        $error["username"] = "Tên phải lớn hơn 6 ký tự!";
    } elseif (strlen($username) > 10) {
        $error["username"] = "Tên phải nhỏ hơn 10 ký tự!";
    }

    // Validate password
    if (empty($password)) {
        $error["password"] = "Mật khẩu không được để trống!";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,20}$/", $password)) {
        $error["password"] = "Mật khẩu không đúng định dạng!";
    }

    //Validate Email
    if (empty($email)) {
        $error["email"] = "Email không được để trống!";
    } elseif (!preg_match("/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i", $email)) {
        $error["email"] = "Email không đúng định dạng!";
    }


    if (empty($enterpass)) {
        $error["enterpass"] = "Mật khẩu không được để trống!";
    } elseif ($enterpass != $password) {
        $error['enterpass'] = "Mật khẩu không trùng khớp!";
    }

    return $error;
}
if (isset($_POST['btn']) && $_POST['btn']) {
    if (isset($_POST['username']) && isset($_POST['enterpass'])) {
        $username = $_POST['username'];
        $enterpass = $_POST['enterpass'];
    } else {
        $username = $enterpass = $tel = '';
    }
    $password = $_POST['password'];
    $email = $_POST['email'];


    $error = validate($username, $password, $email, $enterpass);
    if (empty($error)) {
        echo '<script>alert("Đăng ký thành công!")</script>';
    }
}
