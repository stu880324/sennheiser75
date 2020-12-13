<?php include __DIR__. '/parts/1_config.php';

        if(! isset($_GET['sid'])){
            header('Location: 2_productList.php'); exit;
        }

        $sid = intval($_GET['sid']);

        $sql = "SELECT * FROM products WHERE sid=$sid";
        $row = $pdo->query($sql)->fetch();
        if(empty($row)){
            header('Location: 2_productList.php'); exit;
        }

        // echo json_encode($row, JSON_UNESCAPED_UNICODE);
        ?>

<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS檔名 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>3_productDetail01.css">

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>
<?php include __DIR__. '/parts/7_fix-icon.php'; ?>


<!-- 此區 demo-container -->
<div class="container">
    
<div class="goback">
    <a href="./1_index.php">HOME</a>
     —— <a href="./2_productList.php">ALL PRODUCT</a>
     —— <a href="#"><?= $row['english_name']?></a>
</div>
    

<div class="row">
<div class="col-lg-2">
    <div class="picture100-wrap  d-flex flex-lg-column justify-content-between">
        <div class="picture100 mx-auto"><img src="./images/big/product<?= $row['sid']?>/picture1.jpg" alt=""></div>
        <div class="picture100 mx-auto"><img src="./images/big/product<?= $row['sid']?>/picture2.jpg" alt=""></div>
        <div class="picture100 mx-auto"><img src="./images/big/product<?= $row['sid']?>/picture3.jpg" alt=""></div>
        <div class="picture100 mx-auto"><img src="./images/big/product<?= $row['sid']?>/picture4.jpg" alt=""></div>
        <div class="picture100 mx-auto"><img src="./images/big/product<?= $row['sid']?>/picture5.jpg" alt=""></div>
    </div>
</div>
<div class="col-lg-6">
    <div class="demo">
        <img id="myimage" src="./images/big/product<?= $row['sid']?>/picture1.jpg" alt="">
    </div>
</div>
<div class="col-lg-4 my-auto product-item" data-sid="<?= $row['sid']?>">
    <div class="intro">
        <h4><?= $row['english_name']?></h4>
        <h4><?= $row['chinese_name']?></h4><br>
        <h6> $ <?= $row['price']?></h6><br>
    
        <div class="intro-quantity-area d-flex">
            <div class="d-flex">
                <div id="sub" class="btn-add-sub text-center">-</div>
                <div id="quantity" class="btn-quantity text-center">1</div>
                <div id="add" class="btn-add-sub text-center">+</div>
            </div>
        
            <button class="btn-buy" data-toggle="modal" data-target=".bd-example-modal-sm">加入購物車</button>

                <!-- Small modal -->
                <!-- <button type="button" class="btn btn-primary" >Small modal</button> -->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content text-center" 
                    style="background-color: #000; color:#fff; height:200px; line-height:200px;">
                    已加入購物車
                    </div>
                </div>
                </div>
        </div>

        <br>
        <p>立即擁有？<br>
            <a href="./4_reservation.php">預約試聽</a> 或 
            <a href="#">聯繫客服</a>
        </p>
        
        <hr>

    </div>

   

</div>

</div>
</div>




