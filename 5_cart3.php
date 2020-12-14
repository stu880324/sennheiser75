<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.0/flatly/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart3_1.css">

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


<!-- 信用卡資訊 -->

<div class="card-layout">
    <div class="card-wrapper d-flex">
        <div class="order-list">
            <ul class="order-detail">
                <li>
                    <p>配送方式</p>
                    <p>宅配</p>
                </li>
                <li>
                    <p>付款方式</p>
                    <p>信用卡付款</p>
                </li>
                <li>
                    <p>訂單總計</p>
                    <p>NT$ 16,890</p>
                </li>
            </ul>
        </div>

        <div class="checkout">
            <div class="check-wrap">
                <div class="row content-parent justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="col-md-10 m-auto">
                            <div class="card willFlip" id="willFlip" style="perspective: 837.968px; position: relative; transform-style: preserve-3d;">
                                <div class="front" style="backface-visibility: hidden;transform-style: preserve-3d;position: absolute;z-index: 1;height: 100%;width: 100%;transition: all 0.5s ease-out 0s;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <img src="./images/5_cart/visa.png" width="50" height="50" alt="">
                                        </div>
                                        <div class="col-md-12 mt-1">
                                            <div class="form-group">
                                                <label for="cardNumber"></label>
                                                <input type="text" class="form-control " disabled="" readonly="" id="cardNumber" inputmode="text">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bd-highlight mb-3">
                                            <div class="col-md-6 card-holder-content">
                                                <div class="form-group">
                                                    <label for="cardHolderValue">Card Holder</label>
                                                    <input type="text" placeholder="NAME" disabled="" class="cardHolder form-control " id="cardHolderValue">
                                                </div>
                                            </div>
                                            <div class="col-md-4 card-expires-content">
                                                <div class="input-date">
                                                    <label for="expiredMonth" class="text-right d-block">Expires</label>
                                                    <div class="row content-date-input justify-content-end ">
                                                        <input type="text" disabled="" class="cardHolder col-4 form-control" id="expiredMonth" inputmode="text">
                                                        <h4 class="mt-1 p-2 slash-text"> / </h4>
                                                        <input type="text" disabled="" class="cardHolder col-4 form-control" id="expiredYear" inputmode="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out 0s;">
                                    <div class="card-bar"></div>
                                    <div class="card-body">
                                        <div class="col-md-12  back-middle">
                                            <div class="form-group">
                                                <label for="cardCcv" class="text-right d-block">CVC</label>
                                                <input type="password" disabled="" class="form-control" id="cardCcv">
                                            </div>
                                            <img src="./images/5_cart/visa.png" class="float-right" width="50" height="50" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body mt-5">
                                <div class="form-group">
                                    <label for="cardInput">Cards Number 信用卡卡號</label>
                                    <input required class="input card-input_field form-control" id="cardInput">
                                </div>
                                <div class="form-group">
                                    <label for="cardHolder">Cards Holders 持卡人</label>
                                    <input required class="card-input_field form-control" id="cardHolder">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="monthInput">Expiration Date 到期日</label>
                                            <select required name="" class="form-control card-input_field" id="monthInput">
                                                <option class="disabled" readonly>Month</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="yearInput"></label>
                                            <select required name="" class="form-control card-input_field mt-2" id="yearInput">
                                                <option class="disabled" readonly>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cvcInput">CVC</label>
                                            <input required type="text" class="form-control card-input_field" id="cwInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-primary d-block card-input_button w-60">確認付款</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<script src="./js/flipper.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.4-beta.33/jquery.inputmask.min.js"></script>

<script src="./js/cardmain.js" type="text/javascript"></script>

<script>
    $('#cwInput').on('focus', function() {
        console.log('focus');
        $('#cardHolderValue').hide();

    })

    $('#cwInput').on('blur', function() {
        console.log('blur');
        $('#cardHolderValue').show();

    })

    $('.card-input_button').on('click', function() {
        $.post('5_cart3_api.php', {
            creditcard_number: $('#cardNumber').val(),
            creditcard_name: $('#cardHolderValue').val(),
            expiredMonth: $('#expiredMonth').val(),
            expiredYear: $('#expiredYear').val(),
            creditcard_security: $('#cwInput').val(),
            action: 'add'
        }, function(data) {
            console.log('data', data);
            location.href = "./5_cart4.php"
        }, 'json');
    })
</script>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>