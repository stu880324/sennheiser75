<?php require __DIR__. '/parts/1_config.php';

if(! isset($_SESSION['order_info'])){
    $_SESSION['order_info'] = [];
}

$output = [];

$action = isset($_POST['action']) ? $_POST['action'] : 'read';
// $sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
// $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

switch ($action) {
    default:
    case 'read':
        break;
    case 'add':
        $_SESSION['order_info']['rcpt_name'] = $_POST['rcpt_name'];
        $_SESSION['order_info']['rcpt_mobile'] = $_POST['rcpt_mobile'];
        $_SESSION['order_info']['rcpt_address'] = $_POST['rcpt_address'];
        $_SESSION['order_info']['couponChoose'] = $_POST['couponChoose'];
        $_SESSION['order_info']['totalPrice'] = $_POST['totalPrice'];
        $_SESSION['order_info']['payment'] = $_POST['payment'];
        break;

    case 'remove':
        if(isset($_SESSION['order_info'])){
            unset($_SESSION['order_info']);
        } else {
            $output['code'] = 420;
        }
        break;
}

$output['order_info'] = $_SESSION['order_info'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);



