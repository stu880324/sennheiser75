<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS樣式 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>2_productList01.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php include __DIR__ . '/parts/7_fix-icon.php'; ?>

<!-- 以下刪除就可以開始編輯 -->
<!-- select-section -->
<div class="container-fluid select-fullarea">
  <div class="row select-area d-flex">
    <div class="select-area-left">
      <div class="select-areabgc">
        <div class="select-area-pic1">
          <img src="images/2_productList/01.jpg" alt="" />
        </div>
      </div>

      <div class="earphone-row">
        <div class="earphonebtnleft">
          <ul class="select-earphone">
            <li>
              <button class="earphone-btn" data-type="circumaural">
                <p class="earphone-p">頭戴式</p>
              </button>
            </li>
            <li>
              <button class="earphone-btn" data-type="in-ear">
                <p class="earphone-p">入耳式</p>
              </button>
            </li>
            <li>
              <button class="earphone-btn" data-type="supra-aural">
                <p class="earphone-p">耳掛式</p>
              </button>
            </li>
            <input type="text" name="earphoneType" id="earphoneType" hidden />
          </ul>
        </div>

        <div class="earphonebtnright">
          <div class="earphone-color-area">
            <p class="earphone-color-title">顏色</p>
            <ul class="select-colorbox">
              <li class="earphone-color select-color-w" data-color="white"></li>
              <li class="earphone-color select-color-g" data-color="gray"></li>
              <li class="earphone-color select-color-b" data-color="black"></li>
              <li class="earphone-color select-color-gold" data-color="golden"></li>
              <li class="earphone-color select-color-y" data-color="yellow"></li>
              <input id="earphoneColorInput" name="earphone-color" type="text" value="" hidden />
            </ul>
          </div>

          <div class="earphone-feature-area">
            <ul class="select-feature">
              <li class="earphone-feature">特色</li>
              <li class="checkbox">
                <input id="bluetooth" type="checkbox" value="0" /> <label for="bluetooth">藍芽</label>
              </li>
              <li class="checkbox">
                <input id="noise-canceling" type="checkbox" value="1" /> <label for="noise-canceling">降噪</label>
              </li>
              <li class="checkbox">
                <input id="rotatable" type="checkbox" value="2" /> <label for="rotatable">可旋轉式耳罩</label>
              </li>
              <li class="checkbox">
                <input id="water-proof" type="checkbox" value="3" /> <label for="water-proof">防汗防水</label>
              </li>
              <li class="checkbox">
                <input id="big-size" type="checkbox" value="4" /> <label for="big-size">大尺寸環形振膜</label>
              </li>
              <li class="checkbox">
                <input id="ultra-wideband" type="checkbox" value="5" /> <label for="ultra-wideband">超寬頻動圈單體</label>
              </li>
            </ul>
          </div>

          <div class="earphone-situation-area">
            <ul class="select-situation">
              <li class="earphone-situation">情境</li>
              <li class="radio">
                <input id="sporting" type="radio" name="situation_radio" value="0" /> <label for="sporting">運動</label>
              </li>
              <li class="radio">
                <input id="commuting" type="radio" name="situation_radio" value="1" /> <label for="commuting">通勤</label>
              </li>
              <li class="radio">
                <input id="gaming" type="radio" name="situation_radio" value="2" /> <label for="gaming">電競</label>
              </li>
              <li class="radio">
                <input id="recording" name="situation_radio" type="radio" value="3" /> <label for="recording">監聽</label>
              </li>
              <li class="radio">
                <input id="meeting" name="situation_radio" type="radio" value="4" /> <label for="meeting">會議</label>
              </li>
            </ul>
          </div>
        </div>

        <div class="filter-rule">
          <span class="filter-rule-t"> 篩選條件</span>
        </div>
      </div>
    </div>

    <div class="select-area-right">
      <div class="select-area-pic2 wow slideInRight">
        <img src="images/2_productList/02.png" alt="" />
      </div>
    </div>
  </div>
</div>

