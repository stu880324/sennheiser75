 
    <nav>
        <div class="wrapper">
          <div class="logo"><a href="#"><img src="./images/0_navbar/logo.svg" alt=""></a></div>
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">

          <ul class="nav-links"> 
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>

            <!-- 關於我們 -->

            <li>          
                <a ID="about-hover" href="#" class="desktop-item">ABOUT</a>
                <input type="checkbox" id="showMega">
                <label for="showMega" class="mobile-item">ABOUT</label>
                <div class="mega-box">
                  <div class="content"> 
                    <div class="row">
                      <header><h4>關於我們</h4>
                      <p>About us</p></header>

                    </div>
                    <div class="row " >
                      <ul class="mega-links product">
                        <li>
                          <a href="#"> 
                            <p>品牌故事</p>
                            <small> Story </small>
                               
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>銷售據點</p>
                            <small> Fine Us </small>
                        </a>
                      </li>
                        <li>
                          <a href="#"><p>人才招募</p>
                            <small> Join Us </small></a>
                        </li>
                        <li>
                          <a href="#"><p>聯絡我們</p>
                            <small> Content</small></a>
                        </li>
                      </ul>
                    </div>

                    <div class="row imgs">
                      <div class="mega-links product">
                        <img src="./images/0_navbar/about-img-2.jpg" alt="">
                        <img src="./images/0_navbar/about-img-3.png" alt="">
                      </div>           
                  
                      
                    </div>
                  
                  </div>
                </div>
              </li>

            <!-- 所有商品 -->

              <li>
                <a ID="product-hover" href="#" class="desktop-item">PRODUCT</a>
                <input type="checkbox" id="showMega-1">
                <label for="showMega-1" class="mobile-item">PRODUCT</label>
                <div class="mega-box">
                  <div class="content-product"> 
                    <div class="row">
                      <header><h4>耳機</h4>
                      <p>Our Product</p></header>

                    </div>
                    <div class="row " >
                      <!-- <header><h4>About Us</h4>
                        <p>關於我們</p></header> -->
                      <ul class="mega-links product">
                        <li>
                          <a href="#"> 
                            <p>所有商品</p>
                            <small>All Porduct</small>           
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>電競專區</p>
                            <small>Gaming</small>
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>通勤專區</p>
                            <small>Commute</small>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <p>運動專區</p>
                            <small>Sport</small>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="row " >
                      <!-- <header><h4>About Us</h4>
                        <p>關於我們</p></header> -->
                      <ul class="mega-links product">
                        <li>
                          <a href="#"> 
                            <p>錄音專區</p>
                            <small>Recording</small>              
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>會議專區</p>
                            <small>Meeting</small> 
                        </a>
                      </li>
                        <!-- <li><a href="#"></a></li>
                        <li><a href="#"></a></li> -->
                      </ul>
                    </div>
           

                  
                  </div>
                </div>
              </li>

            <!-- 預約活動 -->
            
              <li>
                <a ID="reservation-hover" href="#" class="desktop-item">RESERVATION</a>
                <input type="checkbox" id="showMega-2">
                <label for="showMega-2" class="mobile-item">RESERVATION</label>
                
              </li>

            <!-- 部落格 -->

             <li>
                <a ID="blog-hover" href="#" class="desktop-item">BLOG</a>
                <input type="checkbox" id="showMega-3">
                <label for="showMega-3" class="mobile-item">BLOG</label>
     
              </li>


             <!-- 會員專區 -->

             <li>
                <a ID="member-hover" href="#" class="desktop-item">MEMBER</a>
                <input type="checkbox" id="showMega-4">
                <label for="showMega-4" class="mobile-item">MEMBER</label>
                <div class="mega-box">
                  <div class="content-member"> 
                    <div class="row">
                      <header><h4>會員</h4>
                      <p>Member</p></header>

                    </div>
                    <div class="row " >
                      <ul class="mega-links product">
                        <li>
                          <a href="#"> 
                            <p>歷史訂單</p>
                            <small>Ordered</small>     
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>預約記錄</p>
                            <small>Reservation</small>  
                        </a>
                      </li>
                        <li>
                          <a href="#">
                            <p>常見問題</p>
                            <small>Q&A</small>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <p>登出</p>
                            <small>Log out</small>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="row imgs">
                      <div class="mega-links product">
                        <img src="./images/0_navbar/member-img-1.jpg" alt="">
                        <img src="./images/0_navbar/member-img-2.jpg" alt="">
                      </div>           
                  
                      
                    </div>
                  
                  </div>
                </div>
              </li>
          </ul>

          <!-- 漢堡選單 -->
          <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
      </nav>




<script src="./lib/jquery-3.5.1.js"></script>
<script>

//  navbar title  hover 導覽列滑鼠滑過文字更換 
//  開始
  
  $("#about-hover").on('mouseenter mouseleave' ,function(event){
     if ($(this).is(":contains('ABOUT')")){
         $(this).text("關於我們");
     }
     else{
         $(this).text("ABOUT");
     }
  });

  $("#product-hover").on('mouseenter mouseleave' ,function(event){
     if ($(this).is(":contains('PRODUCT')")){
         $(this).text("所有商品");
     }
     else{
         $(this).text("PRODUCT");
     }
  });

  $("#reservation-hover").on('mouseenter mouseleave' ,function(event){
     if ($(this).is(":contains('RESERVATION')")){
         $(this).text("預約活動");
     }
     else{
         $(this).text("RESERVATION");
     }
  });

  $("#blog-hover").on('mouseenter mouseleave' ,function(event){
     if ($(this).is(":contains('BLOG')")){
         $(this).text("專欄文章");
     }
     else{
         $(this).text("BLOG");
     }
  });

  $("#member-hover").on('mouseenter mouseleave' ,function(event){
     if ($(this).is(":contains('MEMBER')")){
         $(this).text("會員專區");
     }
     else{
         $(this).text("MEMBER");
     }
  });

  // 結束



  </script>
  