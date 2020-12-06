<?php

require __DIR__ . '/parts/1_config.php';

$output = [
    'success' => false,
    'pageNum' => $_POST['pageNum'],
    'totalPage' => $_POST['totalPage'],
];
$sql = "SELECT * FROM `products`";

$whereString = ' WHERE ';
$isWhereExist = false;
$output['isset_type'] = strlen($_POST['type']);
if (strlen($_POST['type']) > 0) {
    if ($isWhereExist) {
        $whereString .= "AND ";
    }
    $whereString .= "`wearing`=? ";
    $isWhereExist = true;
    $whereArray[] = $_POST['type'];
}
$output['isset_color'] = strlen($_POST['color']);
if (strlen($_POST['color']) > 0) {
    if ($isWhereExist) {
        $whereString .= "AND ";
    }
    $whereString .= "`color`=? ";
    $isWhereExist = true;
    $whereArray[] = $_POST['color'];
}

$featherDataMap = ['bluetooth', 'noise-canceling', 'rotatable', 'water-proof', 'big-size', 'ultra-wideband'];
foreach ($_POST['featureArray'] as $key => $value) {
    if ($value === 'true') {
        if ($isWhereExist) {
            $whereString .= "AND ";
        }
        $whereString .= "`" . $featherDataMap[$key] . "`=? ";
        $isWhereExist = true;
        $whereArray[] = 1;
    }
}

$moodDataMap = ['sporting', 'commuting', 'gaming', 'recording', 'meeting'];
if (strlen($_POST['moodOption']) > 0) {
    if ($isWhereExist) {
        $whereString .= "AND ";
    }
    $whereString .= "`" . $moodDataMap[$_POST['moodOption']] . "`=? ";
    $isWhereExist = true;
    $whereArray[] = 1;
}

$sql .= ($isWhereExist) ? $whereString : '';
$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
if ($isWhereExist) {
    $output['isWhereExist'] = true;
    $stmt->execute(
        $whereArray
    );
} else {
    $output['isWhereExist'] = false;
    $stmt->execute();
}


if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $output['result'] = $stmt->fetchAll();
} else {
    $output['result'] = 'no data';
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
