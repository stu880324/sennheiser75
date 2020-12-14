<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>9_order.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>
<?php include __DIR__ . '/parts/7_fix-icon.php'; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
// var_dump($_SESSION['userAccount'])
?>

<!-- 以下刪除就可以開始編輯 -->
<div class="ctainer">

    <h2 class="welcome text-center mt-5">WELCOME BACK</h2>
    <div class="goback  text-center"><a style="color: black;" href="8_member.php">會員中心 </a> / <a style="color: black;" href="#"> 歷史訂單</a></div>

    <div class="coupon-title">歷史訂單</div>
    <table class="coupon">
        <tr>
            <td>訂單編號</td>
            <td>訂單金額</td>
            <td>日期</td>
            <td>收件人</td>
            <td>收件地址</td>
            <td>付款方式</td>
            <td></td>
        </tr>
        <!-- 模版範例用假資料 -->
        <!-- <tr>
            <td>12345678</td>
            <td>$3,000</td>
            <td>2020/11/25</td>
            <td>王小明</td>
            <td>台北市大安區</td>
            <td>信用卡</td>
            <td><a class="order-detail-btn">訂單詳細</a></td>
        </tr>
        <tr class="order-detail-tr">
            <td colspan="7">
                <div class="order-detail-div">
                    <table class="order-detail-table w-100 text-center">
                        <tr>
                            <td>商品</td>
                            <td>數量</td>
                            <td>單價</td>
                            <td>小計</td>
                        </tr>
                        <tr>
                            <td style="padding:100px 0">無線藍牙降噪耳機 HD450BT</td>
                            <td>1</td>
                            <td>TWD 3000</td>
                            <td>TWD 3000</td>
                        </tr>
                    </table>
                </div>
            </td>

        </tr> -->
    </table>
</div>
<!-- 刪到這裡 -->



<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>



<script>
    $.post('./9_order_api.php', {
        member_sid: <?= $_SESSION['userAccount']['sid'] ?>,
    }, function(data) {
        let result = JSON.parse(data);
        console.log(result);
        if (result.success) {
            console.log('response', result)
            let html = '';
            let table = document.querySelector('.coupon');
            for (let i = 0; i < result.orders.length; i++) {
                html += `
                        <tr>
                            <td>${result.orders[i].sid}</td>
                            <td>$${result.orders[i].amount}</td>
                            <td>${result.orders[i].order_date.substring(0, 9).replaceAll('-','/')}</td>
                            <td>${result.orders[i].receiver_name}</td>
                            <td>${result.orders[i].receiver_address}</td>
                            <td>${result.orders[i].pay}</td>
                            <td><a class="order-detail-btn">訂單詳細</a></td>
                        </tr>
                        `

                html += `<tr class="order-detail-tr">
            <td colspan="7" class="border-bottom-0">
                <div class="order-detail-div">
                    <table class="order-detail-table w-100 text-center">
                        <tr>
                            <td>商品</td>
                            <td>數量</td>
                            <td>單價</td>
                            <td>小計</td>
                        </tr>`;

                for (let k = 0; k < result.order_detail[i].length; k++) {
                    console.log('loop,k=', k, ' ,result:', result.order_detail[i][k]);
                    html += `<tr>
                            <td style="padding:30px 0">${result.order_detail[i][k].english_name}<br>${result.order_detail[i][k].chinese_name}</td>
                            <td>${result.order_detail[i][k].quantity}</td>
                            <td>TWD ${result.order_detail[i][k].price}</td>
                            <td>TWD ${result.order_detail[i][k].quantity * result.order_detail[i][k].price}</td>
                        </tr>`
                }
                html += `
                    </table>
                </div>
            </td>

        </tr>`
            }

            table.innerHTML += html;

            $('.order-detail-btn').on('click', function() {
                console.log('hi')
                $(this).parents('tr').next().toggleClass('active');
            })
        } else {
            $('.coupon').html('<h4 style="padding:30px 0;text-align:center;">查無歷史訂單</h4>')
        }
    });
</script>


<?php include __DIR__ . '/parts/6_html_foot.php'; ?>