<?php
include("header.php");
?>

<?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
        $my_id = $_POST['my_id'];
        $shop_name = $_POST['shop_name'];
        $shop_cat = $_POST['shop_cat'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
        $shop_phone = $_POST['shop_phone'];
        $open_time = $_POST['open_time'];
        $home_page = $_POST['home_page'];
        $home_page2 = $_POST['home_page2'];
        $station = $_POST['station'];
        $station2 = $_POST['station2'];
        $shop_str = $_POST['shop_str'];
        $ng_key = $_POST['ng_key'];
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
                <h2>お申込みありがとうございました。</h2>
                <p class="complete_ms"><span class="complete_m">ベーシックコース</span>へのお申込みが完了いたしました。</p>
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
