<?php
include("header.php");
?>

<?php
        $plan = htmlspecialchars($_POST['plan']);
        $person_name = htmlspecialchars($_POST['person_name']);
        $person_phone = htmlspecialchars($_POST['person_phone']);
        $my_id = htmlspecialchars($_POST['my_id']);
        $shop_name = htmlspecialchars($_POST['shop_name']);
        $main_cat = htmlspecialchars($_POST['main_cat']);
        $zip_code= htmlspecialchars($_POST['zip_code']);
        $add = htmlspecialchars($_POST['add']);
        $shop_phone = htmlspecialchars($_POST['shop_phone']);
        $description = htmlspecialchars($_POST['description']);
        $card_num = htmlspecialchars($_POST['card_num']);
        $card_month = htmlspecialchars($_POST['card_month']);
        $card_year = htmlspecialchars($_POST['card_year']);
        $card_code = htmlspecialchars($_POST['card_code']);
        $card_name = htmlspecialchars($_POST['card_name']);
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
                <h2><i class="fas fa-map-marker-alt"></i>プラン</h2>
                <div class="cp_ipradio row">

                    <div class="plan-pack"><b>→MEOおまかせパック</b></div>
                </div>
            </div>

            <div class="wrap">
                <h2><i class="fas fa-map-marker-alt"></i>ご担当者情報</h2>
                <table class="table table-bordered table-striped table-contactform7">
                    <tbody>
                        <tr>
                            <th>
                                <div><span class="table-contactform7">ご担当者氏名</span></div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $person_name; ?>　様</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>ご担当者電話番号</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $person_phone; ?></div>
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
                                <div class="send_content"><?php print $my_id; ?></div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>店舗名称</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $shop_name; ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>業種</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $main_cat; ?></div>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div>郵便番号</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $zip_code; ?></div>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div>住所</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $add; ?></div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>電話番号</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $shop_phone; ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>お店の概要など</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $description; ?></div>
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
                                <div class="send_content"><?php print $card_num; ?></div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>有効期限</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $card_month; ?>月　/　<?php print $card_year; ?>年</div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>セキュリティコード</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $card_code; ?></div>
                            </td>
                        </tr>


                        <tr>
                            <th>
                                <div>カード名義</div>
                            </th>
                            <td>
                                <div class="send_content"><?php print $card_name; ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="complete.php" method="post">

                    <?php
print'<input name="plan" type="hidden" value="'.$plan.'">';
print'<input name="person_name" type="hidden" value="'.$person_name.'">';
print'<input name="person_phone" type="hidden" value="'.$person_phone.'">';
print'<input name="my_id" type="hidden" value="'.$my_id.'">';
print'<input name="shop_name" type="hidden" value="'.$shop_name.'">';
print'<input name="main_cat" type="hidden" value="'.$main_cat.'">';
print'<input name="zip_code" type="hidden" value="'.$zip_code.'">';
print'<input name="add" type="hidden" value="'.$add.'">';
print'<input name="shop_phone" type="hidden" value="'.$shop_phone.'">';
print'<input name="description" type="hidden" value="'.$description.'">';
print'<input name="card_num" type="hidden" value="'.$card_num.'">';
print'<input name="card_month" type="hidden" value="'.$card_month.'">';
print'<input name="card_year" type="hidden" value="'.$card_year.'">';
print'<input name="card_code" type="hidden" value="'.$card_code.'">';
print'<input name="card_name" type="hidden" value="'.$card_name.'">';

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
