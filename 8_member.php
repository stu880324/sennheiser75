<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>8_member2.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php include __DIR__ . '/parts/7_fix-icon.php'; ?>

<?php
if (!isset($_SESSION)) {
  session_start();
} ?>

<?php

$sql = "SELECT * FROM `coupon` WHERE `member_sid`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
  $_SESSION['userAccount']['sid'],
]);

if ($stmt->rowCount() > 0) {
  $coupon = $stmt->fetchAll();
}

$sql2 = "SELECT * FROM `reservation` WHERE `member_sid`=?";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute([
  $_SESSION['userAccount']['sid'],
]);

if ($stmt2->rowCount() > 0) {
  $reservation = $stmt2->fetchAll();
}

$sql3 = "SELECT * FROM `member` WHERE `sid`=?";
$stmt3 = $pdo->prepare($sql3);
$stmt3->execute([
  $_SESSION['userAccount']['sid'],
]);

if ($stmt3->rowCount() > 0) {
  $userData = $stmt3->fetch();
}

?>

<!-- 以下刪除就可以開始編輯 -->

<div class="container">

  <h2 class="welcome text-center mt-5">WELCOME BACK</h2>
  <div class="goback  text-center"><a style="color: black;" href="#">會員中心 </a> / <a style="color: black;" href="9_order.php"> 歷史訂單</a></div>

  <div class="coupon-title">線上帳戶</div>
  <?php if (isset($coupon)) : ?>
    <table class="coupon">
      <tr>
        <td class="pl-5 w-40">折價券編號</td>
        <td>折價券序號</td>
        <td>折扣</td>
      </tr>

      <?php foreach ($coupon as $c) : ?>
        <tr>
          <td class="pl-6"><?= $c['sid'] ?></td>
          <td><?= $c['coupon_mumber'] ?></td>
          <td><?= $c['discountprice'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else : ?>
    <h4 style="padding:30px 0;text-align:center;">您目前沒有任何折價券</h4>
  <?php endif; ?>

  <div class="coupon-title">預約資訊</div>
  <?php if (isset($reservation)) : ?>
    <table class="coupon text-center">
      <tr>
        <td>預約編號</td>
        <td>日期</td>
        <td>時間</td>
        <td>門市</td>
      </tr>
      <?php foreach ($reservation as $r) : ?>
        <tr>
          <td><?= $r['sid'] ?></td>
          <td><?= $r['reservation_date'] ?></td>
          <td><?= $r['time'] ?></td>
          <td><?= $r['location'] ?></td>
          <td></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else : ?>
    <h4 style="padding:30px 0;text-align:center;">您目前沒有任何預約</h4>
  <?php endif; ?>
  <div class="coupon-title">個人資料修改</div>
  <form name="form1" onsubmit="checkForm(); return false;" novalidate>
    <input type="text" name="sid" value="<?php echo $_SESSION['userAccount']['sid'] ?>" hidden>
    <div class="form-holder mt-3">
      <span class="lnr lnr-user "></span>
      <p>姓名</p>
      <input id="name" name="name" style=" border-radius:0;" type="text" class="form-control" value="<?= $userData['name'] ?>" />
    </div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-phone-handset"></span>
      <p class="text">電話</p>
      <input id="mobile" name="mobile" style=" border-radius:0;" type="text" class="form-control" value="<?= $userData['account'] ?>" />
    </div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-envelope"></span>
      <p>E-mail</p>
      <input id="email" name="email" style=" border-radius:0;" type="text" class="form-control" value="<?= $userData['email'] ?>" />
    </div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-envelope"></span>
      <p>生日</p>
      <input id="birthday" name="birthday" style=" border-radius:0;" type="date" class="form-control" value="<?= $userData['birthday'] ?>" />
      <!-- <input style=" border-radius:0;" type="text" class="form-control"  /> -->
    </div>
    <div style="text-align:center;"><button type="button" class="update-user-btn mb-5 mt-4">確定修改</button></div>

    <div class="coupon-title">密碼修改</div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-lock"></span>
      <p>舊密碼</p>
      <input id="oldPass" name="oldPass" style=" border-radius:0;" type="password " class="form-control" value="" autocomplete="current-password" />
    </div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-lock"></span>
      <p>新密碼</p>
      <input id="newPass" name="newPass" style=" border-radius:0;" type="password" class="form-control new-password" value="" autocomplete="new-password" />
    </div>
    <div class="form-holder mt-3">
      <span class="lnr lnr-lock"></span>
      <p>確認新密碼</p>
      <input style=" border-radius:0;" type="password" class="form-control new-password" value="" autocomplete="new-password" />
    </div>
    <div style="text-align:center;"><button type="button" class="update-user-btn mb-5 mt-4">確定密碼</button></div>

  </form>

</div>

<script>
  $('.update-user-btn').on('click', function() {
    checkForm();
  })

  // const name = $('#name'),
  //       email = $('#email'),
  //       info_bar = $('#info_bar')

  function checkForm() {
    // name.next().text('');
    // email.next().text('');

    let isPass = true;

    // if(name.val().length < 2){
    //     isPass = false;
    //     name.next().text('請填寫正確的姓名!');
    // }
    // // https://github.com/shinder/mmmh57-php/blob/master/proj/login.php

    // if(email.val()){
    //     if(! email_re.test(email.val())){
    //         isPass = false;
    //         email.next().text('請填寫正確的 email 格式!');
    //     }
    // }
    console.log('hi')
    // if(isPass){
    $.post('8_member_api.php', $(document.form1).serialize(), function(data) {
      console.log(data);
      if (data.success) {
        Swal.fire({
            title: '修改成功',
            icon: 'success',
            confirmButtonText: '好',
            confirmButtonColor: '#000',
            iconColor: '#457c86',

          })
          .then((btnclick) => {
            if (btnclick.isConfirmed) {
              // window.location.href = "8_member.php"
            }
          })
      } else {
        // info_bar
        //     .removeClass('alert-success')
        //     .addClass('alert-danger')
        //     .text(data.error || '資料沒有修改');
      }
      // info_bar.slideDown();

      // setTimeout(function(){
      //     info_bar.slideUp();
      // }, 2000);
    }, 'json')
    // }


  }
</script>

<!-- <script>
        $('.button').on('click', function() {
                $.post('./6_login_api.php', {
                        account: $('#accountInput').val(),
                        password: $('#passInput').val()
                }, function(data) {
                        console.log(data);
                        if (JSON.parse(data).success) {
                                Swal.fire({
                                        title: '登入成功',
                                        icon: 'success',
                                        confirmButtonText: '好',
                                        confirmButtonColor: '#000',

                                })
                        } else {
                                Swal.fire({
                                        title: '登入失敗',
                                        icon: 'error',
                                        confirmButtonColor: '#e3b684',
                                        confirmButtonText: '好'
                                })

                        }
                });
        });

        $('.gotoRegPageBtn').on('click', function() {
                window.location.href = "./7_registered.php"
        })

</script> -->


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>