<!-- 此區 detail-container -->
<div class="container detail-container">
    <div class="row">
        <div id="tab-demo" class="mx-auto">
            <ul class="tab-title">
                <li><a href="#tab01"></a>介紹</li>
                <li><a href="#tab02"></a>規格</li>
                <li><a href="#tab03"></a>保固</li>
                <li><a href="#tab04"></a>送貨及付款</li>
            </ul>
                <div id="tab01" class="tab-inner">
                    <p>Sennheiser MOMENTUM True Wireless 真無線藍牙耳機，身為MOMENTUM系列最新成員，MOMENTUM True Wireless加入了最新的兼容藍牙5.0傳輸協定，發聲單體採用了Sennheiser當家的7mm超寬頻動圈單體，精緻高貴的音色與空間立體感，演繹出頂尖卓越的聲音，為真無線耳機立下了音質的最高標準。</p>
                </div>
                <div id="tab02" class="tab-inner">
                    
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-left">單體形式</td>
                                <td class="td-right">動圈</td>
                            </tr>
                            <tr>
                                <td class="td-left">頻率響應</td>
                                <td class="td-right">5 Hz to 21 kHz </td>
                            </tr>
                            <tr>
                                <td class="td-left">靈敏度</td>
                                <td class="td-right">107 dB SPL (1 kHz / 1 mW)</td>
                            </tr>
                            <tr>
                                <td class="td-left">總諧波失真</td>
                                <td class="td-right">小於 0,08% (1kHz / 94dB)</td>
                            </tr>
                            <tr>
                                <td class="td-left">佩戴方式</td>
                                <td class="td-right">耳道式</td>
                            </tr>
                            <tr>
                                <td class="td-left">麥克風規格</td>
                                <td class="td-right">MEMS</td>
                            </tr>
                            <tr>
                                <td class="td-left">藍牙版本</td>
                                <td class="td-right">藍牙5.0</td>
                            </tr>
                            <tr>
                                <td class="td-left">支援格式</td>
                                <td class="td-right">A2DP, AVRCP, HSP, HFP</td>
                            </tr>
                            <tr>
                                <td class="td-left">電池續航力</td>
                                <td class="td-right">4小時+8小時(充電盒)</td>
                            </tr>
                            <tr>
                                <td class="td-left">解碼格式</td>
                                <td class="td-right">SBC, aptX™, aptX™ Low Latency, AAC</td>
                            </tr>
                            <tr>
                                <td class="td-left">外觀尺寸</td>
                                <td class="td-right">78.6 x 45 x 35 mm (充電盒) </td>
                            </tr>
                            <tr>
                                <td class="td-left">重量</td>
                                <td class="td-right">13.2 g (耳機) / 56.6 g (充電盒)</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div id="tab03" class="tab-inner">
                    <p>
                        維修流程<br>
                        德國 Sennheiser 品牌商品提供兩年非人為損壞保固服務送修商品請您提供<br><br>
                        
                        1.保卡正本、<br>
                        2.購買證明(網路平台購買證明) 或發票<br>
                        3.商品 (附上說明故障/問題)<br><br>
                        寄/送至：台北市信義區東興路59號1樓 維修部，<br>
                        
                        請在包裹內留下您的姓名與聯繫電話，維修時間約需14個工作天，<br>
                        
                        如有其他問題歡迎來電詢問02-8768-2787 維修部。</p>
                </div>
                <div id="tab04" class="tab-inner">
                    <p>我們通過UPS進行運送，提供30天退貨保證，並使用安全的支付技術和Geotrust（信託機構）來保證您的支付安全。</p>
                </div>
            </div>
    </div>
</div>

 <!-- 此區 service-container -->  
<div class="container service-container">
    <div class="arrow"><a href="#box-title"><img src="./images/3_productDetail/arrow.svg" alt=""></a></div>
    <div class="row service-row position-relative">
        
        <div id="box-title" class="box-title">
                <p>SERVICE</p>
                <h3>SENNHEISER</h3>
                <p>匠心製造的聽覺體驗</p>
        </div>
        <div class="line1"><img src="./images/3_productDetail/line.svg" alt=""></div>
        
        
        <div class="box"></div>

        <p class="service5-text">親身體驗</p>
        <div class="service5"><a href="./4_reservation.php"><img src="./images/3_productDetail/service5.jpg" alt=""></a></div>
        <p class="service4-text">公司的成立</p>
        <div class="service4"><a href="#"><img src="./images/3_productDetail/service4.jpg" alt=""></a></div>
        <p class="service1-text">如何挑選耳機</p>
        <div class="service1"><a href="./10_blogView.php"><img src="./images/3_productDetail/service1.png" alt=""></a></div>
        <p class="service2-text">為您打造</p>
        <div class="service2"><a href="./2_productList.php"><img src="./images/3_productDetail/service2.png" alt=""></a></div>
        <p class="service3-text">科學與工程獎</p>
        <div class="service3"><a href="#"><img src="./images/3_productDetail/service3.png" alt=""></a></div>

        

    </div>
