<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>10_blogView1.css">


<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php include __DIR__ . '/parts/7_fix-icon.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<!-- blogView架構開始 -->

<section class="et-hero-tabs">
  <div class="blog-title">
    <h1 class="blog-h1">BLOG</h1>
    <h3 class="blog-h3">探索耳機 成為日常</h3>

  </div>

  <div class="et-hero-tabs-container">
    <a class="et-hero-tab" href="#tab-newsinfo">最新資訊</a>
    <a class="et-hero-tab" href="#tab-hotnews">熱門文章</a>
    <a class="et-hero-tab" href="#tab-knowinfo">耳機知識</a>
    <a class="et-hero-tab" href="#tab-newidea">創新科技</a>
    <!-- <a class="et-hero-tab" href="#tab-other">Other</a> -->
    <span class="et-hero-tab-slider"></span>
  </div>
</section>

<!-- Main -->
<main class="et-main">

  <!-- 最新資訊架構區 -->
  <section class="et-slide" id="tab-newsinfo">
    <div id="blog-title-h4">
      <h4 class="blog-h4">耳機新消息</h4>
      <p id="blog-p">News</p>
    </div>

    <div class="news-area">
      <div class="top-newBox">
        <div class="top-left">
          <div class="top-lable">
            <p id="top-lable-p">TOP <br> NEWS</p>
          </div>

          <div class="topnews-area">
            <div class="alltop-date">
              <p id="alltop-p">12-15-2020</p>
            </div>

            <div class="topnew-info">
              <div class="topnew-title">
                <a id="topnew-title-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                  <h3 id="topnew-title-h3">Google手機的AirPods？！
                    <br>
                    外媒評測Google Pixel Buds 2真無線藍牙耳機</h3>
                </a>
              </div>

              <p class="topnew-more">
                Pixel Buds 2是Google的AirPods，是真無線藍牙耳機，外觀與Pixel 5手機非常相似。
                使用者能夠舒適地戴著它們來跑步或在健身房運動，並且能夠免持使用....
              </p>



            </div>
          </div>

          <!-- Read箭頭 -->

          <div class="topnew-bt-read">
            <a id="topnew-href" class="topnew" href="http://localhost/sennheiser75/11_blogArticle.php">
              <h4 id="top-read-h4">
                Read
              </h4>
              <div class="gold-read-arrow">
                <img id="gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
              </div>
            </a>

            <!-- topnew-bt-read 結束-->
          </div>
        </div>

        <!-- topNew右邊圖片區 -->

        <div class="topnew-right-area ">
          <div class="topnew-right-img ">
            <img id="topnew-img" src="./images/10_blogView/blognew.jpg" alt="">
          </div>
        </div>

        <!-- topBox架構結束 -->

      </div>

      <!-- News Slider架構開始 -->
      <div class="blog-slider">
        <!-- 上一頁箭頭 開始 -->
        <button id="blog-prev" class="blog-btn">
          <i id="b-slider-prev" class="fas fa-chevron-left"></i>
        </button>
        <!-- 上一頁箭頭 結束 -->


        <div class="blog-card-content">
          <!-- Card -->
          <div class="blog-card">
            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-1.jpg" alt="">
              <!-- <img class="blur" src="https://photo-cdn.icons8.com/assets/sata/editor/object/244/fc8f52e5-219e-47a0-8475-b96d4f3e6529.png" alt=""> -->
            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-14-2020<p>
                  <h2 id="blog-h2">Bose SoundSport Free V.S. JBL Reflect Flow：哪副真無線運動耳機最適合您？</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

          <!-- Card -->
          <div class="blog-card">
            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-2.jpg" alt="">

            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-13-2020<p>
                  <h2 id="blog-h2">Jabra Elite 85t降噪真無線正式在台上市　27日前預購即Mark Gazza無線充電板</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

          <!-- Card -->
          <div class="blog-card">

            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-3.jpg" alt="">

            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-12-2020<p>
                  <h2 id="blog-h2">不用再暫停、拿下耳罩　Apple未來的頭戴式耳機之間可以建立無線語音通訊</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

          <!-- Card -->
          <div class="blog-card">
            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-4.jpg" alt="">

            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-10-2020<p>
                  <h2 id="blog-h2">藍牙耳機過度充電會容易損壞嗎？　四個方法延長藍牙耳機的電池壽命</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

          <!-- Card -->
          <div class="blog-card">
            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-5.jpg" alt="">
            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-08-2020<p>
                  <h2 id="blog-h2">2020 最佳無線運動耳機大盤點 | 讓跑步玩家都想擁有的耳機</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

          <!-- Card -->
          <div class="blog-card">
            <div class="blog-card-img">
              <img class="b-imgs" src="./images/10_blogView/blognew-6.jpg" alt="">

            </div>
            <div class="blog-card-text">
              <p id="b-slider-p">12-05-2020<p>
                  <h2 id="blog-h2">誠意十足的有感升級｜開箱Jabra Elite 85t降噪真無線藍牙耳機</h2>

                  <div class="news-bt-read">
                    <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <h4 id="news-read-h4">
                        Read
                      </h4>
                    </a>
                    <div class="news-gold-read-arrow">
                      <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                        <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                      </a>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Card End -->

        </div>

        <button id="blog-next" class="blog-btn">
          <i id="b-slider-next" class="fas fa-chevron-right"></i>
        </button>
      </div>

      <!-- alltopNew架構結束 -->

    </div>



    <!-- 最新資訊架構最後結束 -->
  </section>

  <div class="b-main-imgs">
    <img id="b-main-img" src="./images/10_blogView/blog-3.jpg" alt="">

  </div>



  <!-- 熱門文章架構區 -->

  <section class="et-slide" id="tab-hotnews">
    <div id="blog-title-h4">
      <h4 class="blog-h4">熱門文章</h4>
      <p id="blog-p">Hots</p>
    </div>


    <div class="all-hot-cards">
      <div class="all-hots row">

        <div calss="left-top">
          <div class="hot-card--Top">

            <div class="hot-Top-img"></div>
            <a href="http://localhost/sennheiser75/11_blogArticle.php" class="hot-card-link">
              <div class="hot-Top-img--hover"></div>
            </a>
            <div class="hot-lable">
              <p id="hot-lable-p">HOT <br> 1</p>
            </div>

            <div class="hot-cardTop-info">


              <span id="hot-cardTop-category">10-26-2020</span>
              <h3 id="hot-cardTop-title">品質第一、CP值退去！<br>
                2020年10大真無線藍牙耳機推薦</h3>

              <div class="hot-bt-read">
                <a id="hot-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                  <h4 id="hot-read-h4">
                    Read
                  </h4>
                </a>
                <div class="hot-gold-read-arrow">
                  <a id="hot-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <img id="hot-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>


        </div>

        <div class="all-right">

          <div class="right-top">

            <div class="hot-cards hot-card--1">
              <div class="hot-card-img"></div>
              <a href="http://localhost/sennheiser75/11_blogArticle.php" class="hot-card-link">
                <div class="hot-card-img--hover"></div>
              </a>
              <div class="hot-lable2-5">
                <p id="hot2-5-lable-p">HOT <br> 2</p>
              </div>
              <div class="hot-card-info">

                <span class="hot-card-category">05-28-2020</span>
                <h3 class="hot-card-title">平價CP值第一! 2020 專家推薦10款真無線藍牙耳機</h3>
                <div class="hotRight-bt-read">
                  <a id="hotRight-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="hotRight-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="hotRight-gold-read-arrow">
                    <a id="hotRight-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="hotRight-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="hot-cards hot-card--2">
              <div class="hot-card-img"></div>
              <a href="http://localhost/sennheiser75/11_blogArticle.php" class="hot-card-link">
                <div class="hot-card-img--hover"></div>
              </a>
              <div class="hot-lable2-5">
                <p id="hot2-5-lable-p">HOT <br> 3</p>
              </div>
              <div class="hot-card-info">

                <span class="hot-card-category"> 11-04-2020</span>
                <h3 class="hot-card-title">Apple正式宣布AirPods Pro的免費維修方案　快來檢查是否符合資格</h3>
                <div class="hotRight-bt-read">
                  <a id="hotRight-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="hotRight-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="hotRight-gold-read-arrow">
                    <a id="hotRight-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="hotRight-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>





          </div>

          <div class="down-right-top">


            <div class="hot-cards hot-card--3">
              <div class="hot-card-img"></div>
              <a href="http://localhost/sennheiser75/11_blogArticle.php" class="hot-card-link">
                <div class="hot-card-img--hover"></div>
              </a>
              <div class="hot-lable2-5">
                <p id="hot2-5-lable-p">HOT <br> 4</p>
              </div>
              <div class="hot-card-info">

                <span class="hot-card-category">10-23-2020</span>
                <h3 class="hot-card-title">這些都兼容iOS手機！2020年最佳iPhone真無線藍牙耳機推薦</h3>
                <div class="hotRight-bt-read">
                  <a id="hotRight-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="hotRight-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="hotRight-gold-read-arrow">
                    <a id="hotRight-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="hotRight-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="hot-cards hot-card--4">
              <div class="hot-card-img"></div>
              <a href="http://localhost/sennheiser75/11_blogArticle.php" class="hot-card-link">
                <div class="hot-card-img--hover"></div>
              </a>
              <div class="hot-lable2-5">
                <p id="hot2-5-lable-p">HOT <br> 5</p>
              </div>
              <div class="hot-card-info">

                <span class="hot-card-category"> 11-20-2020</span>
                <h3 class="hot-card-title">Google手機的AirPods?!外媒評測Google Pixel Buds 2真無線藍牙耳機</h3>
                <div class="hotRight-bt-read">
                  <a id="hotRight-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="hotRight-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="hotRight-gold-read-arrow">
                    <a id="hotRight-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="hotRight-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>




          </div>




        </div>


        <!-- row架構結束 -->
      </div>

      <!-- All-hot-cards 架構結束 -->
    </div>


  </section>

  <div class="b-main-imgs">
    <img id="b-main-img" src="./images/10_blogView/blog-4.jpg" alt="">

  </div>





  <!-- 耳機知識架構區 -->
  <section class="et-slide" id="tab-knowinfo">
    <div id="blog-title-h4">
      <h4 class="blog-h4">耳機知識</h4>
      <p id="blog-p">Knows</p>
    </div>


    <!-- 和NEWS 文章的slider用同一種 -->
    <div class="blog-slider">
      <!-- 上一頁箭頭 開始 -->
      <button id="know-prev" class="know-btn">
        <i id="k-slider-prev" class="fas fa-chevron-left"></i>
      </button>
      <!-- 上一頁箭頭 結束 -->


      <div class="know-card-content">
        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-1.jpg" alt="">
            <!-- <img class="blur" src="https://photo-cdn.icons8.com/assets/sata/editor/object/244/fc8f52e5-219e-47a0-8475-b96d4f3e6529.png" alt=""> -->
          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">11-09-2020<p>
                <h2 id="blog-h2">電競耳機怎麼挑? 2020 優質電競耳機推薦</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-3.jpeg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">10-29-2020 <p>
                <h2 id="blog-h2">為什麼真無線藍牙耳機會有延遲？　關鍵在於聽筒之間的連線方式</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">

          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-4.jpeg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">10-07-2020<p>
                <h2 id="blog-h2">選購耳機時都會有的疑問》什麼是頻率響應？其如何影響音樂？</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-5.jpeg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">09-30-2020<p>
                <h2 id="blog-h2">AirPods Pro快速切換反而造成麻煩？　有2個方法可以避免</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-6.jpeg" alt="">
          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">09-23-2020<p>
                <h2 id="blog-h2">選購耳機時都會有的疑問》IP等級夠高就一定能在水中使用？</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-7.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">09-15-2020<p>
                <h2 id="blog-h2">選購耳機時都會有的疑問》什麼是藍牙多點連線？</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->
        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-8.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">09-11-2020<p>
                <h2 id="blog-h2">使用藍牙耳機時的疑問》如何和桌電、PS4以及Switch連線？Creative BT-W3發射器幫你達成願望</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->
        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-9.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">09-02-2020<p>
                <h2 id="blog-h2">買耳機必學選購全攻略! 嚴選 10款 2020 真無線藍牙耳機</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->
        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/earphone-10.png" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">07-27-2020<p>
                <h2 id="blog-h2">選購耳機時都會有的疑問》驅動單元如何選擇？單體越大音質就越好嗎？</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->



      </div>

      <button id="know-next" class="know-btn">
        <i id="k-slider-next" class="fas fa-chevron-right"></i>
      </button>
    </div>


  </section>



  <!-- main img -->

  <div class="b-main-imgs">
    <img id="b-main-img" src="./images/10_blogView/blog-5.jpg" alt="">

  </div>







  <!-- 創新科技架構區 -->
  <section class="et-slide" id="tab-newidea">
    <div id="blog-title-h4">
      <h4 class="blog-h4">創新科技</h4>
      <p id="blog-p">Ideas</p>
    </div>

    <!-- 和news文章的slider一樣 -->

    <div class="blog-slider">
      <!-- 上一頁箭頭 開始 -->
      <button id="idea-prev" class="idea-btn">
        <i id="d-slider-prev" class="fas fa-chevron-left"></i>
      </button>
      <!-- 上一頁箭頭 結束 -->


      <div class="idea-card-content">
        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-1.jpg" alt="">
            <!-- <img class="blur" src="https://photo-cdn.icons8.com/assets/sata/editor/object/244/fc8f52e5-219e-47a0-8475-b96d4f3e6529.png" alt=""> -->
          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">11-23-2020<p>
                <h2 id="blog-h2">搭載三驅動單體又支援aptX HD、aptX LL｜外媒評測Creative Aurvana Trio頸掛式藍牙耳機</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-2.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">11-10-2020<p>
                <h2 id="blog-h2">Creative推出Outlier Air V2：高通cVc 8.0通話降噪、續航力變長、改為觸控按鍵</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">

          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-3.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">11-03-2020<p>
                <h2 id="blog-h2">低延遲、高音質的平價精美耳機｜開箱Marley Champion真無線藍牙耳機</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-4.jpg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">11-02-2020<p>
                <h2 id="blog-h2">比Elite 75系列更強大的主動降噪｜外媒評測Jabra Elite 85t真無線藍牙耳機</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-5.jpeg" alt="">
          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">10-28-2020<p>
                <h2 id="blog-h2">Bose QuietComfort Earbuds V.S. Sony WF-1000XM3：真無線降噪王者拱手讓出？</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card -->
        <div class="blog-card">
          <div class="blog-card-img">
            <img class="b-imgs" src="./images/10_blogView/idea-6.jpeg" alt="">

          </div>
          <div class="blog-card-text">
            <p id="b-slider-p">10-18-2020<p>
                <h2 id="blog-h2">到底該買Sennheiser哪一款真無線藍牙耳機？ 詳細分析Momentum True Wireless 2和CX 400BT的差異</h2>

                <div class="news-bt-read">
                  <a id="news-href" href="http://localhost/sennheiser75/11_blogArticle.php">
                    <h4 id="news-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="news-gold-read-arrow">
                    <a id="news-gold-arrow-hover" href="http://localhost/sennheiser75/11_blogArticle.php">
                      <img id="news-gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </div>
        <!-- Card End -->

      </div>

      <button id="idea-next" class="idea-btn">
        <i id="d-slider-next" class="fas fa-chevron-right"></i>
      </button>
    </div>







  </section>






  <!-- <section class="et-slide" id="tab-other">
          <h1>Other</h1>
          <h3>something about other</h3>
        </section> -->
