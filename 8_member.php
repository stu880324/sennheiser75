<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>8_member2.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php
if (!isset($_SESSION)) {
  session_start();
} ?>

<?php
// var_dump($_SESSION['userAccount'])
?>

<!-- 以下刪除就可以開始編輯 -->

<div class="container">

  <h2 class="welcome text-center mt-5">WELCOME BACK</h2>
  <div class="goback  text-center"><a style="color: black;" href="#">會員中心 </a> / <a style="color: black;" href="9_order.php"> 歷史訂單</a></div>

  <div class="coupon-title">線上帳戶</div>
  <table class="coupon">
    <tr>
      <td>折價券編號</td>
      <td>折價券序號</td>
      <td>折扣</td>
    </tr>
    <tr>
      <td>1</td>
      <td>ZXC123</td>
      <td>-$100</td>
    </tr>
  </table>

  <div class="coupon-title">預約資訊</div>
  <table class="coupon">
    <tr>
      <td>預約編號</td>
      <td>日期</td>
      <td>門市</td>
      <td>地址</td>
    </tr>
    <tr>
      <td>123456</td>
      <td>2020/11/25</td>
      <td>新北門市</td>
      <td>台北市中山區</td>
    </tr>
  </table>
  <div class="coupon-title">個人資料修改</div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-user "></span>
    <p>姓名</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="<?= $_SESSION['userAccount']['name'] ?>" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-phone-handset"></span>
    <p class="text">電話</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="<?= $_SESSION['userAccount']['account'] ?>" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-envelope"></span>
    <p>E-mail</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="<?= $_SESSION['userAccount']['email'] ?>" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-envelope"></span>
    <p>生日</p>
    <input id="birthday" style=" border-radius:0;" type="date" class="form-control" value="<?= $_SESSION['userAccount']['birthday'] ?>" />
    <!-- <input style=" border-radius:0;" type="text" class="form-control"  /> -->
  </div>
  <div style="text-align:center;"><button type="button" class="login-btn mb-5 mt-4">確定修改</button></div>

  <div class="coupon-title">個人資料修改</div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-lock"></span>
    <p>舊密碼</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-lock"></span>
    <p>新密碼</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-lock"></span>
    <p>確認新密碼</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="" />
  </div>
  <div style="text-align:center;"><button type="button" class="login-btn mb-5 mt-4">確定密碼</button></div>



</div>

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