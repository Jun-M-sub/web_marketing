<?php
include("header.php");
?>

<?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
        $ng_key = $_POST['ng_key'];
        $my_id = $_POST['my_id'];
        $my_id2 = $_POST['my_id2'];
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
                                <div><span class="table-contactform7">ご担当者氏名</span></div>
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
                                <div>業種選択</div>
                            </th>
                            <td>
                                <div class="send_content">店舗型（飲食関係）</div>
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
                                <div>営業時間</div>
                            </th>
                            <td>
                                <div class="send_content">12：00～22：00</div>
                            </td>
                        </tr>
                         <tr>
                            <th>
                                <div>店舗のサイトまたはURL</div>
                            </th>
                            <td>
                                <div class="send_content">http://photo-therapy.jp</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>その他の店舗のサイトまたはURL</div>
                            </th>
                            <td>
                                <div class="send_content">http://photo-therapy.jp</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>お客様のサービス提供ターゲットの最寄り駅名</div>
                            </th>
                            <td>
                                <div class="send_content">新宿駅</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>【複数ある場合】お客様のサービス提供ターゲットの最寄り駅名</div>
                            </th>
                            <td>
                                <div class="send_content">新宿駅</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>お店の特徴・強み</div>
                            </th>
                            <td>
                                <div class="send_content">理由と共に3つ</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>利用してほしくないキーワード</div>
                            </th>
                            <td>
                                <div class="send_content">激安,ファミリー,大混雑</div>
                            </td>
                        </tr>
                        <tr>
                        <th>
                            <div>一番人気商品、またサービスの詳細</div>
                        </th>
                        <td>
                            <div class="send_content">エステ・美容院などであれば施術内容や時間、施術効果を細かく魅力的に説明をしてください</div>
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

<form action="basic_complete.php" method="post">
                <?php   
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



                </form>

            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
