<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>7_registered.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<div class="wrapper">
  <div class="inner">
    <form action="">
      <h3>註冊帳號</h3>
      <div class="form-holder">
        <span class="lnr lnr-user"></span>
        <p>姓名</p>
        <input id="name" style=" border-radius:0;" type="text" class="form-control" placeholder="" />
      </div>
      <div class="form-holder">
        <span class="lnr lnr-phone-handset"></span>
        <p>電話</p>
        <input id="mobile" style=" border-radius:0;" type="text" class="form-control" placeholder="" />
      </div>
      <div class="form-holder">
        <span class="lnr lnr-envelope"></span>
        <p>E-mail</p>
        <input id="email" style=" border-radius:0;" type="email" class="form-control" placeholder="" />
      </div>
      <div class="form-holder">
        <span class="lnr lnr-envelope"></span>
        <p>生日</p>
        <input id="birthday" style=" border-radius:0;" type="date" class="form-control" placeholder="" />
      </div>
      <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <p>密碼</p>
        <input id="password" style=" border-radius:0;" type="password" class="form-control" placeholder="" />
      </div>
      <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <p>密碼確認</p>
        <input id="password2" style=" border-radius:0;" type="password" class="form-control" placeholder="" />
      </div>
      <button class="regBtn my-3">
        <span>完成</span>
      </button>
    </form>
  </div>
</div>
<!-- 刪到這裡 -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $('.regBtn').on('click', function(event) {

    event.preventDefault();
    if ($('#password').val() === $('#password2').val()) {
      $.post('./7_registered_api.php', {
        name: $('#name').val(),
        mobile: $('#mobile').val(),
        email: $('#email').val(),
        birthday: $('#birthday').val(),
        password: $('#password').val()
      }, function(data) {
        console.log(data);
      });
    } else {
      //密碼不一致
      console.log('密碼不一致', $('#password').val(), $('#password2').val())
      Swal.fire({
        title: '密碼不一致',
        icon: 'error',
        confirmButtonText: '好'
      })
    }

  });
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {
    $("#birthday").datepicker();
  });
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>




<?php include __DIR__ . '/parts/6_html_foot.php'; ?>