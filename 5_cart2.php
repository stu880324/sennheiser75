<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart2.css">
<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}


$sql = "SELECT * FROM `coupon` WHERE `member_sid`=? ";
//$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_SESSION['userAccount']['sid'],
]);

if ($stmt->rowCount() > 0) {
    $coupon = $stmt->fetchAll();
} else {
    $coupon = "";
}
?>

<!-- 進度列 -->
<div class="container">
    <div class="row">
        <ul class="progressbar">
            <li class="cart">
                <span>購物車 </span>
            </li>
            <li class="active">
                <span>結帳 </span>
            </li>
            <li class="finish">
                <span>完成</span>
            </li>
        </ul>
    </div>


</div>

<!-- 商品區 -->
<div class="content-layout">
    <div class="list-wrapper">
        <div class="main-wrap d-flex">
            <div class="product-list">
                <ul>
                    <?php foreach ($_SESSION['cart'] as $cart) : ?>
                        <li>
                            <div class="cover">
                                <img src="./images/small/product<?= $cart['sid'] ?>.jpg" alt="">

                            </div>

                            <div class="item-total-wrap">
                                <div class="item-info">
                                    <div class="item-name">
                                        <p><?= $cart['english_name'] ?></p>
                                        <p><?= $cart['chinese_name'] ?></p>
                                    </div>
                                    <div class="item-price"> NT$ <?= number_format($cart['price']) ?></div>
                                    <p>數量: <?= $cart['quantity'] ?></p>
                                    <p>小計: NT$ <?= number_format($cart['price'] * $cart['quantity']) ?></p>
                                </div>

                            </div>
                        </li>
                    <?php endforeach; ?>


                </ul>




            </div>
            <div class="check-info">
                <div class="check-info-wrap">
                    <div class="promo">
                        <h5>選擇優惠碼</h5>
                        <div class="select">
                            <?php if ($coupon === '') : ?>
                                <select name="coupon_list" id="coupon_list" disabled>
                                    <option selected="" disabled="">無優惠券</option>
                                </select>

                            <?php else : ?>
                                <select name="coupon_list" id="coupon_list">
                                    <option selected="" disabled="">選擇優惠碼</option>

                                    <?php foreach ($coupon as $key => $value) { ?>
                                        <option class="couponOption" onchange="handleCouponChange()" value="<?= $value['coupon_mumber'] ?>" data-discount="<?= $value['discountprice'] ?>"><?= $value['coupon_mumber'] ?></option>
                                    <?php } ?>

                                </select>

                            <?php endif; ?>
                        </div>
                        <!-- <button class="btn-buy-1">使用</button> -->
                    </div>
                    <div class="form check-item" id="ship-option">
                        <h5>選擇運送方式</h5>
                        <input type="radio" id="shipment_deliver_to_home" name="shipment" value="deliver_to_home">
                        <label for="shipment_deliver_to_home">宅配</label>
                    </div>
                    <div class="form check-item">
                        <h5>選擇付款方式</h5>
                        <input type="radio" id="payment_visa" name="payment" value="creditcard">
                        <label for="payment_visa" id="label_payment_visa">信用卡（VISA)</label>
                    </div>
                    <div class="form" id="info-option">
                        <h5>收件人資訊</h5>
                        <label for="rcpt_name">姓名</label>
                        <input type="text" id="rcpt_name" name="rcpt_name" placeholder="姓名" value="<?= $_SESSION['userAccount']['name'] ?>"> <br>

                        <label for="rcpt_mobile">電話</label>
                        <input type="text" id="rcpt_mobile" name="rcpt_mobile" placeholder="電話" value="<?= $_SESSION['userAccount']['account'] ?>"> <br>

                        <label for="rcpt_address">地址</label>
                        <input type="text" id="rcpt_address" name="rcpt_address" placeholder="請填寫地址" value="">
                        <p class="no-address">請填寫地址</p>

                    </div>

                    <div class="agree check-item">
                        <input type="checkbox" id="agree-order" value="">
                        <label for="agree-order">
                            <p>我已閱讀並同意購物條款</p>
                        </label>
                        <p class="no-argeement">請閱讀並同意購物條款</p>
                    </div>

                    <div class="total-wrapper">
                        <div class="total_price"><span>小計</span> <span id="total_price">NT$ 10,900</span></div>
                        <div class="shipfee"><span>運費</span> <span id="shipfee">Free</span></div>
                        <div class="discount"><span>折扣</span> <span id="discount">NT$ 0</span></div>
                        <hr>
                        <div class="final_price"><span>總計</span> <span id="final_price">NT$ 10,900</span></div>
                    </div>
                    <button class="btn-buy">結帳並前往付款</button>
                </div>

            </div>
        </div>
    </div>
