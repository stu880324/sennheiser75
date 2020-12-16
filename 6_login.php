<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="./6_login.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php
if (isset($_SERVER['HTTP_REFERER'])) {
        $gotoURL = $_SERVER['HTTP_REFERER'];
} else {
        $gotoURL = '1_index.php';
}

?>

<!-- 以下刪除就可以開始編輯 -->

<div class="container-fluid login-container">
        <div class="row">
                <form class="mx-auto">
                        <div class="">
                                <h3 style="color: #A2A2A2;">會員登入</h3>
                                <label for="validationDefault03" style="color:#A2A2A2;">帳號</label>
                                <input style=" border-radius:0;" type="text" class="form-control" id="accountInput" placeholder="請輸入您的手機號碼" required>
                        </div>

                        <div>
                                <label for="validationDefault03" style="color:#A2A2A2; margin-top: 10px;">密碼</label>
                                <input style=" border-radius:0;" type="password" class="form-control" id="passInput" placeholder="請輸入您的會員密碼" required>
                        </div>

                        <a href="#" class="forget-password mt-2 ml-auto">忘記密碼?</a>

                        <div style="text-align:center;"><button type="button" class="login-btn my-2">登入</button></div>
                        <div style="text-align:center;"><button type="button" class="gotoRegPageBtn">註冊</button></div>
                </form>

        </div>
</div>

<!-- 刪到這裡 -->




<script>
        $('.login-btn').on('click', function() {
                $.post('./6_login_api.php', {
                        account: $('#accountInput').val(),
                        password: $('#passInput').val()
                }, function(data) {
                        console.log(data);
                        let result = JSON.parse(data);
                        if (result.success) {

                                Swal.fire({
                                                title: '登入成功',
                                                icon: 'success',
                                                confirmButtonText: '好',
                                                confirmButtonColor: '#000',

                                        })
                                        .then((btnclick) => {
                                                if (btnclick.isConfirmed) {
                                                        <?php if ($gotoURL === 'http://localhost/sennheiser75/5_cart1.php') : ?>
                                                                window.location.href = "./5_cart2.php"
                                                        <?php else : ?>
                                                                window.location.href = "./8_member.php"
                                                        <?php endif; ?>
                                                }
                                        })
                        } else {
                                Swal.fire({
                                        title: '密碼錯誤',
                                        icon: 'error',
                                        confirmButtonColor: '#e3b684',
                                        confirmButtonText: '好'
                                })

                        }
                });
        });

        $('.gotoRegPageBtn').on('click', function() {
                window.location.href = "./7_registered.php"
        });
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>