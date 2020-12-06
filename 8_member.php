<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<<<<<<< HEAD
<link rel="stylesheet" href="<?= WEB_ROOT ?>8_member.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>

=======
<link rel="stylesheet" href="<?= WEB_ROOT ?>8_member2.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
>>>>>>> 068b053de1b54014fd0b37962b3f428ea1f65405


<!-- 以下刪除就可以開始編輯 -->

<div class="container">

  <h2 class="welcome text-center mt-5">WELCOME BACK</h2>
<<<<<<< HEAD
  <div class="goback  text-center"><a style="color: black;" href="#">會員中心 </a> / <a style="color: black;" href="#"> 歷史訂單</a></div>
=======
  <div class="goback  text-center"><a style="color: black;" href="#">會員中心 </a> / <a style="color: black;" href="9_order.php"> 歷史訂單</a></div>
>>>>>>> 068b053de1b54014fd0b37962b3f428ea1f65405

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
<<<<<<< HEAD



  </table>

</div>

<!-- <div class="row">
   
        <h6 class="mt-5">線上帳戶</h6>
        <hr>
        <div class="col">折價劵</div>
        <div class="col">序號</div>
        
        <hr>
        <div class="row ml-2">
            <div class="col ml-3">1</div>
            <div class="col">ABC12345678</div>  
        </div>

          <h4 class="mt-5">預約資訊</h4>
          <hr>
          <div class="row ml-2">
            <div class="col">預約編號</div>
            <div class="col">日期</div>
            <div class="col">門市</div>
            <div class="col">地址</div>
            
        </div>
        <hr>
        <div class="row ml-2">
            <div class="col">1234556</div>
            <div class="col">2020/11/25</div>
            <div class="col">新北門市</div>
            <div class="col">台北市中山區</div>
            
        </div>
          <h4 class="mt-5">個人資料修改</h4>
          <hr>
          <div class="form-holder">
            <span class="lnr lnr-user "></span>
            <p>姓名</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="王小明" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-phone-handset"></span>
            <p>電話</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="0912345678" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-envelope"></span>
            <p>E-mail</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="123@gmail.com" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-envelope"></span>
            <p>生日</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="1992/01/01" />
          </div>
          <button class="my-5">
            <span>確定修改</span>
          </button>
          <h4 class="mt-5">修改密碼</h4>
          <hr>
          <div class="form-holder">
            <span class="lnr lnr-lock"></span>
            <p>舊密碼</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-lock"></span>
            <p>新密碼</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-lock"></span>
            <p>確認新密碼</p>
            <input style=" border-radius:0;" type="text" class="form-control" value="" />
          </div>
          <button class="my-5">
            <span>確定密碼</span>
          </button> -->







<!-- 刪到這裡 -->



=======
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
    <input style=" border-radius:0;" type="text" class="form-control" value="王小明" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-phone-handset"></span>
    <p class="text">電話</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="0912345678" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-envelope"></span>
    <p>E-mail</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="123@gmail.com" />
  </div>
  <div class="form-holder mt-3">
    <span class="lnr lnr-envelope"></span>
    <p>生日</p>
    <input style=" border-radius:0;" type="text" class="form-control" value="1992/01/01" />
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
>>>>>>> 068b053de1b54014fd0b37962b3f428ea1f65405


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>