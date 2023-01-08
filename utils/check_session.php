<?php
try {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $active_url = explode('/',$_SERVER['REQUEST_URI']);
    if(isset($_SESSION['fullname']) && ($active_url[3]==''||$active_url[3]=='index.php')){
        header('Location: ../admin/dashboard.php');
    }
    elseif(($active_url[3]!='' && $active_url[3]!='index.php' && !isset($_GET['error'])) && !isset($_SESSION['fullname'])){
        header('Location: ../admin');
    }
    else{
        $session = new StdClass;
        $session->errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
        $session->success = isset($_SESSION['success']) ? $_SESSION['success'] : [];
        $_SESSION['errors'] = [];
        $_SESSION['success'] = [];
    }
} catch (\Throwable $th) {
    print_r($th);
}
?>