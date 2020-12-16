<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>1_index01.css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" /> -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" rel="external nofollow" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />


<script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php include __DIR__ . '/parts/7_fix-icon.php'; ?>

<!-- 以下刪除就可以開始編輯 -->
<!-- 輪播牆 -->

<div class="container-fluid hero">
  <div class="hero-text">
    <h1 class="hero-title animate__animated animate__zoomIn">
      This is Your Crew
    </h1>
  </div>

  <div class="row model-pic">
    <div class="model">
      <img src="images/1_index/02.png" alt="" />
    </div>
  </div>

  <div class="row hero-area">
    <div id="carouselExampleControls" class="carousel-slide carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/1_index/02.jpg" class="d-block w-100" alt="..." onload="DrawImage(this)" />
        </div>
        <div class="carousel-item">
          <img src="images/1_index/03.jpg" class="d-block w-100" alt="..." onload="DrawImage(this)" />
        </div>
        <div class="carousel-item">
          <img src="images/1_index/04.jpg" class="d-block w-100" alt="..." onload="DrawImage(this)" />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="bg-pic">
      <img src="images/1_index/01.png" alt="" />
    </div>

    <div class="arrow">
      <a href="#box-title"><img src="images/1_index/icon desing/arrow.svg" alt="" /></a>
    </div>
  </div>
</div>
<!-- 你不能不認識的聲海 -->
<div class="container-fluid feature-area">
  <div class="row feature-text">
    <p class="feature-p-en">Sennheiser</p>
    <p class="feature-p-ch">你不能不認識的聲海</p>
  </div>

  <div class="row know-us">
    <div class="knowus-left">
      <div class="knowpic1">
        <img src="images/1_index/05.jpg" alt="" />
      </div>
      <div class="knowpic2">
        <img src="images/1_index/06.jpg" alt="" />
      </div>
    </div>

    <div class="knowus-right">
      <div class="know-box">
        <p class="knowus-right-p">
          我們現在打造的，是
          <span class="knowus-right-span">音響世界的未來 </span>– <br />
          這就是我們每天堅持不懈的追求。<br />
          這個信念表達了我們公司上下的共同追求和理想。<br />
          因為我們被悠久的歷史、<br />力求創新的文化和追求卓越的激情所推動著。<br /><br />
          對於我們來說，單有好聲音並不足夠。<br />
          我們要的是展現出完美的聲音、為聲音賦予生命。
        </p>
      </div>
    </div>
  </div>
</div>
<!-- 聲海3大特點 -->
<div class="container threefeatures-area">
  <div class="row threefeatures">
    <div class="col-sm-12 col-lg-4">
      <div class="feature-image">
        <img src="./images/1_index/icon desing/icon/crafticon-black.svg" alt="" />
      </div>

      <p class="feature-title">精美的德國工藝設計</p>
      <p class="feature-description">
        產品品質獨步全球，兼顧品質、安全、舒適、耐用四大特性。
        精緻金屬工藝搭配極簡風格的設計則滿足消費者對於3C配件時尚的造型需求。
      </p>
    </div>

    <div class="col-sm-12 col-lg-4">
      <div class="feature-image">
        <img src="./images/1_index/icon desing/icon/warranty-black.svg" alt="" />
      </div>
      <p class="feature-title">全系列保固二年</p>
      <p class="feature-description">
        Sennheiser
        森海塞爾全系列耳機、擴大機，享有原廠保固二年之服務，並且過保後可享有付費維修之服務。
        讓您買的安心用的放心享受聆聽的新聲活。
      </p>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="feature-image">
        <img src="./images/1_index/icon desing/icon/sound-black.svg" alt="" />
      </div>

      <p class="feature-title">均衡精確的音頻重現</p>
      <p class="feature-description">
        德系原音均衡精確重現，彷彿每個音頻的位置深淺都經過來回計算精心刻畫般地精準。
        毫不妥協的音質，反映了Sennheiser 對於完美產品的執著和追求。
      </p>
    </div>
  </div>
