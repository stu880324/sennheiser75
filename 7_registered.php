<?php include __DIR__. '/parts/1_config.php'; ?>
<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS名稱 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>7_registered1.css">

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<div class="wrapper">
      <div class="inner">
        <form action="">
          <h3>註冊帳號</h3>
          <div class="form-holder">
            <span class="lnr lnr-user"></span>
            <p>姓名</p>
            <input style=" border-radius:0;" type="text" class="form-control" placeholder="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-phone-handset"></span>
            <p>電話</p>
            <input style=" border-radius:0;" type="text" class="form-control" placeholder="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-envelope"></span>
            <p>E-mail</p>
            <input style=" border-radius:0;" type="text" class="form-control" placeholder="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-envelope"></span>
            <p>生日</p>
            <input style=" border-radius:0;" type="text" class="form-control" placeholder="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-lock"></span>
            <p>密碼</p>
            <input style=" border-radius:0;" type="password" class="form-control" placeholder="" />
          </div>
          <div class="form-holder">
            <span class="lnr lnr-lock"></span>
            <p>密碼確認</p>
            <input style=" border-radius:0;" type="password" class="form-control" placeholder="" />
          </div>
          <button class="my-3">
            <span>完成</span>
          </button>
        </form>
      </div>
    </div>
<!-- 刪到這裡 -->





<?php include __DIR__. '/parts/4_footer.php'; ?>
<?php include __DIR__. '/parts/5_scripts.php'; ?>
<?php include __DIR__. '/parts/6_html_foot.php'; ?>
