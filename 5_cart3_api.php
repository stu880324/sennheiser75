<?php

require __DIR__ . '/parts/1_config.php';

$output = [
    'success' => false,
];


$o_sql = "INSERT INTO `orders` (`member_sid`, `amount`, `order_date`, `coupon_number`,`receiver_name`,`receiver_phone`,`receiver_address`,`pay`,`creditcard_number`,`creditcard_name`,`expiredMonth`,`expiredYear`,`creditcard_security`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$o_stmt = $pdo->prepare($o_sql);

//帶問號的地方,順序要對
$o_stmt->execute([
    $_SESSION['userAccount']['sid'],
    $_SESSION['order_info']['totalPrice'],
    date("Y-m-d"),
    $_SESSION['order_info']['couponChoose'],
    $_SESSION['order_info']['rcpt_name'],
    $_SESSION['order_info']['rcpt_mobile'],
    $_SESSION['order_info']['rcpt_address'],
    $_SESSION['order_info']['payment'],
    $_POST['creditcard_number'],
    $_POST['creditcard_name'],
    $_POST['expiredMonth'],
    $_POST['expiredYear'],
    $_POST['creditcard_security']
]);

$order_sid = $pdo->lastInsertId();
$_SESSION['orderDone']['sid'] = $order_sid;
$_SESSION['orderDone']['date'] = date("Y-m-d");
$_SESSION['orderDone']['total'] = $_SESSION['order_info']['totalPrice'];

foreach ($_SESSION['cart'] as $cart){
    $sql = "INSERT INTO `order_detail` (`orders_sid`, `products_sid`, `quantity`) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $order_sid,
        $cart['sid'],
        $cart['quantity']
    ]);
}

unset($_SESSION['cart']);
unset($_SESSION['order_info']);

echo json_encode($order_sid, JSON_UNESCAPED_UNICODE);