</div>

<!-- 熱銷商品 -->
<div class="container-fluid topsale-area">
  <div class="arrow">
    <a href="#box-title"><img src="images/1_index/icon desing/arrow.svg" alt="" /></a>
  </div>

  <p class="bestsale-en mt-4">2020 best-seller</p>
  <p class="bestsale-ch">人氣耳機-TOP 3</p>

  <div class="top3-area">
    <div class="top3-wrap">
      <div class="topsale">
        <div class="col-lg-4 topsale-left wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <img class="pl-5" src="images/1_index/hot sale/left.png" alt="" />
        </div>

        <div class="col-lg-4 topsale-right wow slideInDown">
          <img class="pr-5" src="images/1_index/hot sale/right.png" alt="" />
        </div>
      </div>

      <div class="topsale">
        <div class="col-lg-4 topsale-left" data-wow-duration="1s" data-wow-delay="1s">
          <img class="pl-5" src="images/1_index/hot sale/left02.png" alt="" />
        </div>

        <div class="col-lg-4 topsale-right">
          <img class="pr-5" src="images/1_index/hot sale/right02.png" alt="" />
        </div>
      </div>

      <div class="topsale">
        <div class="col-lg-4 topsale-left" data-wow-duration="1s" data-wow-delay="1s">
          <img class="pl-5" src="images/1_index/hot sale/left03.png" alt="" />
        </div>

        <div class="col-lg-4 topsale-right">
          <img class="pr-5" src="images/1_index/hot sale/right03.png" alt="" />
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-lg-4 topsale-box">
      <div class="tsbox">
        <p class="tsbox-text">HD 450BT 無線藍牙降噪耳機</p>
        <hr />
        <p class="tsbox-detail">
          全新的 HD 450BT.
          造就絕佳的無線音色表現。這款耳機提供主動降噪功能、高品質的無線編解碼器支援
          AAC、aptX™ Low Latency 低延遲和藍牙
          5.0，可為您帶來優質的音色和深沉的低音。語音助理、Sennheiser Smart
          Control app應用程式和 30
          小時的電池續航力等，保證音樂愛好者擁有好音質又兼具多功能性。
          <br /><br />
          現代簡約風格，兩色可選。可折疊式方便攜帶。還有提供個性化聆聽，無論是調節低音效果，
          或是實現自然的聲音，都可以依據各型喜好設定，因此深受大眾喜愛。
        </p>

        <div class="a-white-div01">
          <a href="2_productList.php" class="a-white">查看商品</a>
        </div>
      </div>
    </div>

    <a id="top3PrevBtn" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width: 5%">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a id="top3NextBtn" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="width: 5%">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- 75週年 -->
<!-- <div class="container-fluid sennheiser-anniversary">
  <div class="row anniversary-text">
    <div class="text75">
      <h2>75週年，記載著75個精彩時刻</h2>
      <span>2020年是 Sennheiser 創立75周年的重要里程碑！<br />
        由開始而今，Sennheiser 一直在譜寫音響領域的未來，<br />於慶祝周年紀念的同時，<br />Sennheiser將為粉絲推出連串推廣及特別紀念型號，<br />舉辦別出心裁的活動，更會邀請成就今日Sennheiser的員工<br />及業務夥伴分享種種難忘時刻。</span>
    </div>

    <div class="buildtext">
      <p>Sennheiser 慶祝成立75周年</p>
    </div>
  </div>

  <div class="row celebrate75years">
    <div class="celebrate75-text">
      <h3>
        Celebrating <a href="#"><span class="lighttext">75</span></a> Years
      </h3>
    </div>
  </div>

  <div class="row reservation">
    <div class="moveright">
      <img src="images/1_index/icon desing/arrow-left.svg" alt="" />
    </div>
    <div class="reservation-text">
      <a href="4_reservation.php">預約試聽 Book Now</a>
    </div>
  </div>