</main>









<script src="./lib/jquery-3.5.1.js"></script>
<script>
  // scroll 到指定頁面 開始

  class StickyNavigation {

    constructor() {
      this.currentId = null;
      this.currentTab = null;
      this.tabContainerHeight = 58;
      let self = this;
      $('.et-hero-tab').click(function() {
        self.onTabClick(event, $(this));
      });
      $(window).scroll(() => {
        this.onScroll();
      });
      $(window).resize(() => {
        this.onResize();
      });
    }

    onTabClick(event, element) {
      event.preventDefault();
      let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
      $('html, body').animate({
        scrollTop: scrollTop
      }, 600);
    }

    onScroll() {
      this.checkTabContainerPosition();
      this.findCurrentTabSelector();
    }

    onResize() {
      if (this.currentId) {
        this.setSliderCss();
      }
    }

    checkTabContainerPosition() {
      let offset = $('.et-hero-tabs').offset().top + $('.et-hero-tabs').height() - this.tabContainerHeight;
      if ($(window).scrollTop() > offset) {
        $('.et-hero-tabs-container').addClass('et-hero-tabs-container--top');
      } else {
        $('.et-hero-tabs-container').removeClass('et-hero-tabs-container--top');
      }
    }

    findCurrentTabSelector(element) {
      let newCurrentId;
      let newCurrentTab;
      let self = this;
      $('.et-hero-tab').each(function() {
        let id = $(this).attr('href');
        let offsetTop = $(id).offset().top - self.tabContainerHeight;
        let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
        if ($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
          newCurrentId = id;
          newCurrentTab = $(this);
        }
      });
      if (this.currentId != newCurrentId || this.currentId === null) {
        this.currentId = newCurrentId;
        this.currentTab = newCurrentTab;
        this.setSliderCss();
      }
    }

    setSliderCss() {
      let width = 0;
      let left = 0;
      if (this.currentTab) {
        width = this.currentTab.css('width');
        left = this.currentTab.offset().left;
      }
      $('.et-hero-tab-slider').css('width', width);
      $('.et-hero-tab-slider').css('left', left);
    }

  }

  // tab結束


  // slider開始

  new StickyNavigation();





  const next = document.querySelector('#blog-next')
  const prev = document.querySelector('#blog-prev')

  function handleScrollNext(scrollDiv) {
    scrollDiv.scrollLeft = scrollDiv.scrollLeft += window.innerWidth / 2 > 600 ? window.innerWidth / 2 : 320
  }

  function handleScrollPrev(scrollDiv) {
    scrollDiv.scrollLeft = scrollDiv.scrollLeft -= window.innerWidth / 2 > 600 ? window.innerWidth / 2 : 320

  }

  next.addEventListener('click', function() {
    handleScrollNext(document.querySelector('.blog-card-content'));
  })
  prev.addEventListener('click', function() {
    handleScrollPrev(document.querySelector('.blog-card-content'));
  });


  // 耳機知識 slider


  const knowNext = document.querySelector('#know-next')
  const knowPrev = document.querySelector('#know-prev')



  knowNext.addEventListener('click', function() {
    handleScrollNext(document.querySelector('.know-card-content'));
  })
  knowPrev.addEventListener('click', function() {
    handleScrollPrev(document.querySelector('.know-card-content'));
  });


  // 創新科技 idea


  const ideaNext = document.querySelector('#idea-next')
  const ideaPrev = document.querySelector('#idea-prev')

  ideaNext.addEventListener('click', function() {
    handleScrollNext(document.querySelector('.idea-card-content'));
  })
  ideaPrev.addEventListener('click', function() {
    handleScrollPrev(document.querySelector('.idea-card-content'));
  });

  // scroll 指定頁面 結束


  // slider 結束
</script>
<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>