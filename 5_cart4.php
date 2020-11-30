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
            <li>
                <span classactive>購物車 </span>
            </li>
            <li>
                <span>結帳 </span>
            </li>
            <li>
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
                    <p>77422</p>
                </li>
                <li class="det-1">
                    <p>日期</p>
                    <p>2020-12-18</p>
                </li>
                <li class="det-1">
                    <p>總金額</p>
                    <p>NT$ 16,890</p>
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




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>