</div> -->


<!-- 75週年 HTML start -->
<div class="container-fluid sennheiser-anniversary" style="position:relative;">
  <div class="row anniversary">
    <div class="message">Hover effect &mdash; please view on desktop.</div>

    <div class="frame">
      <div class="frame__title-wrap">
        <div class="frame__links">
          <a href="#">預約試聽 Reservation</a>
        </div>
      </div>
      <a class="frame__github" href="#">Sennheiser 慶祝成立75周年</a>
      <h2 class="frame__pagetitle">
        75週年，記載著75個精彩時刻
        <span>2020年是 Sennheiser 創立75周年的重要里程碑！<br />
          由開始而今，Sennheiser
          一直在譜寫音響領域的未來，<br />於慶祝周年紀念的同時，<br />Sennheiser將為粉絲推出連串推廣及特別紀念型號，<br />舉辦別出心裁的活動，更會邀請成就今日Sennheiser的員工<br />及業務夥伴分享種種難忘時刻。</span>
      </h2>
    </div>

    <div class="content">
      <img class="content__img" src="images/1_index/75years/01.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/02.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/03.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/04.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/05.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/06.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/07.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/08.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/09.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/10.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/11.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/12.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/13.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/14.jpg" alt="Some image" />
      <img class="content__img" src="images/1_index/75years/15.jpg" alt="Some image" />
      <h3 class="content__title">
        Celebrating <span class="title75">75</span> Years
      </h3>
    </div>
  </div>
</div>
<!-- 75週年 HTML end -->


<!-- 情境介紹 -->
<div class="container situation-area">
  <div class="row situation-title">
    <p class="situation-p-en">Situation</p>
    <p class="situation-p-ch">情境介紹</p>
  </div>

  <div class="row situation01">
    <div class="situation-pic col-lg-6">
      <img src="images/1_index/situation/sport.jpg" alt="" />
    </div>

    <div class="svg-wrapper col-lg-6">
      <svg height="60" width="450" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="450" />
      </svg>
      <div class="text">專注於汗水淋漓的運動過程</div>

      <h6>Made to move 聲來好動</h6>
      <p>
        只要戴上CX SPORT就能夠輕鬆沉浸於音樂世界中，<br />
        專注於汗水淋漓的運動過程。
      </p>

      <div class="a-white-div">
        <a href="2_productList.php" class="a-white">查看商品</a>
      </div>
    </div>
  </div>

  <div class="row situation01">

    <div class="situation-pic col-lg-6 order">
      <img src="images/1_index/situation/Commute.jpg" alt="" />
    </div>

    <div class="svg-wrapper col-lg-6">
      <svg height="60" width="450" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="450" />
      </svg>
      <div class="text">絕佳音質減緩通勤的疲勞</div>

      <h6>讓你全心專注的音樂體驗</h6>
      <p>
        當你行走於大街上，Transparent Hearing功能則可以補捉環境的聲音，<br>
        例如車聲、行人的聲音，讓用家能夠察覺周遭環境的狀況，<br>
        在馬路上提供了更安全的行動音樂環境。
      </p>

      <div class="a-white-div">
        <a href="2_productList.php" class="a-white">查看商品</a>
      </div>
    </div>

  </div>

  <div class="row situation01">
    <div class="situation-pic col-lg-6">
      <img src="images/1_index/situation/e-sport.jpg" alt="" />
    </div>

    <div class="svg-wrapper col-lg-6 mb-5">
      <svg height="60" width="450" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="450" />
      </svg>
      <div class="text">享受遊戲當下的極致音感</div>

      <h6>為你的遊戲平台選擇一款好耳機</h6>
      <p>
        從玩遊戲的聲音需求漸漸的轉變到享受遊戲內的聲音故事。<br>
        為玩家打造出聲音卓越，功能強悍且具備優異工藝質感的頂級遊戲耳機。
      </p>

      <div class="a-white-div">
        <a href="2_productList.php" class="a-white">查看商品</a>
      </div>
    </div>
  </div>

