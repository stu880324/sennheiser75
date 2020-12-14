<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart1_1.css">
<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>


<!-- 進度列 -->
<div class="container">
    <div class="row">
        <ul class="progressbar">
            <li class="active">
                <span>購物車 </span>
            </li>
            <li class="check">
                <span>結帳 </span>
            </li>
            <li class="finish">
                <span>完成</span>
            </li>
        </ul>
    </div>


</div>


<!-- 商品區 -->
<div class="cart-wrapper" id="cart_list">
    <div class="items-wrapper">

        <?php foreach ($_SESSION['cart'] as $cart) : ?>
            <div class="item1">
                <a class="remove-icon" data-sid="<?php echo $cart['sid'] ?>"><img src="./images/5_cart/remove-icon.svg" alt=""></a>
                <a href="#" class="item">
                    <div class="item-img">
                        <img src="./images/small/product<?= $cart['sid'] ?>.jpg" alt="">
                    </div>

                </a>
                <div class="item-total-wrapper">
                    <div class="item-total-wrap">
                        <div class="item-info">
                            <div class="item-name">
                                <p><?= $cart['english_name'] ?></p>
                                <p><?= $cart['chinese_name'] ?></p>
                            </div>
                            <div class="item-price">NT$ <?= number_format($cart['price']) ?></div>
                        </div>
                    </div>

                    <div class="item-total-wrap">
                        <p>數量</p>
                        <div class="quantity d-flex">
                            <input class="min" name="" type="button" value="-" data-sid="<?php echo $cart['sid'] ?>" />
                            <input class="text-box" name="" type="text" value="<?= $cart['quantity'] ?>" />
                            <input class="add" name="" type="button" value="+" data-sid="<?php echo $cart['sid'] ?>" />
                        </div>
                    </div>
                    <div class="item-total-wrap ">
                        <p>小計</p>
                        <div class="item-wrap-total">NT$ <?= number_format($cart['price'] * $cart['quantity']) ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 小計總計區 -->
    <div class="list-inner">
        <div class="total-wrapper">
            <div class="subtotal">小計 <span id="subtotal">0</span>
            </div>
            <div class="shipfee">運費<span id="shipfee">Free</span>
            </div>
            <div class="discount1">折扣<span id="discount1"></span>
            </div>

            <hr>
            <div class="final_price">總計<span id="final_price">0</span>
            </div>
        </div>

        <div class="button-area">
            <button class="btn-buy">結帳</button>
            <button class="btn-back">繼續購物</button>
        </div>
    </div>
</div>


<script>
    $(function() {
        $(".add").click(function() {

            //取得數量
            console.log('value', $(this).prev().val())

            let number = $(this).prev().val();
            number = +number + 1
            $(this).prev().val(number);

            //取得單價
            let priceNT = $(this).parents('.item-total-wrap').prev().find('.item-price').text()
            //取得數字版本的單價
            let priceNumber = numberWithoutCommas(priceNT);

            //取得數量＊單價
            let totalPriceNumber = priceNumber * number
            console.log('totalPriceNumber', totalPriceNumber)


            //將總計變成有 NT 的版本
            let totalPriceNT = numberWithCommas(totalPriceNumber);
            console.log('totalPriceNT', totalPriceNT);

            let totalNumber = numberWithoutCommas($(this).parents('.item-total-wrap').prev().find('.item-price').text()) * (number)

            $(this).parents('.item-total-wrapper').find('.item-wrap-total').text(totalPriceNT)

            updateSubtotal();
            updateFinalPrice();

            $.post('5_cart1_api.php', {
                sid: $(this).data('sid'),
                number: number,
                action: 'update'
            }, function(data) {
                console.log(data);
            }, 'json');
        })



        $(".min").click(function() {
            //取得數量
            console.log('value', $(this).next().val())
            let number = $(this).next().val();
            number = +number - 1
            $(this).next().val(number);
            console.log('number', number);
            //取得單價
            let priceNT = $(this).parents('.item-total-wrap').prev().find('.item-price').text()
            console.log('priceNT', priceNT);
            //取得數字版本的單價
            let priceNumber = numberWithoutCommas(priceNT);
            console.log('priceNumber', priceNumber);
            //取得數量＊單價
            let totalPriceNumber = priceNumber * number
            console.log('totalPriceNumber', totalPriceNumber)

            //將總計變成有 NT 的版本
            let totalPriceNT = numberWithCommas(totalPriceNumber);
            console.log('totalPriceNT', totalPriceNT);

            let totalNumber = numberWithoutCommas($(this).parents('.item-total-wrap').prev().find('.item-price').text()) * (number)

            $(this).parents('.item-total-wrapper').find('.item-wrap-total').text(totalPriceNT)

            updateSubtotal();
            updateFinalPrice();

            $.post('5_cart1_api.php', {
                sid: $(this).data('sid'),
                number: number,
                action: 'update'
            }, function(data) {
                console.log(data);
            }, 'json');
        })


    })

    function numberWithCommas(x) {
        return 'NT$ ' + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    function numberWithoutCommas(x) {
        return x.toString().replace('NT$ ', '').replace(/,/g, "");;
    }

    function updateSubtotal() {
        let total = 0;
        $('.item-wrap-total').each(function(index, value) {
            // console.log('index', index, ',value', numberWithoutCommas(value.innerHTML))
            total += +numberWithoutCommas(value.innerHTML);
        })

        console.log('total', total)
        $('#subtotal').text(numberWithCommas(total))
    }

    $('.remove-icon').on('click', function() {
        $(this).parent().remove();
        $.post('5_cart1_api.php', {
            sid: $(this).data('sid'),
            action: 'remove'
        }, function(data) {
            console.log(data);
        }, 'json');
        updateSubtotal();
        updateFinalPrice();
    })

    function updateFinalPrice() {

        let subTotal = numberWithoutCommas($("#subtotal").text())
        let finalPrice = +subTotal

        $("#final_price").text(numberWithCommas(finalPrice))
    }

    updateSubtotal();
    updateFinalPrice();
</script>




<script>
    $('.btn-buy').on('click', function() {
        location.href = "./5_cart2.php"
    })
    $('.btn-back').on('click', function() {
        location.href = "2_productList.php"
    })
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>