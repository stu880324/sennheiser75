<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart2.css">
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
<div class="content-layout">
    <div class="list-wrapper">
        <div class="main-wrap d-flex">
            <div class="product-list">
                <ul>
                    <li>
                        <div class="cover"><img src="./images/small/product17.jpg" alt=""></div>
                        <div class="item-info">
                            <div class="item-name">GSP 500 頂級開放式電競</div>
                            <div class="item-price"> NT$ 7,490</div>
                        </div>
                        <div class="item-total-wrap">
                            <p>數量: 1</p>
                            <p>NT$ 7,490</p>
                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt=""></div>
                        <div class="item-info">
                            <div class="item-name">GSP 670 頂級無線電競耳機</div>
                            <div class="item-price">NT$ 10,900</div>
                        </div>
                        <div class="item-total-wrap">
                            <p>數量: 1</p>
                            <p>NT$ 10,900</p>
                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt=""></div>
                        <div class="item-info">
                            <div class="item-name">GSP 670 頂級無線電競耳機</div>
                            <div class="item-price">NT$ 10,900</div>
                        </div>
                        <div class="item-total-wrap">
                            <p>數量: 1</p>
                            <p>NT$ 10,900</p>
                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt=""></div>
                        <div class="item-info">
                            <div class="item-name">GSP 670 頂級無線電競耳機</div>
                            <div class="item-price">NT$ 10,900</div>
                        </div>
                        <div class="item-total-wrap">
                            <p>數量: 2</p>
                            <p>NT$ 10,900</p>
                        </div>
                    </li>
                    <li>
                        <div class="cover"><img src="./images/small/product19.jpg" alt=""></div>
                        <div class="item-info">
                            <div class="item-name">GSP 670 頂級無線電競耳機</div>
                            <div class="item-price">NT$ 10,900</div>
                        </div>
                        <div class="item-total-wrap">
                            <p>數量: 1</p>
                            <p>NT$ 2,310,900</p>
                        </div>
                    </li>
                </ul>


            </div>
            <div class="check-info">
                <div class="check-info-wrap">
                    <div class="promo">
                        <label>選擇優惠碼</label>
                        <div class="select">
                            <select name="coupon_list" id="coupon_list">
                                <option selected="" disabled="">選擇優惠碼</option>
                                <option selected="">KF123</option>
                                <option selected="">AC345</option>
                                <option selected="">QT678</option>
                            </select>
                        </div>
                        <button class="btn-buy-1">使用</button>
                    </div>
                    <div class="form check-item" id="ship-option">
                        <h3>1. 選擇運送方式</h3>
                        <input type="radio" id="shipment_deliver_to_home" name="shipment" value="deliver_to_home" checked="">
                        <label for="shipment_deliver_to_home">宅配</label>
                    </div>
                    <div class="form check-item">
                        <h3>2. 選擇付款方式</h3>
                        <input type="radio" id="payment_cc" name="payment" value="cc">
                        <label for="payment_cc" id="label_payment_cc">信用卡（VISA)</label>
                    </div>
                    <div class="form" id="info-option">
                        <h3>3. 收件人資訊</h3>
                        <label for="rcpt_name">姓名</label>
                        <input type="text" id="rcpt_name" name="rcpt_name" placeholder="姓名" value=""> <br>

                        <label for="rcpt_mobile">電話</label>
                        <input type="text" id="rcpt_mobile" name="rcpt_mobile" placeholder="電話" value=""> <br>

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
                        <div class="discount"><span>折扣</span> <span id="discount">NT$ 5,000</span></div>
                        <hr>
                        <div class="final_price"><span>總計</span> <span id="final_price">NT$ 10,900</span></div>
                    </div>
                    <button class="btn-buy">結帳並前往付款</button>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
    function numberWithCommas(x) {
        return 'NT$ ' + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    function numberWithoutCommas(x) {
        return x.toString().replace('NT$ ', '').replace(/,/g, "");;
    }


    let subTotal = 0;
    let shipfee = numberWithoutCommas($('#shipfee').text())
    let discount = numberWithoutCommas($('#discount').text())
    $('.item-total-wrap p:last-child').each(function(index) {
        console.log('number', $(this).prev().text().replace('數量: ', ''))
        console.log('price', numberWithoutCommas($(this).parent().prev().find('.item-price').text()))

        let number = $(this).prev().text().replace('數量: ', '');
        let price = numberWithoutCommas($(this).parent().prev().find('.item-price').text());

        $(this).text(numberWithCommas(number * price))

        console.log('i', index, $(this).text().replace('NT$ ', '').replace(/,/g, ""));

        subTotal += number * price;
    })

    let totalPrice = subTotal + +shipfee - +discount;

    console.log('total', subTotal)

    console.log('小計', numberWithCommas(subTotal))

    $('#total_price').text(numberWithCommas(subTotal))
    $('#final_price').text(numberWithCommas(totalPrice))
</script>





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>