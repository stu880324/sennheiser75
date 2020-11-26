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
                <span class="active">購物車 </span>
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
    <div class="line-top"></div>
    <div class="items-wrapper">
        <!-- 商品區塊 START -->
        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <img src="./images/small/product17.jpg" alt="">
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
        <!-- 商品區塊 END -->

        <!-- 商品區塊 START -->
        <div class="item1">
            <a id="remove-icon"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
            <a href="#" class="item">
                <img src="./images/small/product15.jpg" alt="">
                <div class="item-info">
                    <div class="item-name">GSP 370 超長續航力電競耳機</div>
                    <div class="item-price">NT$ 9,900</div>
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
        <!-- 商品區塊 END -->

    </div>

    <div class="list-inner">
        <!-- 總計區塊 START -->
        <div class="total-wrapper">
            <div class="wrap">小計 <price>NT$ <span>17,390</span></price>
            </div>
            <div class="wrap">運費<price>NT$ <span id="shipfee">0</span></price>
            </div>

            <hr>
            <div class="wrap">總計<price>NT$ <span id="final_price">17,390</span></price>
            </div>
        </div>
        <!-- 總計區塊 END -->
        <button class="btn-buy">結帳</button>
        <button class="btn-back">繼續購物</button>

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


    $('.btn-buy').on('click', function() {
        $.post('test.php', {
                name: "Donald Duck"
            },
            function(data, status) {
                console.log('data', data)
            }
        )
    })
</script>
<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>