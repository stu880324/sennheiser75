<?php include __DIR__. '/parts/1_config.php'; ?>
<?php include __DIR__. '/parts/2_html_head.php'; ?>
        <!-- 請填入各頁面CSS名稱 -->
        <link rel="stylesheet" href="<?= WEB_ROOT ?>10_blogView.css">
        

<?php include __DIR__. '/parts/2_html_head2.php'; ?>
<?php include __DIR__. '/parts/3_navbar.php'; ?>


<!-- 以下刪除就可以開始編輯 -->
<section class="et-hero-tabs">
		<div class="blog-title">
		  <h1>BLOG</h1>
		  <h3>探索耳機 成為日常</h3>

		</div>
	  
	  <div class="et-hero-tabs-container">
		<a class="et-hero-tab" href="#tab-es6">最新資訊</a>
		<a class="et-hero-tab" href="#tab-flexbox">熱門文章</a>
		<a class="et-hero-tab" href="#tab-react">耳機知識</a>
		<a class="et-hero-tab" href="#tab-angular">創新科技</a>
		<!-- <a class="et-hero-tab" href="#tab-other">Other</a> -->
		<span class="et-hero-tab-slider"></span>
	  </div>
	</section>
  
	<!-- Main -->
	<main class="et-main">
	  <section class="et-slide" id="tab-es6">
		<h1>ES6</h1>
		<h3>something about es6</h3>
	  </section>
	  <section class="et-slide" id="tab-flexbox">
		<h1>Flexbox</h1>
		<h3>something about flexbox</h3>
	  </section>
	  <section class="et-slide" id="tab-react">
		<h1>React</h1>
		<h3>something about react</h3>
	  </section>
	  <section class="et-slide" id="tab-angular">
		<h1>Angular</h1>
		<h3>something about angular</h3>
	  </section>
	  <section class="et-slide" id="tab-other">
		<h1>Other</h1>
		<h3>something about other</h3>
	  </section>
	</main>



<script src="./lib/jquery-3.5.1.js"></script>

<script>

class StickyNavigation {
	
	constructor() {
		this.currentId = null;
		this.currentTab = null;
		this.tabContainerHeight = 70;
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
