<?php include __DIR__. '/parts/1_config.php'; ?>
<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS名稱 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>10_blogView.css">
        

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>


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
                    <p id="alltop-p">11-20-2020</p>
                  </div>
  
                  <div class="topnew-info">
                    <div class="topnew-title">
                      <a id="topnew-title-hover" href="#">
                        <h3 id="topnew-title-h3">Google手機的AirPods？！
                        <br>
                         外媒評測Google Pixel Buds 2真無線藍牙耳機</h3>
                      </a>
                    </div>

                    <p class="topnew-more" >
                    Pixel Buds 2是Google的AirPods，是真無線藍牙耳機，外觀與Pixel 5手機非常相似。
                      使用者能夠舒適地戴著它們來跑步或在健身房運動，並且能夠免持使用....
                    </p>
 

  
                  </div>
                </div>

                <div class="topnew-bt-read">
                  <a  id="topnew-href" href="#">
                    <h4 id="top-read-h4">
                      Read
                    </h4>
                  </a>
                  <div class="gold-read-arrow">
                   <a id="gold-arrow-hover" href="#">
                    <img  id="gold-arrow" src="./images/10_blogView/arrow-blog.svg" alt="">
                   </a>  
                  </div>
 

                </div>

              </div>
             
              <div class="topnew-right-area ">
                <div class="topnew-right-img ">
                  <img id="topnew-img" src="./images/10_blogView/blognew.jpg" alt="">


                </div>

              </div>
              



              </div>
   






            </div>



          </div>


        </section>




        <!-- 熱門文章架構區 -->

        <section class="et-slide" id="tab-hotnews">
          <div id="blog-title-h4">
            <h4 class="blog-h4">熱門文章</h4>
          </div>
        </section>




        <!-- 耳機知識架構區 -->
        <section class="et-slide" id="tab-knowinfo">
          <div id="blog-title-h4">
            <h4 class="blog-h4">耳機知識</h4>
          </div>
         
        </section>



        <!-- 創新科技架構區 -->
        <section class="et-slide" id="tab-newidea">
          <div id="blog-title-h4">
            <h4 class="blog-h4">創新科技</h4>
          </div>
        </section>

        
        <!-- <section class="et-slide" id="tab-other">
          <h1>Other</h1>
          <h3>something about other</h3>
        </section> -->
      </main>









   <script src="./lib/jquery-3.5.1.js"></script>
   <script>
      




  class StickyNavigation {
	
	constructor() {
		this.currentId = null;
		this.currentTab = null;
		this.tabContainerHeight = 58;
		let self = this;
		$('.et-hero-tab').click(function() { 
			self.onTabClick(event, $(this)); 
		});
		$(window).scroll(() => { this.onScroll(); });
		$(window).resize(() => { this.onResize(); });
	}
	
	onTabClick(event, element) {
		event.preventDefault();
		let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
		$('html, body').animate({ scrollTop: scrollTop }, 600);
	}
	
	onScroll() {
		this.checkTabContainerPosition();
    this.findCurrentTabSelector();
	}
	
	onResize() {
		if(this.currentId) {
			this.setSliderCss();
		}
	}
	
	checkTabContainerPosition() {
		let offset = $('.et-hero-tabs').offset().top + $('.et-hero-tabs').height() - this.tabContainerHeight;
		if($(window).scrollTop() > offset) {
			$('.et-hero-tabs-container').addClass('et-hero-tabs-container--top');
		} 
		else {
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
			if($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
				newCurrentId = id;
				newCurrentTab = $(this);
			}
		});
		if(this.currentId != newCurrentId || this.currentId === null) {
			this.currentId = newCurrentId;
			this.currentTab = newCurrentTab;
			this.setSliderCss();
		}
	}
	
	setSliderCss() {
		let width = 0;
		let left = 0;
		if(this.currentTab) {
			width = this.currentTab.css('width');
			left = this.currentTab.offset().left;
		}
		$('.et-hero-tab-slider').css('width', width);
		$('.et-hero-tab-slider').css('left', left);
	}
	
}

new StickyNavigation();




   </script>
<!-- 刪到這裡 -->





<?php include __DIR__. '/parts/4_footer.php'; ?>
<?php include __DIR__. '/parts/5_scripts.php'; ?>
<?php include __DIR__. '/parts/6_html_foot.php'; ?>