</div>

</div>

<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<script>
  new WOW().init();
</script>

<script>
  console.log($(".topsale").outerWidth(true));
  let page = 0;
  $("#top3NextBtn").on("click", function(event) {
    event.preventDefault();
    if (page < 2) {
      page++;
      $(".top3-wrap").css("left", $(".topsale").outerWidth(true) * -page);

      switch (page) {
        case 0:
          $(".tsbox-text").text("HD 450BT 無線藍牙降噪耳機");
          $(".tsbox-detail").html(`全新的 HD 450BT.
              造就絕佳的無線音色表現。這款耳機提供主動降噪功能、高品質的無線編解碼器支援
              AAC、aptX™ Low Latency 低延遲和藍牙
              5.0，可為您帶來優質的音色和深沉的低音。語音助理、Sennheiser Smart
              Control app應用程式和 30
              小時的電池續航力等，保證音樂愛好者擁有好音質又兼具多功能性。
              <br /><br />
              現代簡約風格，兩色可選。可折疊式方便攜帶。還有提供個性化聆聽，無論是調節低音效果，
              或是實現自然的聲音，都可以依據各型喜好設定，因此深受大眾喜愛。`);
          break;
        case 1:
          $(".tsbox-text").html(`CX 400BT 真無線藍牙耳機`);
          $(".tsbox-detail").html(
            `變革，才是定律。Sennheiser全新推出的CX 400BT True Wireless顛覆無線耳機的常規，以高性能音頻技術帶來令人引頸期盼的全新耳機。控制功能可供隨意自訂，簡單易用，舒適感覺了無間斷，7小時的電池壽命更可透過隨附的隨身充電盒延續至長達20小時，是音樂愛好者必然的理想之選。<br /><br />繼今年初推出後即好評如潮的MOMENTUM True Wireless 2耳機後，CX 400BT True Wireless亦搭載Sennheiser的7毫米單體，營造卓越不凡的聲效。`
          );
          break;

        case 2:
          $(".tsbox-text").html(`CX SPORT 經典運動藍牙款`);
          $(".tsbox-detail").html(
            `CX SPORT結合了當家的CX系列及運動元素，打造出專為運動而生的全新產品，透過Sennheiser多年設計運動耳機的經驗，優異的人體工學設計，提供出色的佩戴舒適度，而且牢固不脫落；同時藉由CX系列耳機的優異發聲單體，釋放出均衡宜人的出色音質。<br /><br />在快樂運動過程中使用超輕巧、防水防汗設計的 Sennheiser CX SPORT入耳式無線耳機。其耳機線可以採用頸前或頸後環繞兩種方式進行佩戴，先進的藍牙技術確保了它能夠在運動中讓您自由自在的體驗高品質的聲音。`
          );
          break;

        default:
          break;
      }
    }
  });

  $("#top3PrevBtn").on("click", function(event) {
    event.preventDefault();
    if (page > 0) {
      page--;
      $(".top3-wrap").css("left", $(".topsale").outerWidth(true) * -page);

      switch (page) {
        case 0:
          $(".tsbox-text").text("HD 450BT 無線藍牙降噪耳機");
          $(".tsbox-detail").html(`全新的 HD 450BT.
              造就絕佳的無線音色表現。這款耳機提供主動降噪功能、高品質的無線編解碼器支援
              AAC、aptX™ Low Latency 低延遲和藍牙
              5.0，可為您帶來優質的音色和深沉的低音。語音助理、Sennheiser Smart
              Control app應用程式和 30
              小時的電池續航力等，保證音樂愛好者擁有好音質又兼具多功能性。
              <br /><br />
              現代簡約風格，兩色可選。可折疊式方便攜帶。還有提供個性化聆聽，無論是調節低音效果，
              或是實現自然的聲音，都可以依據各型喜好設定，因此深受大眾喜愛。`);
          break;
        case 1:
          $(".tsbox-text").text("CX 400BT 真無線藍牙耳機");
          $(".tsbox-detail").html(
            `變革，才是定律。Sennheiser全新推出的CX 400BT True Wireless顛覆無線耳機的常規，以高性能音頻技術帶來令人引頸期盼的全新耳機。控制功能可供隨意自訂，簡單易用，舒適感覺了無間斷，7小時的電池壽命更可透過隨附的隨身充電盒延續至長達20小時，是音樂愛好者必然的理想之選。<br /><br />繼今年初推出後即好評如潮的MOMENTUM True Wireless 2耳機後，CX 400BT True Wireless亦搭載Sennheiser的7毫米單體，營造卓越不凡的聲效。`
          );
          break;

        case 2:
          $(".tsbox-text").html(`CX SPORT 經典運動藍牙款`);
          $(".tsbox-detail").html(
            `CX SPORT結合了當家的CX系列及運動元素，打造出專為運動而生的全新產品，透過Sennheiser多年設計運動耳機的經驗，優異的人體工學設計，提供出色的佩戴舒適度，而且牢固不脫落；同時藉由CX系列耳機的優異發聲單體，釋放出均衡宜人的出色音質。<br /><br />在快樂運動過程中使用超輕巧、防水防汗設計的 Sennheiser CX SPORT入耳式無線耳機。其耳機線可以採用頸前或頸後環繞兩種方式進行佩戴，先進的藍牙技術確保了它能夠在運動中讓您自由自在的體驗高品質的聲音。`
          );
          break;

        default:
          break;
      }
    }
  });


  $(window).scroll(function() {
    console.log('hi scroll', $(window).scrollTop());

    let nowScroll = $(window).scrollTop();
    if (nowScroll > 500) {
      $(".knowpic2 img").css('transform', 'scale(1.5)')
    } else {
      $(".knowpic2 img").css('transform', 'scale(1)')
    }
    if (nowScroll > 500) {
      $(".knowpic1 img").css('transform', 'scale(1.5)')
    } else {
      $(".knowpic1 img").css('transform', 'scale(1)')
    }
    if (nowScroll > 3100) {
      $(".situation-pic img").eq(0).css('transform', 'scale(1.2)')
    } else {
      $(".situation-pic img").eq(0).css('transform', 'scale(1)')
    }
    if (nowScroll > 3250) {
      $(".situation-pic img").eq(1).css('transform', 'scale(1.2)')
    } else {
      $(".situation-pic img").eq(1).css('transform', 'scale(1)')
    }
    if (nowScroll > 3550) {
      $(".situation-pic img").eq(2).css('transform', 'scale(1.2)')
    } else {
      $(".situation-pic img").eq(2).css('transform', 'scale(1)')
    }

  });
</script>

<!-- 加入購物車功能 -->
<script>
  $('.btn-buy').on('click', function(event) {
    const item = $(this).closest('.product-item');
    const sid = item.attr('data-sid');
    const qty = item.find('.btn-quantity').text();

    console.log({
      sid: sid,
      quantity: qty
    });
    $.get('5_addToCart-API.php', {
      sid: sid,
      quantity: qty,
      action: 'add'
    }, function(data) {
      console.log(data);
      // TODO:購物車budge
      countCart(data.cart);
    }, 'json');
  });

  function showProductModal(sid) {
    $('iframe')[0].src = "product-detail02.php?sid=" + sid;
    // product-detail02.php?sid=17
    $('#exampleModal').modal('show')
  }
</script>

<!-- 75 JS start -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/demo.js"></script>
<!-- 75 JS end -->

<?php include __DIR__ . '/parts/6_html_foot.php'; ?>