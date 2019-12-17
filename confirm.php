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
        $card_num = $_POST['card_num'];
        $card_month = $_POST['card_month'];
        $card_year = $_POST['card_year'];
        $card_code = $_POST['card_code'];
        $card_name = $_POST['card_name'];
        $my_id = $_POST['my_id'];
        $my_id2 = $_POST['my_id2'];
        $shop_name = $_POST['shop_name'];
        $shop_cat = $_POST['shop_cat'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
//        $open_time = $_POST['open_time'];
        $shop_phone = $_POST['shop_phone'];
//        $home_page = $_POST['home_page'];
        $paymend = $_POST['payment'];
        $description = $_POST['description'];
?>
<main>
    <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>MEOサービス申込内容確認</h1>
    </div>
    <div class="main-inner">
        <div class="wrap">
            <div id="firstBox">
                <div class="wrap">
                    <h2><i class="fas fa-map-marker-alt"></i>おまかせパックサービス情報</h2>
            <table class="table table-bordered table-striped table-contactform7">
                        <tbody>
                            <tr>
                                <th>
                                    <div><span class="table-contactform7">担当者氏名<span style="color:#f00;">*</span></span></div>
                                </th>
                                <td><?php print $person_name; ?></td>
                            </tr>

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
                            ?>

                <div class="btn-inner">
                    <input class="back-btn" type="button" onclick="history.back()" value="戻る">

                    <input class="next-btn" type="submit" name="submit" value="送信">
                </div>



                

    </div>
</main>
<?php
include("footer.php");
?>
