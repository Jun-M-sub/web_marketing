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
        <h1>MEOサービス申込内容確認</h1>
    </div>
    <div class="main-inner">
        <div id="firstBox">
            <div class="wrap">
                <h2><i class="fas fa-map-marker-alt"></i>ご担当者情報</h2>
                <table class="table table-bordered table-striped table-contactform7">
                    <tbody>
                        <tr>
                            <th>
                                <div><span class="table-contactform7">担当者氏名</span></div>
                            </th>
                            <td>
                                <div class="send_content">ウォルト ディズニー　様</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>ご担当者電話番号</div>
                            </th>
                            <td>
                                <div class="send_content">090-1234-5678</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="wrap">

                <h2><i class="fas fa-map-marker-alt"></i>マイビジネス情報</h2>
                <table class="table table-bordered table-striped table-contactform7">
                    <tbody>

                        <tr>
                            <th>
                                <div>Gmailアドレス</div>
                            </th>
                            <td>
                                <div class="send_content">disney@gmail.com</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>店舗名称</div>
                            </th>
                            <td>
                                <div class="send_content">マイビジネス美容室</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>業種</div>
                            </th>
                            <td>
                                <div class="send_content">美容院</div>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div>郵便番号</div>
                            </th>
                            <td>
                                <div class="send_content">010-0001</div>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div>住所</div>
                            </th>
                            <td>
                                <div class="send_content">秋田県〇〇</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>電話番号</div>
                            </th>
                            <td>
                                <div class="send_content">0182-42-5500</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>お店の概要など</div>
                            </th>
                            <td>
                                <div class="send_content">お店の概要</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="wrap">

                <h2><i class="fas fa-map-marker-alt"></i>お支払い情報</h2>

                <table class="table table-bordered table-striped table-contactform7">
                    <tbody>

                        <tr>
                            <th>
                                <div>カード番号</div>
                            </th>
                            <td>
                                <div class="send_content">123456789</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>有効期限</div>
                            </th>
                            <td>
                                <div class="send_content">12月　/　2022年</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>セキュリティコード</div>
                            </th>
                            <td>
                                <div class="send_content">123</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>カード名義</div>
                            </th>
                            <td>
                                <div class="send_content">ウォルト ディズニー</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                

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
                    <p>よろしければ「送信」ボタンを押してください。</p>
                    <input class="back-confirm-btn" type="button" onclick="history.back()" value="戻る">

                    <input class="next-confirm-btn" type="submit" name="submit" value="送信">
                </div>





            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
