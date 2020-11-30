<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>5_cart3.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.0/flatly/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />

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


<!-- 信用卡資訊 -->

<div class="card-layout">
    <div class="card-wrapper d-flex">
        <div class="order-list">
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
                    <p>NT$ 16,890</p>
                </li>
            </ul>
        </div>

        <div class="checkout">
            <div class="check-wrap">
                <div class="row content-parent justify-content-center align-items-center">
                    <div class="col-md-6">
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
                                                <input type="text" class="form-control animate__animated animate__bounce animate__duration-2s" disabled="" readonly="" id="cardNumber" inputmode="text">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bd-highlight mb-3">
                                            <div class="col-md-6 card-holder-content">
                                                <div class="form-group">
                                                    <label for="cardHolderValue">Card Holder</label>
                                                    <input type="text" placeholder="NAME" disabled="" class="cardHolder form-control animate__animated animate__bounce animate__duration-2s" id="cardHolderValue">
                                                </div>
                                            </div>
                                            <div class="col-md-3 card-expires-content">
                                                <div class="input-date">
                                                    <label for="expiredMonth" class="text-right d-block">Expires</label>
                                                    <div class="row content-date-input justify-content-end animate__animated animate__duration-2s animate__bounce">
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
                                            <label for="monthInput">Expiration Date</label>
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
                                <div class="btn btn-primary d-block card-input_button w-100">確認付款</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="./js/flipper.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.4-beta.33/jquery.inputmask.min.js"></script>

<script src="./js/main.js" type="text/javascript"></script>
<script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: 'HEAD',
            mode: 'no-cors'
        })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
        console.log(error);
    }
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>


<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>