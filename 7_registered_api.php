<?php

require __DIR__ . '/parts/1_config.php';

$output = [
    'success' => false,
    'name' => $_POST['name'],
    'mobile' => $_POST['mobile'],
    'email' => $_POST['email'],
    'birthday' => $_POST['birthday'],
    'password' => $_POST['password']
];


$o_sql = "INSERT INTO `member` (`account`, `password`, `name`, `birthday`, `email`) VALUES (?, ?, ?, ?, ?)";


$o_stmt = $pdo->prepare($o_sql);

//帶問號的地方,順序要對
$o_stmt->execute([
    $_POST['mobile'],
    $_POST['password'],
    $_POST['name'],
    $_POST['birthday'],
    $_POST['email']
]);

$order_sid = $pdo->lastInsertId();

// $sql = "SELECT * FROM `member` WHERE `account`=? AND `password`=?";
// //$output['sql'] = $sql;
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//         $_POST['account'],
//         $_POST['password'],
// ]);

// if($stmt->rowCount()>0){
//     $output['success'] = true;
//     $_SESSION['user'] = $stmt->fetch();
// }

echo json_encode($order_sid, JSON_UNESCAPED_UNICODE);

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
