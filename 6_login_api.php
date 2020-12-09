<?php require __DIR__. '/parts/1_config.php';

$output = [
    'success' => false,
    'account' => $_POST['account'],
    'password' => $_POST['password']
];
$sql = "SELECT * FROM `member` WHERE `account`=? AND `password`=?";
//$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['account'],
    $_POST['password'],
]);

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $_SESSION['userAccount'] = $stmt->fetch();
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
