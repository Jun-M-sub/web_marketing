<?php
include("header.php");
?>

<?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
        $shop_cat = $_POST['shop_cat'];
        $shop_str = $_POST['shop_str'];
        $ng_key = $_POST['ng_key'];
        $card_num = $_POST['card_num'];
        $card_time = $_POST['card_time'];
        $card_code = $_POST['card_code'];
        $card_name = $_POST['card_name'];
        $my_id = $_POST['my_id'];
        $my_id2 = $_POST['my_id2'];
        $shop_name = $_POST['shop_name'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
        $open_time = $_POST['open_time'];
        $shop_phone = $_POST['shop_phone'];
        $home_page = $_POST['home_page'];
        $paymend = $_POST['payment'];
        $description = $_POST['description'];
 || ($person_phone == "") || ($shop_cat == "") || ($shop_str == "") || ($shop_str == "")
?>
<main>
    <div class="main-inner">
        <h2>申込内容確認</h2>
        <dl class="contact">
            <dt>プラン</dt>
            <dd><?php print $plan; ?></dd>
            <dd><?php 
            
        <p>よろしければ「送信」ボタンを押してください。</p>

        <?php
    
                print '<form action="complete.php" method="post">';    

                print'<input name="plan" type="hidden" value="'.$plan.'">';
                print'<input name="person_name" type="hidden" value="'.$person_name.'">';
                print'<input name="person_phone" type="hidden" value="'.$person_phone.'">';
                print'<input name="shop_cat" type="hidden" value="'.$shop_cat.'">';
                print'<input name="shop_str" type="hidden" value="'.$shop_str.'">';
                print'<input name="ng_key" type="hidden" value="'.$ng_key.'">';
                print'<input name="card_num" type="hidden" value="'.$card_num.'">';
                print'<input name="card_time" type="hidden" value="'.$card_time.'">';
                print'<input name="card_code" type="hidden" value="'.$card_code.'">';
                print'<input name="card_name" type="hidden" value="'.$card_name.'">';
                print'<input name="my_id" type="hidden" value="'.$my_id.'">';
                print'<input name="shop_name" type="hidden" value="'.$shop_name.'">';
                print'<input name="main_cat" type="hidden" value="'.$main_cat.'">';
                print'<input name="zip_code" type="hidden" value="'.$zip_code.'">';
                print'<input name="add" type="hidden" value="'.$add.'">';
                print'<input name="open_time" type="hidden" value="'.$open_time.'">';
                print'<input name="shop_phone" type="hidden" value="'.$shop_phone.'">';
                print'<input name="home_page" type="hidden" value="'.$home_page.'">';
                print'<input name="payment" type="hidden" value="'.$payment.'">';

if($name == "" ||$mail == "" ||$content == ""){ ?>
                <div class="btn-inner">
                    <input class="back-btn" type="button" onclick="history.back()" value="戻る">
                </div>
                <?php }else{ ?>

                <div class="btn-inner">
                    <input class="back-btn" type="button" onclick="history.back()" value="戻る">

                    <input class="next-btn" type="submit" name="submit" value="送信">
                </div>

                <?php } ?>

                </form>

    </div>
</main>
<?php
include("footer.php");
?>
