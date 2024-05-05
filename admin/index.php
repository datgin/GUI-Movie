<?php
include_once 'view/header.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_sp':
            include_once 'view/add_sp.php';
            break;
            
    }
} else {
    include_once 'view/home.php';
}

include_once 'view/footer.php';
