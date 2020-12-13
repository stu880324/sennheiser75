<?php
require __DIR__ . '/parts/1_config.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
    'post' => $_POST
];

// if(empty($_POST['name'])){
    // echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
// }
// TODO: 檢查資料格式

if(empty($_POST['newPass'])){
    $sql = "UPDATE `member` SET 
        `name`=?,
        `email`=?,
        `account`=?,
        `birthday`=?
    WHERE `sid`=?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
            $_POST['name'],
            $_POST['email'],
            $_POST['mobile'],
            $_POST['birthday'],
            $_POST['sid'],
    ]);
    if($stmt->rowCount()==1){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料沒有變更';
    }
}
else{
    $sql = "UPDATE `member` SET 
        `name`=?,
        `email`=?,
        `account`=?,
        `birthday`=?,
        `password`=?
    WHERE `sid`=?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
            $_POST['name'],
            $_POST['email'],
            $_POST['mobile'],
            $_POST['birthday'],
            $_POST['newPass'],
            $_POST['sid'],
    ]);
    if($stmt->rowCount()==1){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料沒有變更';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);