<!-- product-card -->
<div class="container">
  <div class="row product-list mx-auto">
    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="9">
          <img class="iconsvg" src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img class="iconsvg" src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product9.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">HD 800 S Anniversary Edition</p>
        <p class="ch">經典開放式旗艦 75週年限量商品</p>
        <p class="p-price">NT$ 50990</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=9" class="a-white">查看商品</a>
      </div>
    </div>

    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="1">
          <img src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product1.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">MOMENTUM 3 Wireless</p>
        <p class="ch">無線藍牙降噪耳機(白)</p>
        <p class="p-price">NT$ 13900</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=1" class="a-white">查看商品</a>
      </div>
    </div>

    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="2">
          <img src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product2.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">MOMENTUM 3 Wireless</p>
        <p class="ch">無線藍牙降噪耳機(黑)</p>
        <p class="p-price">NT$ 13900</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=2" class="a-white">查看商品</a>
      </div>
    </div>


    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="26">
          <img src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product26.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">PXC 550 Wireless</p>
        <p class="ch">旅行藍牙抗噪</p>
        <p class="p-price">NT$ 10900</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=26" class="a-white">查看商品</a>
      </div>
    </div>
    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="33">
          <img src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product33.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">CX 400BT True Wireless</p>
        <p class="ch">真無線藍牙耳機</p>
        <p class="p-price">NT$ 6490</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=33" class="a-white">查看商品</a>
      </div>
    </div>
    <div class="product-card">
      <div class="icons-part">
        <a href="" class="icons add-cart-btn" data-sid="40">
          <img src="images/2_productList/icons/shopcar.svg" alt="" />
        </a>

        <a href="" class="icons">
          <img src="images/2_productList/icons/heart.svg" alt="" />
        </a>
      </div>

      <div class="product-img">
        <img src="images/small/product40.jpg" alt="" />
      </div>

      <div class="product-text">
        <p class="en">CX SPORT</p>
        <p class="ch">經典運動藍牙款</p>
        <p class="p-price">NT$ 4290</p>
      </div>

      <div class="a-white-div">
        <a href="3_productDetail.php?sid=40" class="a-white">查看商品</a>
      </div>
    </div>
  </div>
</div>

<!-- Pagination -->
<div class="container">
  <div class="row pagination-area">
    <ul class="pagination">
      <li><a href="#">«</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a href="#">7</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
</div>

