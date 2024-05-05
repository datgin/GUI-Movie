<?php
include_once 'model/pdo.php';
include_once 'model/movie.php';
include_once 'view/header.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'register':
            include_once 'model/taikhoan/validatedk.php';
            include_once 'view/register.php';
            break;
        case 'login':
            include_once 'model/taikhoan/validatedk.php';
            include_once 'view/login.php';
            break;
        case 'ctMovie':
            $ctMovie = getMovieById($_GET['idmovie']);
            include_once 'view/ctMovie.php';
            break;
    }
} else {
    $kq = getMovie("new");
    $kq1 = getMovie("trangthai");
    $kq2 = getMovie("sapchieu");
    $kq3 = getMovie("limit");
    include_once 'view/home.php';
}
include_once 'view/footer.php';