</div>




    
<!-- 此區 note-container -->
<div class="container note-container">
    <hr>
    <div class="note-title">來自SENNHEISER的用心</div>
    <div class="row mt-3">
            <div class="col-lg-3 note-text"><i class="fas fa-truck"></i> 快速運送到貨</div>
            <div class="col-lg-3 note-text"><i class="fas fa-headphones-alt"></i> 個人購物協助</div>
            <div class="col-lg-3 note-text"><i class="far fa-credit-card"></i> 安全的購物過程</div>
            <div class="col-lg-3 note-text"><i class="fas fa-tools"></i> 兩年品質保固</div>
    </div>
    <hr>
</div>    














<?php include __DIR__. '/parts/4_footer.php'; ?>
<?php include __DIR__. '/parts/5_scripts.php'; ?>

<!-- 加入購物車功能 -->
<script>
    $('.btn-buy').on('click', function(event){
        const item  = $(this).closest('.product-item');
        const sid = item.attr('data-sid');
        const qty = item.find('.btn-quantity').text();

        console.log({sid:sid, quantity: qty});
        $.get('5_addToCart-API.php', {sid:sid, quantity: qty, action:'add'}, function(data){
            console.log(data);
            // TODO:購物車budge
            countCart(data.cart);
        }, 'json');
    });

    function showProductModal(sid){
        $('iframe')[0].src = "product-detail02.php?sid=" + sid;
        // product-detail02.php?sid=17
        $('#exampleModal').modal('show')
    }
</script>



<!-- 增減數量功能 -->
    <script>
    // const dallorCommas = function(n){
    //     return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

        $("#add").on("click",function(){

            let quantity = $("#quantity").text()
            quantity = +quantity + 1;
            $("#quantity").text(quantity);
        });
        $("#sub").on("click",function(){

            let quantity = $("#quantity").text()
            quantity = +quantity - 1;
            $("#quantity").text(quantity);
        });
    </script>

<!-- 商品展示功能 -->
    <script>
        $(".picture100 img").on("click",function(){
            
            let imgSrc = $(this).attr("src");
    
            $(".demo img").attr("src",imgSrc)
        });
        
    </script>

<!-- 放大鏡功能 -->
<!-- <script> -->
    <!-- function magnify(imgID, zoom) {
   var img, glass, w, h, bw;
   img = document.getElementById(imgID);
 
   /* Create magnifier glass: */
   glass = document.createElement("DIV");
   glass.setAttribute("class", "img-magnifier-glass");
 
   /* Insert magnifier glass: */
   img.parentElement.insertBefore(glass, img);
 
   /* Set background properties for the magnifier glass: */
   glass.style.backgroundImage = "url('" + img.src + "')";
   glass.style.backgroundRepeat = "no-repeat";
   glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
   bw = 3;
   w = glass.offsetWidth / 2;
   h = glass.offsetHeight / 2;
 
   /* Execute a function when someone moves the magnifier glass over the image: */
   glass.addEventListener("mousemove", moveMagnifier);
   img.addEventListener("mousemove", moveMagnifier);
 
   /*and also for touch screens:*/
   glass.addEventListener("touchmove", moveMagnifier);
   img.addEventListener("touchmove", moveMagnifier);
   function moveMagnifier(e) {
     var pos, x, y;
     /* Prevent any other actions that may occur when moving over the image */
     e.preventDefault();
     /* Get the cursor's x and y positions: */
     pos = getCursorPos(e);
     x = pos.x;
     y = pos.y;
     /* Prevent the magnifier glass from being positioned outside the image: */
     if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
     if (x < w / zoom) {x = w / zoom;}
     if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
     if (y < h / zoom) {y = h / zoom;}
     /* Set the position of the magnifier glass: */
     glass.style.left = (x - w) + "px";
     glass.style.top = (y - h) + "px";
     /* Display what the magnifier glass "sees": */
     glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
   }
 
   function getCursorPos(e) {
     var a, x = 0, y = 0;
     e = e || window.event;
     /* Get the x and y positions of the image: */
     a = img.getBoundingClientRect();
     /* Calculate the cursor's x and y coordinates, relative to the image: */
     x = e.pageX - a.left;
     y = e.pageY - a.top;
     /* Consider any page scrolling: */
     x = x - window.pageXOffset;
     y = y - window.pageYOffset;
     return {x : x, y : y};
   }
 } -->
 <!-- </script> -->
     
 <!-- <script>
     /* Execute the magnify function: */
     magnify("myimage", 3);
     /* Specify the id of the image, and the strength of the magnifier glass: */
 </script> -->



