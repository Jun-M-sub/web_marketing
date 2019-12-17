<?php
include("header.php");
?>

<?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
//        $shop_cat = $_POST['shop_cat'];
//        $shop_str = $_POST['shop_str'];
//        $ng_key = $_POST['ng_key'];

        $my_id = $_POST['my_id'];
        $my_id2 = $_POST['my_id2'];
        $shop_name = $_POST['shop_name'];
//        $shop_cat = $_POST['shop_cat'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
//        $open_time = $_POST['open_time'];
        $shop_phone = $_POST['shop_phone'];
//        $home_page = $_POST['home_page'];
//        $paymend = $_POST['payment'];
        $description = $_POST['description'];
        $card_num = $_POST['card_num'];
        $card_month = $_POST['card_month'];
        $card_year = $_POST['card_year'];
        $card_code = $_POST['card_code'];
        $card_name = $_POST['card_name'];
?>
<main>
    <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>MEOサービス申込完了</h1>
    </div>
    <div class="main-inner">
        <div id="firstBox">
            <div class="wrap">
                <h2><i class="fas fa-map-marker-alt"></i>お申込みありがとうございました。</h2>
                <p class="complete_ms"><span class="complete_m">MEOおまかせパック</span>へのお申込みが完了いたしました。</p>
                <p class="thanks">ご登録のGmailアドレスにメールを送信いたしましたのでご確認をお願いします。</p>
                
                <div class="btn-inner">
                    <form action="form.php">
                    <input class="next-btn btn-flat-vertical-border" type="submit" value="top">
                        </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
