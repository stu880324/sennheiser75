<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart1.css">
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


<!-- 商品區 -->
<div class="cart-wrapper" id="cart_list">
    <div class="items-wrapper">

        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <div class="item-img">
                    <img src="./images/small/product17.jpg" alt="">
                </div>
                <div class="item-info">
                    <div class="item-name">GSP 500 頂級開放式電競</div>
                    <div class="item-price"> NT$ 7,490</div>
                </div>
            </a>
            <div class="item-total-wrapper">
                <div class="item-total-wrap">
                    <p>數量</p>
                    <div class="quantity d-flex">
                        <input class="min" name="" type="button" value="-" />
                        <input class="text-box" name="" type="text" value="0" />
                        <input class="add" name="" type="button" value="+" />
                    </div>
                </div>
                <div class="item-total-wrap ">
                    <p>小計</p>
                    <div class="item-wrap-total">NT$ 7,490</div>
                </div>
            </div>
        </div>

        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <div class="item-img">
                    <img src="./images/small/product19.jpg" alt="">
                </div>
                <div class="item-info">
                    <div class="item-name">GSP 670 頂級無線電競耳機</div>
                    <div class="item-price">NT$ 10,900</div>
                </div>
            </a>
            <div class="item-total-wrapper">
                <div class="item-total-wrap">
                    <p>數量</p>
                    <div class="quantity d-flex">
                        <input class="min" name="" type="button" value="-" />
                        <input class="text-box" name="" type="text" value="0" />
                        <input class="add" name="" type="button" value="+" />
                    </div>
                </div>
                <div class="item-total-wrap ">
                    <p>小計</p>
                    <div class="item-wrap-total">NT$ 9,900</div>
                </div>
            </div>
        </div>

        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <div class="item-img">
                    <img src="./images/small/product19.jpg" alt="">
                </div>
                <div class="item-info">
                    <div class="item-name">GSP 670 頂級無線電競耳機</div>
                    <div class="item-price">NT$ 10,900</div>
                </div>
            </a>
            <div class="item-total-wrapper">
                <div class="item-total-wrap">
                    <p>數量</p>
                    <div class="quantity d-flex">
                        <input class="min" name="" type="button" value="-" />
                        <input class="text-box" name="" type="text" value="0" />
                        <input class="add" name="" type="button" value="+" />
                    </div>
                </div>
                <div class="item-total-wrap ">
                    <p>小計</p>
                    <div class="item-wrap-total">NT$ 9,900</div>
                </div>
            </div>
        </div>

        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <div class="item-img">
                    <img src="./images/small/product19.jpg" alt="">
                </div>
                <div class="item-info">
                    <div class="item-name">GSP 670 頂級無線電競耳機</div>
                    <div class="item-price">NT$ 10,900</div>
                </div>
            </a>
            <div class="item-total-wrapper">
                <div class="item-total-wrap">
                    <p>數量</p>
                    <div class="quantity d-flex">
                        <input class="min" name="" type="button" value="-" />
                        <input class="text-box" name="" type="text" value="0" />
                        <input class="add" name="" type="button" value="+" />
                    </div>
                </div>
                <div class="item-total-wrap ">
                    <p>小計</p>
                    <div class="item-wrap-total">NT$ 9,900</div>
                </div>
            </div>
        </div>

        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <div class="item-img">
                    <img src="./images/small/product19.jpg" alt="">
                </div>
                <div class="item-info">
                    <div class="item-name">GSP 670 頂級無線電競耳機</div>
                    <div class="item-price">NT$ 10,900</div>
                </div>
            </a>
            <div class="item-total-wrapper">
                <div class="item-total-wrap">
                    <p>數量</p>
                    <div class="quantity d-flex">
                        <input class="min" name="" type="button" value="-" />
                        <input class="text-box" name="" type="text" value="0" />
                        <input class="add" name="" type="button" value="+" />
                    </div>
                </div>
                <div class="item-total-wrap ">
                    <p>小計</p>
                    <div class="item-wrap-total">NT$ 9,900</div>
                </div>
            </div>
        </div>


    </div>

    <!-- 小計總計區 -->
    <div class="list-inner">
        <div class="total-wrapper">
            <div class="subtotal">小計 <span>NT$ <span>18,390</span></span>
            </div>
            <div class="shipfee">運費<span>NT$ <span id="shipfee">0</span></span>
            </div>

            <hr>
            <div class="final_price">總計<span>NT$ <span id="final_price">18,390</span></span>
            </div>
        </div>

        <div class="button-area">
            <button class="btn-buy">結帳</button>
            <button class="btn-back">繼續購物</button>
        </div>

    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<script>
    $(function() {
        $(".add").click(function() {
            var t = $(this).parent().find('input[class*=text-box]');
            t.val(parseInt(t.val()) + 1)
            setTotal();
        })
        $(".min").click(function() {
            var t = $(this).parent().find('input[class*=text-box]');
            t.val(parseInt(t.val()) - 1)
            if (parseInt(t.val()) < 0) {
                t.val(0);
            }
            setTotal();
        })

        function setTotal() {
            var s = 0;
            $(".qual").each(function() {
                s += parseInt($(this).find('input[class*=text-box]').val()) * parseFloat($(this).find('span[class*=price]').text());
            });
            $("#total").html(s.toFixed(2));
        }
        setTotal();
    })
</script>




<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>