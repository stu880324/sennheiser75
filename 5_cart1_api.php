<?php

if (!isset($_SESSION)) {
  session_start();
}

if ($_POST['action'] == "remove") {
  foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['sid'] == $_POST['sid']) {
      unset($_SESSION['cart'][$key]);
    }
  }

  echo "刪除成功";
}




if ($_POST['action'] == "update") {
  $_SESSION['cart'][$_POST['sid']]['quantity'] = $_POST['number'];
  echo "update 成功";
}
