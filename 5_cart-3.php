<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart.css">
<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<!-- 首頁導覽列 -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
</nav>

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

<!-- 訂單資訊 -->
<div class="container">
    <div class="row">
        <div class="order-title">
            <ul class="order-detail">
                <li>
                    <p>訂單編號</p>
                    <p>77422</p>
                </li>
                <li>
                    <p>配送方式</p>
                    <p>宅配到府</p>
                </li>
                <li>
                    <p>付款方式</p>
                    <p>信用卡付款</p>
                </li>
                <li>
                    <p>訂單總計</p>
                    <p>NT$ 10,100</p>
                </li>
            </ul>
        </div>

        <div class="creditcard-from">
            <ol>

            </ol>

            <ol>
                <button class="btn-buy">確認付款</button>
            </ol>

        </div>
    </div>



</div>








<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>