</div>



<script>
    function numberWithCommas(x) {
        return 'NT$ ' + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    function numberWithoutCommas(x) {
        return x.toString().replace('NT$ ', '').replace(/,/g, "");;
    }




    function updatePrice() {
        let subTotal = 0;
        // let shipfee = numberWithoutCommas($('#shipfee').text())
        let discount = numberWithoutCommas($('#discount').text())
        $('.item-info > p:last-child').each(function(index) {
            console.log('number', $(this).prev().text().replace('數量: ', ''))
            console.log('price', numberWithoutCommas($(this).parent().prev().find('.item-price').text()))

            let number = $(this).prev().text().replace('數量: ', '');
            let price = numberWithoutCommas($(this).parent().find('.item-price').text());

            $(this).text(numberWithCommas(number * price))

            console.log('i', index, $(this).text().replace('NT$ ', '').replace(/,/g, ""));

            subTotal += number * price;
        })

        let totalPrice = subTotal + - +discount;


        $('#total_price').text(numberWithCommas(subTotal))
        $('#final_price').text(numberWithCommas(totalPrice))
    }

    updatePrice();
</script>



<script>
    let couponChoose = null;
    let payment = null;
    $('.btn-buy').on('click', function() {
        let isPass = true;
        if ($('input[name="payment"]:checked').val() == undefined) {
            isPass = false;
            $('.no-payment').show();
        }

        if ($('#rcpt_address').val() === '') {
            isPass = false;
            $('.no-address').show();
        }

        if ($('#agree-order').prop('checked') !== true) {
            isPass = false;
            $('.no-argeement').show();
        }

        if (isPass) {
            $.post('5_cart2_api.php', {
                rcpt_name: $('#rcpt_name').val(),
                rcpt_mobile: $('#rcpt_mobile').val(),
                rcpt_address: $('#rcpt_address').val(),
                totalPrice: numberWithoutCommas($('#final_price').text()),
                couponChoose: couponChoose,
                payment: payment,
                action: 'add'
            }, function(data) {
                // console.log('data',data);
                location.href = "./5_cart3.php"
            }, 'json');
        }
    })

    $('input[name="payment"]').on('change', function() {
        console.log($(this).val());
        payment = $(this).val();
        if ($(this).val() !== '') {
            $('.no-payment').hide();
        }
    })

    $('#rcpt_address').on('keydown', function() {
        if ($('#rcpt_address').val() !== '') {
            $('.no-address').hide();
        }
    })

    $('#agree-order').on('change', function() {
        if ($('#agree-order').prop('checked') === true) {
            $('.no-argeement').hide();
        }
    })
</script>


<script>
    var select = document.getElementById('coupon_list');
    select.addEventListener('change', handleCouponChange, false);

    function handleCouponChange() {
        let nowValue = this.value;
        couponChoose = nowValue;
        $('.couponOption').each(function(index, value) {
            if (value.value === nowValue) {
                let discount = document.querySelector('#discount');
                discount.innerHTML = numberWithCommas(value.getAttribute('data-discount'));
                updatePrice();
            }
        })
    }
</script>



<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>