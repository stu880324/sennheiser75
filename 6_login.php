<?php include __DIR__. '/parts/1_config.php'; ?>
<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS名稱 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>6_login.css">

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->

  <div class="container-fluid login-container">
    <div class="row">
            <form class="mx-auto">			
				    <div class="">
                        <h3 style="color: #A2A2A2;">會員登入</h3>
                        <label for="validationDefault03" style="color:#A2A2A2;">帳號</label>
                        <input style=" border-radius:0;" type="text" class="form-control" id="validationDefault03" placeholder="請輸入您的手機號碼" required>
                   </div>

					<div>
                        <label for="validationDefault03" style="color:#A2A2A2;">密碼</label>
                        <input style=" border-radius:0;" type="password" class="form-control" id="validationDefault03" placeholder="請輸入您的會員密碼" required>
                    </div>
                    
                    <p class="mt-3">忘記密碼?</p>
			
					<div style="text-align:center;"><button type="button" class="my-2">登入</button></div>
					<div style="text-align:center;"><button type="button" class="">註冊</button></div>
            </form>
        
</div>
</div>

<!-- 刪到這裡 -->

<?php include __DIR__. '/parts/4_footer.php'; ?>
<?php include __DIR__. '/parts/5_scripts.php'; ?>
<?php include __DIR__. '/parts/6_html_foot.php'; ?>