<!-- carousel -->
<div class="container carousel" id="carousel" data-state="0">
  <h5 class="award">Sennheiser – 得獎耳機</h5>
  <div class="carousel-big-images">
    <div class="carousel-big-image" data-key="0">
      <img src="images/2_productList/poductlist-carousel/carousel-01.jpg" alt="" />
    </div>
    <div class="carousel-big-image" data-key="1">
      <img src="images/2_productList/poductlist-carousel/carousel02.jpg" alt="" />
    </div>
    <div class="carousel-big-image" data-key="2">
      <img src="images/2_productList/poductlist-carousel/carousel03.jpg" alt="" />
    </div>
    <div class="carousel-big-image" data-key="3">
      <img src="images/2_productList/poductlist-carousel/carousel04.jpg" alt="" />
    </div>
    <div class="carousel-big-image" data-key="4">
      <img src="images/2_productList/poductlist-carousel/carousel05.jpg" alt="" />
    </div>
  </div>
  <div class="carousel-thumbnails">
    <div class="carousel-thumbnail" tabindex="-1" data-key="0">
      <img src="images/2_productList/poductlist-carousel/carousel-01.jpg" alt="" />
      <div class="carousel-cuticle" data-flip-key="cuticle"></div>
    </div>
    <div class="carousel-thumbnail" tabindex="-1" data-key="1">
      <img src="images/2_productList/poductlist-carousel/carousel02.jpg" alt="" />
      <div class="carousel-cuticle" data-flip-key="cuticle"></div>
    </div>
    <div class="carousel-thumbnail" tabindex="-1" data-key="2">
      <img src="images/2_productList/poductlist-carousel/carousel03.jpg" alt="" />
      <div class="carousel-cuticle" data-flip-key="cuticle"></div>
    </div>
    <div class="carousel-thumbnail" tabindex="-1" data-key="3">
      <img src="images/2_productList/poductlist-carousel/carousel04.jpg" alt="" />
      <div class="carousel-cuticle" data-flip-key="cuticle"></div>
    </div>
    <div class="carousel-thumbnail" tabindex="-1" data-key="4">
      <img src="images/2_productList/poductlist-carousel/carousel05.jpg" alt="" />
      <div class="carousel-cuticle" data-flip-key="cuticle"></div>
    </div>
  </div>
  <div class="carousel-content">
    <nav class="carousel-nav">
      <button id="prev" tabindex="-1" title="Previous">&lt;</button>
      <button id="next" tabindex="-1" title="Next">&gt;</button>
    </nav>

    <div class="carousel-articles">
      <article class="carousel-article" data-key="0">
        <h2 class="carousel-heading">PXC 550 wireless</h2>
        <p class="carousel-paragraph">
          榮獲著名的iF Label產品設計獎。滿足經常出行的用戶需求，
          擁有長久電池續航性能及可通過聲音個性化應用程式CapTune™
          定製聆聽體驗， 應用程式本身也獲得Red Dot Award通信設計獎。
        </p>
      </article>
      <article class="carousel-article" data-key="1">
        <h2 class="carousel-heading">HD 820</h2>
        <p class="carousel-paragraph">
          獲得最佳Hi-Fi耳機有線獎。
          透明音質的封閉式動圈耳機，讓你無論身處何地都能聽見高保真的聲浪。
          獨特玻璃材質換能器外殼配置，實現小共振，讓你感受廣闊豐富的開放聲場。
        </p>
      </article>
      <article class="carousel-article" data-key="2">
        <h2 class="carousel-heading">IE 500 PRO</h2>
        <p class="carousel-paragraph">
          榮獲高端耳塞銀獎。極高解析度和接近無失真聲音的入耳式監控器，
          採新的TrueResponse技術，符合人體工程學結構，
          讓耳機安全舒適地放入每個人的耳道內。
        </p>
      </article>
      <article class="carousel-article" data-key="3">
        <h2 class="carousel-heading">IE 80S BT</h2>
        <p class="carousel-paragraph">
          榮獲藍牙耳機銀獎，發燒友級別的入耳式藍牙耳機，高保真低延遲，
          重現高精確度的聲場特性。時尚頸帶設計，
          讓這款高品質的無線聽音系統成為聽眾所心儀的上佳無線伴侶。
        </p>
      </article>
      <article class="carousel-article" data-key="4">
        <h2 class="carousel-heading">MOMENTUM Wireless</h2>
        <p class="carousel-paragraph">
          榮獲星標大獎——用戶選擇獎，集顏值、技術和音質於一身，
          啞光磨砂質地的金屬支架讓佩戴更舒適。
          擁有智能降躁和透明聆聽功能，高中低三頻、器樂和人聲實現平衡。
        </p>
      </article>
    </div>
  </div>
</div>

<button class="btn-buy" data-toggle="modal" data-target=".bd-example-modal-sm" hidden>加入購物車</button>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content text-center" style="background-color: #000; color:#fff; height:200px; line-height:200px;">
      已加入購物車
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  new WOW().init();
</script>

<script src="https://unpkg.com/flipping@1.1.0/dist/flipping.web.js"></script>
<script>
  new WOW().init();
  console.clear();

  const elPrevButton = document.querySelector("#prev");
  const elNextButton = document.querySelector("#next");
  console.log('elNextButton', elNextButton);
  const flipping = new Flipping();

  const elImages = Array.from(
    document.querySelectorAll(".carousel-big-image")
  );
  const elThumbnails = Array.from(
    document.querySelectorAll(".carousel-thumbnail")
  );

  let state = {
    photo: 0,
  };

  function send(event) {
    // read cuticle positions
    flipping.read();

    const elActives = document.querySelectorAll("[data-active]");

    Array.from(elActives).forEach((el) =>
      el.removeAttribute("data-active")
    );

    switch (event) {
      case "PREV":
        state.photo--;
        // Math.max(state.photo - 1, 0);
        break;
      case "NEXT":
        state.photo++;
        // Math.min(state.photo + 1, elImages.length - 1);
        break;
      default:
        state.photo = +event;
        break;
    }

    var len = elImages.length;
    // Loop Around
    //state.photo = ( ( state.photo % len) + len ) % len;
    state.photo = Math.max(0, Math.min(state.photo, len - 1));

    Array.from(
      document.querySelectorAll(`[data-key="${state.photo}"]`)
    ).forEach((el) => {
      el.setAttribute("data-active", true);
    });

    // execute the FLIP animation
    flipping.flip();
  }

  elThumbnails.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      send(thumb.dataset.key);
    });
  });

  elPrevButton.addEventListener("click", () => {
    console.log('hi elPrevButton.addEventListener')
    send("PREV");
  });

  elNextButton.addEventListener("click", () => {
    console.log('hi elNextButton.addEventListener')
    send("NEXT");
  });

  send(0);
