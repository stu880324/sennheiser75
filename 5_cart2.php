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
            <li>
                <span>購物車 </span>
            </li>
            <li class="active">
                <span>結帳 </span>
            </li>
            <li>
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
                    <li>
                        <div class="cover">
                            <img src="./images/small/product17.jpg" alt="">

                        </div>

                        <div class="item-total-wrap">
                            <div class="item-info">
                                <div class="item-name">
                                    <p>HD 800 S Anniversary Edition</p>
                                    <p>經典開放式旗艦 75週年限量商品</p>
                                </div>
                                <div class="item-price"> NT$ 7,490</div>
                                <p>數量: 2</p>
                                <p>小計: NT$ 7,490</p>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt="">

                        </div>

                        <div class="item-total-wrap">
                            <div class="item-info">
                                <div class="item-name">
                                    <p>HD 800 S Anniversary Edition</p>
                                    <p>經典開放式旗艦 75週年限量商品</p>
                                </div>
                                <div class="item-price">NT$ 10,900</div>
                                <p>數量: 1</p>
                                <p>小計: NT$ 10,900</p>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt="">

                        </div>

                        <div class="item-total-wrap">
                            <div class="item-info">
                                <div class="item-name">
                                    <p>GSP 670</p>
                                    <p>頂級無線電競耳機</p>
                                </div>
                                <div class="item-price">NT$ 10,900</div>
                                <p>數量: 1</p>
                                <p>小計: NT$ 10,900</p>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt="">

                        </div>

                        <div class="item-total-wrap">
                            <div class="item-info">
                                <div class="item-name">
                                    <p>GSP 670</p>
                                    <p>頂級無線電競耳機</p>
                                </div>
                                <div class="item-price">NT$ 10,900</div>
                                <p>數量: 1</p>
                                <p>小計: NT$ 10,900</p>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt="">

                        </div>

                        <div class="item-total-wrap">
                            <div class="item-info">
                                <div class="item-name">
                                    <p>GSP 670</p>
                                    <p>頂級無線電競耳機</p>
                                </div>
                                <div class="item-price">NT$ 10,900</div>
                                <p>數量: 1</p>
                                <p>小計: NT$ 10,900</p>
                            </div>

                        </div>
                    </li>


                </ul>




            </div>
            <div class="check-info">
                <div class="check-info-wrap">
                    <div class="promo">
                        <label>選擇優惠碼</label>
                        <div class="select">
                            <?php if ($coupon[0] === '') : ?>
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
                        <button class="btn-buy-1">使用</button>
                    </div>
                    <div class="form check-item" id="ship-option">
                        <p>1. 選擇運送方式</p>
                        <input type="radio" id="shipment_deliver_to_home" name="shipment" value="deliver_to_home" checked="">
                        <label for="shipment_deliver_to_home">宅配</label>
                    </div>
                    <div class="form check-item">
                        <p>2. 選擇付款方式</p>
                        <input type="radio" id="payment_visa" name="payment" value="visa">
                        <label for="payment_visa" id="label_payment_visa">信用卡（VISA)</label>
                        <input type="radio" id="cash" name="payment" value="cash">
                        <label for="cash" id="cash">現金付款</label>
                    </div>
                    <div class="form" id="info-option">
                        <p>3. 收件人資訊</p>
                        <label for="rcpt_name">姓名</label>
                        <input type="text" id="rcpt_name" name="rcpt_name" placeholder="姓名" value="<?= $_SESSION['userAccount']['name'] ?>"> <br>

                        <label for="rcpt_mobile">電話</label>
                        <input type="text" id="rcpt_mobile" name="rcpt_mobile" placeholder="電話" value="<?= $_SESSION['userAccount']['account'] ?>"> <br>

                        <label for="rcpt_address">地址</label>
                        <input type="text" id="rcpt_address" name="rcpt_address" placeholder="地址" value="">

                    </div>

                    <div class="agree check-item">
                        <input type="checkbox" id="agree-order">
                        <label for="agree-order">
                            <p>我已閱讀並同意購物條款服務條款</p>
                        </label>
                    </div>

                    <div class="total-wrapper">
                        <div class="total_price"><span>小計</span> <span id="total_price">NT$ 10,900</span></div>
                        <div class="shipfee"><span>運費</span> <span id="shipfee">NT$ 0</span></div>
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
        let shipfee = numberWithoutCommas($('#shipfee').text())
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

        let totalPrice = subTotal + +shipfee - +discount;


        $('#total_price').text(numberWithCommas(subTotal))
        $('#final_price').text(numberWithCommas(totalPrice))
    }

    updatePrice();
</script>



<script>
    $('.btn-buy').on('click', function() {
        location.href = "./5_cart3.php"
    })
</script>


<script>
    var select = document.getElementById('coupon_list');
    select.addEventListener('change', handleCouponChange, false);

    function handleCouponChange() {
        let nowValue = this.value;

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