<?php require __DIR__. '/parts/1_config.php';
// require __DIR__. '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
    'post' => $_POST
];

if(empty( $_SESSION['userAccount'])){
    $output['error'] = '沒有登入';
    echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
}
if(empty($_POST['location']) or empty($_POST['location']) or empty($_POST['location'])){
    echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
}
// TODO: 檢查資料格式

// $_SESSION['reservation'] = $_POST;
// $output = [
//     'success' => true,
//     'post' => $_POST,
// ];
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
// exit;

$sql = "INSERT INTO `reservation`(
       `member_sid`, `location`, `reservation_date`, `time`, `create_date`
        ) VALUES (
        ?, ?, ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
        $_SESSION['userAccount']['sid'],
        $_POST['location'],
        $_POST['reservation_date'],
        $_POST['time'],
]);
if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '成功送出';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);



