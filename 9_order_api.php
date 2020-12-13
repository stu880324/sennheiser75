<?php

require __DIR__ . '/parts/1_config.php';

$output = [
    'success' => false,
    'member_sid' => $_POST['member_sid'],
];
$sql = "SELECT * FROM `orders` WHERE `member_sid`=?";
//$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['member_sid'],
]);

function getDetails(PDO $pdo, $orderSid)
{
    $output['getDetails'] = true;
    $sql2 = "SELECT * FROM `order_detail` a LEFT JOIN products b on a.products_sid = b.sid WHERE `orders_sid`=?";

    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute([
        $orderSid,
    ]);

    if ($stmt2->rowCount() > 0) {
        return $stmt2->fetchAll();
    } else {
        return "";
    }
}

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $output['orders'] = $stmt->fetchAll();
    $output['count'] = count($output['orders']);

    if (count($output['orders']) > 0) {
        foreach ($output['orders'] as $order) {
            $output['orders111'] = $order['sid'];
            $output['order_detail'][] = getDetails($pdo, $order['sid']);
        }
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

// if(isset($_POST['account']) and isset($_POST['password'])){
//     if($_POST['account']==='shin' and $_POST['password']==='1234') {
//         $_SESSION['user'] = [
//                 'account' => 'shin',
//                 'nickname' => '小新',
//         ];
//     } else {
//         $msg = '帳號或密碼錯誤';
//     }
// }
