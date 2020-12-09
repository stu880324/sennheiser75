<style>
    .fix-icon{
        position: fixed;
        right: 20px;
        bottom: 100px;
        z-index: 99;
    }
    .cart-fix-icon{
        border-radius: 10px;
        background-color: #000000;
        width: 60px;
        height: 60px;
        text-align: center;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        position: relative;
    }
    .fa-shopping-cart{
        color:  #d9a26e;
        font-size: 24px;
        line-height: 60px;
    }
    .badge{
        background-color: rgba(217, 0, 0, 0.8);
        position: absolute;
        width: 30px;
        height: 30px;
        line-height: 30px;
        left: -8px;
        top:-8px;
    }
    .top-fix-icon{
        border-radius: 10px;
        background-color: #000000;
        width: 60px;
        height: 60px;
        text-align: center;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    }
    .fa-arrow-up{
        color:#FFFFFF;
        font-size: 24px;
        line-height: 60px;
    }
    
</style>

<!-- 開始HTML -->
<div class="fix-icon">
    <!-- 購物車 -->
    <div class="cart-fix-icon">
        <a href="5_cart1.php">
            <span class="badge count-badge badge-pill badge-danger">0</span>
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
    <!-- 返回頂端 -->
    <div class="top-fix-icon mt-3"><i class="fas fa-arrow-up"></i></div>

</div>


<!-- 顯示購物車數量功能 -->
<script>
    const count_badge = $('.count-badge');

    function countCart(cart){
        let count = 0;
        for(let i in cart){
            count += cart[i].quantity * 1;
        }
        count_badge.html(count);
    }

    $.get('5_addToCart-API.php', function(data){
        console.log(data);
        countCart(data.cart);
    }, 'json');
</script>

<!-- 回到頂端功能 -->
<script>
    $(function(){
        let $gotop = $(".top-fix-icon")

        // $(window).scroll(function(){
        //     if($(window).scrollTop()>600){
        //         $gotop.show();
        //     }else{
        //         $gotop.hide();
        //     }
        // });

        $gotop.click(function(){
            $('html, body').animate({scrollTop:0},200)
        });
    });
</script>