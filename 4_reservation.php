<?php include __DIR__. '/parts/1_config.php'; ?>
<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS名稱 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>4_reservation.css">

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>


<!-- 這裡HE1 he1-container -->
<div class="container-fluid he1-container">
      
    <div class="row">
            <div class="text-effect">
                <span>H</span>
                <span>E</span>
                <span>1</span><br>
            </div>
    </div>
    <!-- <h1>經典大奧重生</h1> -->
    <!-- <h1>超越旗艦靜電耳機</h1> -->
<div class="row">
    <div class="he1-area">
        <div class="he1-bg"><img src="./images/4_reservation/HE1.jpg" alt=""> </div>
        
        <!-- focus1 -->
        <div class="focus1 d-flex">
            <div class="focus-text text-right">
                <h4>極致低失真設計</h4>
                <p>黃金蒸鍍靜電振膜<br>
                    陶瓷白金蒸鍍聲能轉換器<br>
                    高純度鍍銀OFC材質打造線材</p>
            </div>
            <img src="./images/4_reservation/focus1.svg" alt="">
        </div>

        <!-- focus2 -->
        <div class="focus2 d-flex">
            <img src="./images/4_reservation/focus2.svg" alt="">
            <div class="focus-text">
                <h4>頂級數位流佈局</h4>
                <p>8 枚 ESS 9018 DAC 晶片<br>
                    管晶混合全平衡電路</p>
            </div>
        </div>

        <!-- focus3 -->
        <div class="focus3 d-flex">
            <img src="./images/4_reservation/focus2.svg" alt="">
            <div class="focus-text">
                <h4>現代奢華工藝</h4>
                <p>自動開關的收納盒<br>
                    卡拉拉山脈大理石基座</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <iframe class="mb-5" width="560" height="315" src="https://www.youtube.com/embed/o-eANv_Qxv0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="he1-small"><img src="./images/4_reservation/HE1_2.jpg" alt=""></div>
    <div class="he1-small"><img src="./images/4_reservation/HE1_3.jpg" alt=""></div>
    <div class="he1-small"><img src="./images/4_reservation/HE1_6.jpg" alt=""></div>
    <div class="he1-small"><img src="./images/4_reservation/HE1_7.jpg" alt=""></div>
</div>


</div>

  


<!-- 這裡 step-container -->
<div class="container step-container">
    <div class="step-wrap">
        <!-- step0 -->
        <div class="step">
            <div class="step-pic">
                <div class="step-pic-black"><img src="./images/4_reservation/person1.jpeg" alt=""></div>
                <div class="step-pic-color" data-stellar-ratio="2"><img src="./images/4_reservation/person1copy.png" alt=""></div>
            </div>
            <div class="step-text">
                <h4>活動方式</h4>
                <p>活動期間：2021/1/1~2021/1/31<br>
                    期間內於線上進行預約，前往預約店面試聽並打卡，即可獲得香檳一杯，<br>
                    試聽後現場購入，即可享有額外6個月保固服務。
                </p>
            </div>
        </div>
        <!-- step1 -->
        <div class="step">
            <div class="step-text">
                <h4>STEP 1</h4>
                <p>於活動頁填寫「線上預約」表單送出</p>
            </div>
            <div class="step-pic">
                <div class="step-pic-black"><img src="./images/4_reservation/person2.jpg" alt=""></div>
                <div class="step-pic-color"><img src="./images/4_reservation/person2copy.png" alt=""></div>
            </div>
        </div>
        <!-- step2 -->
        <div class="step">
            <div class="step-pic">
                <div class="step-pic-black"><img src="./images/4_reservation/person3.jpg" alt=""></div>
                <div class="step-pic-color"><img src="./images/4_reservation/person3copy.png" alt=""></div>
            </div>
            <div class="step-text">
                <h4>STEP 2</h4>
                <p>持 QR code 如期前往預約之門市試聽</p>
            </div>
        </div>
        <!-- step3 -->
        <div class="step">
            <div class="step-text">
                <h4>STEP 3</h4>
                <p>於現場購入後，即可享有活動優惠</p>
            </div>
            <div class="step-pic">
                <div class="step-pic-black"><img src="./images/4_reservation/person4.jpg" alt=""></div>
                <div class="step-pic-color"><img src="./images/4_reservation/person4copy.png" alt=""></div>
            </div>
        </div>
        
    </div>
</div>

<!-- 這裡報名區 form-container-->
<div class="container-fluid form-container">
    <h2>線上預約</h2>
    <div class="row">
        
        <form>
            <div class="form-group">
                <label class="label-title" for="store">STORE</label>
                <select class="form-control" id="store">
                  <option>台北三創店</option>
                  <option>台中展示中心</option>
                  <option>高雄展示中心</option>
                </select>
              </div>

            <div class="form-group">
              <label class="label-title" for="date">DATE</label>
              <input type="date" class="form-control" id="date">
            </div>

            <fieldset class="form-group">
            
                    <label class="label-title" for="date">TIME</label>
                  <div>
                    <div class="form-check">
                      <input class="input-time" type="radio" name="gridRadios" id="time10" value="10" checked>
                      <label class="label-time" for="time10">
                        10:00 - 12:00
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="input-time" type="radio" name="gridRadios" id="time12" value="12">
                      <label class="label-time" for="time12">
                        12:00 - 14:00
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="input-time" type="radio" name="gridRadios" id="time14" value="14" disabled>
                      <label class="label-time" for="time14">
                        14:00 - 16:00
                      </label>
                    </div>
                    <div class="form-check">
                        <input class="input-time" type="radio" name="gridRadios" id="time16" value="16">
                        <label class="label-time" for="time16">
                          16:00 - 18:00
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="input-time" type="radio" name="gridRadios" id="time18" value="18">
                        <label class="label-time" for="time18">
                          18:00 - 20:00
                        </label>
                      </div>
                  </div>
              </fieldset>

              <button class="submit-btn" type="submit">SEND</button>

          </form>
    </div>
    <div class="bg3d"><img src="./images/4_reservation/bg3d.png" alt=""></div>

</div>
    
    
    
    
    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script
    src="https://code.jquery.com/jquery-3.5.1.slim.js"
    integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
    crossorigin="anonymous"></script>


<!-- 轉變背景顏色功能 -->
<!-- <script>
    function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
       $(".number").classList.toggle("dark-mode");
    };
</script> -->


<!-- 轉換背景功能 -->
<!-- <script>
    function myFunction() {
    let body = document.body;
       body.classList.toggle("dark-mode");

    let number = 
       $(".number").classList.toggle("dark-mode-textcolor");
       $('.number').addClass('dark-mode-textcolor');
    };

</script> -->

<!-- 滾動視差 -->
<!-- <script src="./stellar.js-master/jquery.stellar.min.js"></script>
    
<script>
    $(document).ready(function () {
        // For example:
        $(window).stellar();
        // or:
        $('.step-pic-color').stellar();
        });
</script>

<script>
    $(document).ready(function () {
    $.stellar();
    });
</script> -->

<!-- 背景圖上升功能 -->
<script>
    $(window).on('scroll', function () {

        let scrollTop = $(this).scrollTop();

        console.log(scrollTop)

        if (scrollTop > 2750) {
            $('.bg3d').addClass('move-up');
        }
        else {
            $('.bg3d').removeClass('move-up');
        }
    });
</script>
    




<?php include __DIR__. '/parts/4_footer.php'; ?>
<?php include __DIR__. '/parts/5_scripts.php'; ?>
<?php include __DIR__. '/parts/6_html_foot.php'; ?>