<!-- 商品介紹頁籤功能 -->
    <script>

        $($(".tab-title li").eq(0).addClass("active").find("a").attr("href")).siblings(".tab-inner").hide();
        
        $(".tab-title li").on("click",function(){

            let title = $(this).find("a").attr("href");

            // $(".tab-title li").eq(0).addClass("active").find("a").attr("href").siblings(".tab-inner").hide();

            $(title).show().siblings(".tab-inner").hide();
            
            $(this).addClass("active").siblings(".active").removeClass("active");
        });

        // $(function(){
        // var $li = $('ul.tab-title li');
        // // $li. eq(0) .addClass('active').find('a').attr('href').siblings('.tab-inner').hide();
    
        // $li.click(function(){
        //     $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
        //     $(this).addClass('active'). siblings ('.active').removeClass('active');
        //     });
        // });
    </script>

<!-- 按下箭頭鈕滑動功能 -->
     <script>
        // $(window).scroll(function(){
        //     console.log($(document).scrollTop())
        // })
        
        $('a[href="#box-title"]').on('click',function(event){
            event.preventDefault();
            $('.box-title').addClass('box-title-show');
            $(document).scrollTop(+$('.arrow').offset().top + 100)
        });
    </script>

<!-- 彈出服務區塊功能 -->
    <script>

        $(window).scroll(function(){
            // console.log('scorll',$(window).scrollTop())
            let nowScroll = $(window).scrollTop();
            if( nowScroll > $('.service-row').offset().top - $(window).height()){
                // console.log('hiii')
                $('.service-row').css('height', '600px');
                $('.box-title').addClass('box-title-show');
                $('.line1').addClass('line1-show');
                $('.box').addClass('box-show');
                $('.service4').addClass('service4-show');
                $('.service4-text').addClass('service4-show');
                $('.service5').addClass('service5-show');
                $('.service5-text').addClass('service5-show');
                $('.service3').addClass('service3-show');
                $('.service3-text').addClass('service3-show');
                $('.service2').addClass('service2-show');
                $('.service2-text').addClass('service2-show');
                $('.service1').addClass('service1-show');
                $('.service1-text').addClass('service1-show');
            }
        })


        $(".arrow").on("click",function(){
            
            $('.service-row').css('height', '600px');

            $('.box-title').addClass('box-title-show');
            $('.line1').addClass('line1-show');
            $('.box').addClass('box-show');
            $('.service4').addClass('service4-show');
            $('.service4-text').addClass('service4-show');
            $('.service5').addClass('service5-show');
            $('.service5-text').addClass('service5-show');
            $('.service3').addClass('service3-show');
            $('.service3-text').addClass('service3-show');
            $('.service2').addClass('service2-show');
            $('.service2-text').addClass('service2-show');
            $('.service1').addClass('service1-show');
            $('.service1-text').addClass('service1-show');
            
        });

    </script>

   

<?php include __DIR__. '/parts/6_html_foot.php'; ?>
