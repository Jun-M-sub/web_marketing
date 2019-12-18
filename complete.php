<?php
include("header.php");
?>

<?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
        $my_id = $_POST['my_id'];
        $shop_name = $_POST['shop_name'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
        $shop_phone = $_POST['shop_phone'];
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
