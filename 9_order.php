<?php include __DIR__ . '/parts/1_config.php'; ?>
<?php include __DIR__ . '/parts/2_html_head.php'; ?>
<!-- 請填入各頁面CSS名稱 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>9_order.css">

<?php include __DIR__ . '/parts/2_html_head2.php'; ?>
<?php include __DIR__ . '/parts/3_navbar.php'; ?>


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
        </tr>
        <tr>
            <td>12345678</td>
            <td>$3,000</td>
            <td>2020/11/25</td>
            <td>王小明</td>
            <td>台北市大安區</td>
            <td>信用卡</td>
        </tr>
    </table>
</div>
<!-- 刪到這裡 -->





<?php include __DIR__ . '/parts/4_footer.php'; ?>
<?php include __DIR__ . '/parts/5_scripts.php'; ?>
<?php include __DIR__ . '/parts/6_html_foot.php'; ?>