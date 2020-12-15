<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart4.css">
<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>


<!-- 進度列 -->
<div class="container">
    <div class="row">
        <ul class="progressbar">
            <li class="cart">
                <span>購物車 </span>
            </li>
            <li class="check">
                <span>結帳 </span>
            </li>
            <li class="active">
                <span>完成</span>
            </li>
        </ul>
    </div>


</div>

<!-- 訂單明細 -->
<div class="container">
    <div class="top-title">
        <h5>謝謝！我們已經收到您的訂單。</h5>
    </div>

    <div>
        <div class="product-detail">
            <ul class="detail-line">
                <li class="det-1">
                    <p>訂單編號</p>
                    <p><?= $_SESSION['orderDone']['sid'] ?></p>
                </li>
                <li class="det-1">
                    <p>日期</p>
                    <p><?= $_SESSION['orderDone']['date'] ?></p>
                </li>
                <li class="det-1">
                    <p>總金額</p>
                    <p>NT$ <?= number_format($_SESSION['orderDone']['total']) ?></p>
                </li>
                <li>
                    <p>付款方式</p>
                    <p>信用卡付款</p>
                </li>
            </ul>
        </div>


    </div>

    <div class="top-title">
        <h5>若您有任何問題，請透過訂單系統客服表單與我們聯繫。謝謝!</h5>
    </div>

    <div class="btn-all">
        <button class="btn-buy">查看訂單紀錄</button>
        <button class="btn-back">回到首頁</button>
    </div>

</div>



<script>
    $('.btn-buy').on('click', function() {
        location.href = "./9_order.php"
    })
    $('.btn-back').on('click', function() {
        location.href = "1_index.php"
    })
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>