</script>
<script>
  $(".earphone-color").on("click", function(event) {
    $(".earphone-color").removeClass("active");
    $(this).addClass("active");
    $("#earphoneColorInput").val(event.target.classList[1]);
  });

  $(".earphone").on("click", function(event) {
    $("#earphoneType").val($.trim($(this).text()));
  });
</script>
<!-- 刪到這裡 -->

<script>
  let earphoneData = null;
  let earphoneType = null;
  $('.earphone-btn').on('click', function() {
    $('.earphone-btn').removeClass('active');
    $(this).addClass('active');
    console.log('hi earphone-btn', $(this).data('type'))
    earphoneType = $(this).data('type');
    updateEarphoneList()
  })


  let earphoneColor = null;
  $('.earphone-color').on('click', function() {
    console.log('hi earphone-btn', $(this).data('color'))
    earphoneColor = $(this).data('color');
    updateEarphoneList()
  })

  let featureArray = [false, false, false, false, false, false]
  $('input[type="checkbox"]').on('change', function() {
    console.log($(this).prop('checked'));
    console.log($(this).val());
    featureArray[$(this).val()] = $(this).prop('checked');
    console.log('featureArray', featureArray);
    updateEarphoneList()
  })

  let moodOption = null;
  $('input[type="radio"]').on('change', function() {
    console.log($(this).prop('checked'));
    console.log($(this).val());
    moodOption = $(this).val();
    // featureArray[$(this).val()] = $(this).prop('checked');
    // console.log('featureArray', featureArray);
    updateEarphoneList()
  })

  let pageNum = 1;
  let totalPage = null;


  let isFirstTimeGettingData = true;

  function updateEarphoneList() {
    console.log('$', $)
    $.post('./2_productList_api.php', {
      type: earphoneType,
      color: earphoneColor,
      featureArray: featureArray,
      moodOption: moodOption,
      pageNum: pageNum,
      totalPage: totalPage,
    }, function(data) {
      let result = JSON.parse(data);
      earphoneData = result.result;
      console.log(result);
      if (result.success) {
        let html = '';
        // pageNum = 1;
        totalPage = Math.ceil(result.result.length / 6);
        updatePagination();
        let shouldAdjustCSS = (result.result.length === 5) ? true : false;
        let shouldAdjustCSS2 = (result.result.length === 4) ? true : false;
        for (let i = 0; i < Math.min(result.result.length, 6); i++) {
          html += `<div class="product-card wow slideInUp ${(shouldAdjustCSS && i === 3 )? 'earphone-1':''} ${(shouldAdjustCSS && i === 4 )? 'earphone-2':''} ${(shouldAdjustCSS2 && i === 3 )? 'earphone-onlyOne':''}">
              <div class="icons-part">
                <a href="" class="icons add-cart-btn" data-sid="${earphoneData[i].sid}">
                  <img class="iconsvg" src="images/2_productList/icons/shopcar.svg" alt="" />
                </a>

                <a href="" class="icons">
                  <img class="iconsvg" src="images/2_productList/icons/heart.svg" alt="" />
                </a>
              </div>

              <div class="product-img">
                <img src="images/small/product${result.result[i].sid}.jpg" alt="" />
              </div>

              <div class="product-text">
                <p class="en">${result.result[i].english_name}</p>
                <p class="ch">${result.result[i].chinese_name}</p>
                <p class="p-price">NT$ ${result.result[i].price}</p>
              </div>

              <div class="a-white-div">
                <a href="3_productDetail.php?sid=${result.result[i].sid}" class="a-white">查看商品</a>
              </div>
            </div>`
        }

        //初次不變更資料
        if (!isFirstTimeGettingData) {
          $('.product-list').html(html)
        } else {
          isFirstTimeGettingData = false;
        }

      } else {
        totalPage = 1;
        updatePagination();
        $('.product-list').html('<h2 style="padding:100px 0">查無耳機資料</h2>')
      }
    });
  }

  function updatePagination() {
    console.log('updatePagination');
    let html = `<li><a href="#">«</a></li>`;

    for (var i = 0; i < totalPage; i++) {
      html += `<li ${(i===pageNum-1)?'class="active"' : ''}><a href="#">${i+1}</a></li>`
    }
    html += `<li><a href="#">»</a></li>`

    $('.pagination').html(html);

    $('.pagination li').on('click', function(e) {
      e.preventDefault();


      console.log($(this).text());
      let text = $(this).text();
      let shouldUpdate = false;

      if (text === '«' && pageNum > 1) {
        pageNum -= 1;
        shouldUpdate = true;
      } else if (text === '»' && pageNum < totalPage) {
        pageNum += 1;
        shouldUpdate = true;
      } else if (text !== '«' && text !== '»' && pageNum !== +text) {
        pageNum = +text;
        shouldUpdate = true;
      }
      console.log('pagination li on click and pageNum=', pageNum);
      $('.pagination li').removeClass('active').eq(pageNum).addClass('active');

      if (shouldUpdate) {
        updateEarphoneShowData();
      }

    })
    // <ul class="pagination">
    //   <li><a href="#">«</a></li>
    //   <li><a href="#">1</a></li>
    //   <li class="active"><a class="active-a" href="#">2</a></li>
    //   <li><a href="#">3</a></li>
    //   <li><a href="#">4</a></li>
    //   <li><a href="#">5</a></li>
    //   <li><a href="#">6</a></li>
    //   <li><a href="#">7</a></li>
    //   <li><a href="#">»</a></li>
    // </ul>
  }

  function updateEarphoneShowData() {
    let startNum = (pageNum - 1) * 6;
    let endNum = Math.min((startNum + 6), earphoneData.length);
    console.log('min', Math.min((startNum + 6), earphoneData.length));
    console.log('endNum - startNum', endNum - startNum);
    let shouldAdjustCSS = (endNum - startNum === 5) ? true : false;
    let shouldAdjustCSS2 = (endNum - startNum === 4) ? true : false;
    console.log('shouldAdjustCSS', shouldAdjustCSS);
    let html = '';
    for (let i = startNum; i < endNum; i++) {
      html += `<div class="product-card ${(shouldAdjustCSS && i === startNum+3 )? 'earphone-1':''} ${(shouldAdjustCSS && i === startNum+4 )? 'earphone-2':''} ${(shouldAdjustCSS2 && i === startNum+3 )? 'earphone-onlyOne':''}">
              <div class="icons-part">
                <a href="" class="icons  add-cart-btn" data-sid="${earphoneData[i].sid}">
                  <img class="iconsvg" src="images/2_productList/icons/shopcar.svg" alt="" />
                </a>

                <a href="" class="icons">
                  <img class="iconsvg" src="images/2_productList/icons/heart.svg" alt="" />
                </a>
              </div>

              <div class="product-img">
                <img src="images/small/product${earphoneData[i].sid}.jpg" alt="" />
              </div>

              <div class="product-text">
                <p class="en">${earphoneData[i].english_name}</p>
                <p class="ch">${earphoneData[i].chinese_name}</p>
                <p class="p-price">NT$ ${earphoneData[i].price}</p>
              </div>

              <div class="a-white-div">
                <a href="3_productDetail.php?sid=${earphoneData[i].sid}" class="a-white">查看商品</a>
              </div>
            </div>`
    }

    $('.product-list').html(html)
  }

  $(function() {
    updateEarphoneList();
  });
</script>

<!-- 加入購物車功能 -->
<script>
  $('.product-list').on('click', '.add-cart-btn', function(event) {
    event.preventDefault();
    console.log('btn', $(this).data('sid'))
    $.get('5_addToCart-API.php', {
      sid: $(this).data('sid'),
      quantity: 1,
      action: 'add'
    }, function(data) {
      $('.btn-buy').click();
      countCart(data.cart);
    }, 'json');
  })
</script>



<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>