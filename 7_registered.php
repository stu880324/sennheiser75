<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>7_registered1.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<div class="wrapper">
  <div class="inner">
    <form action="">
      <h3 id="autoInput">註冊帳號</h3>
      <div class="form-holder">
        <span class="lnr lnr-user"></span>
        <p>姓名</p>
        <input id="name" style=" border-radius:0;" type="text" class="form-control" placeholder="" />
        <p id="noname" style="color:red;display:none;">請輸入姓名</p>
      </div>

      <div class="form-holder">
        <span class="lnr lnr-phone-handset"></span>
        <p>電話</p>
        <input id="mobile" style=" border-radius:0;" type="text" class="form-control" placeholder="" />
        <p id="nomobile" style="color:red;display:none;">請輸入電話</p>
      </div>
      <div class="form-holder">
        <span class="lnr lnr-envelope"></span>
        <p>E-mail</p>
        <input id="email" style=" border-radius:0;" type="email" class="form-control" placeholder="" />
        <p id="noemail" style="color:red;display:none;">請輸入email</p>
      </div>
      <div class="form-holder">
        <span class="lnr lnr-envelope"></span>
        <p>生日</p>
        <input id="birthday" style=" border-radius:0;" type="date" class="form-control" placeholder="" />
        <p id="nobirthday" style="color:red;display:none;">請輸入生日</p>
      </div>
      <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <p>密碼</p>
        <input id="password" style=" border-radius:0;" type="password" class="form-control" placeholder="" />
        <p id="nopassword" style="color:red;display:none;">請輸入密碼</p>
      </div>
      <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <p>密碼確認</p>
        <input id="password2" style=" border-radius:0;" type="password" class="form-control" placeholder="" />
        <p id="nopassword2" style="color:red;display:none;">請輸入相同密碼</p>
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

    let isPass = true;
    if ($('#name').val() === '') {
      isPass = false;
      $('#noname').show();
    } else {
      $('#noname').hide();
    }

    if ($('#mobile').val() === '') {
      isPass = false;
      $('#nomobile').show();
    } else {
      $('#nomobile').hide();
    }

    if ($('#email').val() === '') {
      isPass = false;
      $('#noemail').show();
    } else {
      $('#noemail').hide();
    }

    if ($('#birthday').val() === '') {
      isPass = false;
      $('#nobirthday').show();
    } else {
      $('#nobirthday').hide();
    }

    if ($('#password').val() === '') {
      isPass = false;
      $('#nopassword').show();
    } else {
      $('#nopassword').hide();
    }

    if ($('#password2').val() === '') {
      isPass = false;
      $('#nopassword2').html('請輸入確認密碼');
      $('#nopassword2').show();
    } else if ($('#password').val() !== $('#password2').val()) {
      isPass = false;
      $('#nopassword2').html('請輸入相同密碼').show();
    } else {
      $('#nopassword2').hide();
    }

    if (isPass) {
      $.post('./7_registered_api.php', {
        name: $('#name').val(),
        mobile: $('#mobile').val(),
        email: $('#email').val(),
        birthday: $('#birthday').val(),
        password: $('#password').val()
      }, function(data) {
        console.log(data);
        Swal.fire({
          title: '註冊成功',
          icon: 'success',
          confirmButtonText: '好',
          confirmButtonColor: '#000',
          iconColor: '#457c86',

        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "./6_login.php"

          }
        })
      });
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

<script>
  $('#autoInput').click(function() {
    console.log('hi')
    $('#name').val('江姿誼');
    $('#mobile').val('0978079183');
    $('#email').val('nahcy8114@gmail.com');
    $('#birthday').val('1992-01-04');
    $('#password').val('0978079183');
    $('#password2').val('0978079183');
  })
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>




<?php include __DIR__ . '/parts/6_html_foot.php'; ?>