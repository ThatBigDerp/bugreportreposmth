<base href="./">
<?php
 if (isset($_GET['filename'])) {
    $currentpage = $_GET['filename'];
 } else {
    $currentpage = 'home';
 }
require 'inc/nav.php';

 if (isset($_GET['filename'])) {

    switch ($_GET['filename']) {
        case 'checkout':
            require 'inc/checkout.php';     // your news functions
            include 'public/checkout.tpl.php'; // your news template
            break;

        case 'home':
            require 'inc/home.php';
            include 'public/home.tpl.php';
            break;

        case 'products':
            require 'inc/products.php';
            include 'public/products.tpl.php';
            break;

        case 'product':
            require 'inc/products.php';
            include 'public/products.tpl.php';
            break;
        default:
            if ($_GET['filename'] == '') {
                include 'public/home.tpl.php';
            } else {
                header('HTTP/1.0 404 Not Found');
                include 'public/404.tpl.php';
            }
            break;
}
} else {
    $currentpage = 'home';
    include 'public/home.tpl.php';
}
?>