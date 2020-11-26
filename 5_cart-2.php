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

<!-- 商品區 -->
<div class="container">
    <div class="row">
        <div class="line-top"></div>
        <div class="select-item">
            <ul>
                <li>
                    <div class="select1">
                        <img class="select1-img" src="./imgs/5_cart/product17.jpg" alt="">
                        <div class="select-total">
                            <div class="select-qty">
                                <span>數量:</span>
                                <span> 1</span>
                            </div>

                            <div class="select-sub">
                                <span> NT$ 7,490</span>
                            </div>
                        </div>
                    </div>

                    <div class="select-info">
                        <div class="select-info1">
                            <p> GSP 500 頂級開放式電競</p>
                        </div>
                        <div class="select-info1">
                            <p> 價格 NT$ 7,490</p>
                        </div>
                    </div>

                <li>
                <li>
                    <div class="select2">
                        <img class="select2-img" src="./imgs/5_cart/product15.jpg" alt="">
                        <div class="select-total">
                            <div class="select-qty">
                                <span>數量:</span>
                                <span> 1</span>
                            </div>

                            <div class="select-sub">
                                <span> NT$ 9,900</span>
                            </div>
                        </div>
                    </div>

                    <div class="select-info">
                        <div class="select-info2">
                            <p> GSP 370 超長續航力電競耳機</p>
                        </div>
                        <div class="select-info3">
                            <p> 價格 NT$ 9,900</p>
                        </div>
                    </div>

                <li>
                    <!-- <li>
                        <div class="select-fee">
                            <div class="select-fee1">
                                <span>小計</span>
                                <span> NT$ 17,390</span>
                            </div>
                            <div class="select-fee2">
                                <span>運費</span>
                                <span> NT$ 0</span>
                            </div>
                            <div class="select-fee3">
                                <span>折扣</span>
                                <span> -NT$1,500</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="select-all">
                            <span> 總金額</span>
                            <span> NT$ 15,890</span>
                        </div>
                    </li>

                    <li>
                        <div class="select-discount">
                            <span>選擇優惠券代碼</span>
                            <ul>
                                <select class="discount-menu" name="discount" id="discount">
                                    <option value="ZXC123">ZXC123</option>
                                    <option value="ABC456">ABC456</option>
                                    <option value="NTC789">NTC789</option>
                                </select>
                                <button class="btn-buy">結帳</button>
                            </ul>
                        </div>
                    </li> -->
            </ul>
        </div>

        <div class="order-from">
            <ol>
                <span>選擇優惠券代碼</span>
                <ul>
                    <select class="discount-menu" name="discount" id="discount">
                        <option value="ZXC123">ZXC123</option>
                        <option value="ABC456">ABC456</option>
                        <option value="NTC789">NTC789</option>
                    </select>
                    <button class="btn-buy">使用</button>
                </ul>

            </ol>


            <ol>
                <p>1. 選擇運送方式</p>
                <input type="checkbox" id="home" name="home" value="宅配">
                <label for="home"> 宅配</label><br>
            </ol>
            <ol>
                <p>2. 選擇付款方式</p>
                <input type="checkbox" id="credit-card" name="credit-card" value="信用卡">
                <label for="credit-card"> 信用卡</label><br>
            </ol>
            <ol>
                <p>3. 收件人資訊</p>
                <form>
                    <label for="name">姓名</label><br>
                    <input type="text" id="name" name="name" value="" placeholder="請填入姓名"><br><br>
                    <label for="phone">電話</label><br>
                    <input type="text" id="phone" name="phone" value="" placeholder="請填入電話"><br><br>
                    <label for="address">收件地址</label><br>
                    <input type="text" id="address" name="address" value="" placeholder="請填入地址"><br><br>
                    <label for="note">備註</label><br>
                    <input type="text" id="note" name="note" value=""><br><br>
                    <input type="checkbox" id="info" name="info" value="同訂購人資訊">
                    <label for="info"> 同訂購人資訊</label><br>
                    <input type="checkbox" id="rule" name="rule" value="我已閱讀並同意購物條款與服務條款">
                    <label for="rule"> 我已閱讀並同意購物條款與服務條款</label><br>
                </form>
            </ol>

            <ol>
                <div class="select-fee">
                    <div class="select-fee1">
                        <span>小計</span>
                        <span> NT$ 17,390</span>
                    </div>
                    <div class="select-fee2">
                        <span>運費</span>
                        <span> NT$ 0</span>
                    </div>
                    <div class="select-fee3">
                        <span>折扣</span>
                        <span> -NT$1,500</span>
                    </div>
                </div>
            </ol>

            <ol>
                <div class="select-all">
                    <span> 總金額</span>
                    <span> NT$ 15,890</span>
                </div>
            </ol>
            <ol>

            </ol>

            <button class="btn-buy">前往結帳付款</button>
        </div>
    </div>

</div>







<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



</script>
<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>