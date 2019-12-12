<?php
include("header.php");
?>
<main>
    <div class="main-inner">
        <h1>MEOサービス申込フォーム</h1>
        <form action="" method="post">
            <h2>プラン選択</h2>
            <div class="planning">
                <div><input type="radio" name="plan" value="おまかせ" checked>MEO対策まるごとおまかせパック(19,800円 + 10,000円)<span class="osusume">←オススメ</span>
                    <p>※店舗紹介の整備から日々のメンテナンスまですべてお任せ。</p>
                </div>
                <div><input type="radio" name="plan" value="ベーシック">MEO対策ベーシックコース(19,800円)
                    <p>※マイビジネス情報の整備及び週1回以上の記事投稿・ユーザー評価への返信をご自身で行っていただく必要があります。</p>
                </div>
            </div>


            <h2>MEOサービス情報</h2>

            <table class="table table-bordered table-striped table-contactform7">
                <tbody>
                    <tr>
                        <th>
                            <div><span class="table-contactform7">担当者氏名</span></div>
                        </th>
                        <td><input type="text" name="person_name" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>担当者電話:</div>
                        </th>
                        <td><input type="text" name="person_phone" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>業種:</div>
                        </th>
                        <td><select name="shop_cat" class="form-medium">
                                <option value="店舗型（エステ・美容院など）">店舗型（エステ・美容院など）</option>
                                <option value="店舗型（エステ・美容院など）">店舗型（飲食関係）</option>
                                <option value="店舗型（病院など）">店舗型（病院など）</option>
                                <option value="店舗型（風俗関係）">店舗型（風俗関係）</option>
                                <option value="店舗型（行政関係）">店舗型（行政関係）</option>
                                <option value="店舗型（その他）">店舗型（その他）</option>
                                <option value="無店舗型（出張サービス）">無店舗型（出張サービス）</option>
                                <option value="無店舗型（移動販売）">無店舗型（移動販売）</option>
                                <option value="その他">その他</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <div>お店の特徴・強み<span class="bikou">(理由と共に３つ以上)</span>:</div>
                        </th>
                        <td><textarea name="shop_str" class="form-large" placeholder=""></textarea></td>
                    </tr>

                    <tr>
                        <th>
                            <div>利用してほしくないキーワード:</div>
                        </th>
                        <td><input type="text" name="ng_key" class="form-medium" placeholder="激安,ファミリー,大混雑"></td>
                    </tr>
                </tbody>
            </table>



            <h2>決済情報</h2>

            <table class="table table-bordered table-striped table-contactform7">
                <tbody>

                    <tr>
                        <th>
                            <div>カード番号:</div>
                        </th>
                        <td><input type="text" name="card_num" class="form-medium" placeholder=""></td>
                    </tr>


                    <tr>
                        <th>
                            <div>有効期限:</div>
                        </th>
                        <td><input type="text" name="card_time" class="form-medium" placeholder=""></td>
                    </tr>


                    <tr>
                        <th>
                            <div>セキュリティコード:</div>
                        </th>
                        <td><input type="text" name="card_code" class="form-medium" placeholder=""></td>
                    </tr>


                    <tr>
                        <th>
                            <div>カード名義:</div>
                        </th>
                        <td><input type="text" name="card_name" class="form-medium" placeholder=""></td>
                    </tr>
                </tbody>
            </table>


            <h2>マイビジネス情報</h2>
            <table class="table table-bordered table-striped table-contactform7">
                <tbody>

                    <tr>
                        <th>
                            <div>マイビジネスID:</div>
                        </th>
                        <td><input type="text" name="my_id" class="form-medium" placeholder="myshop@gmail.com"></td>
                    </tr>

                    <tr>
                        <th>
                            <div>マイビジネスID(確認):</div>
                        </th>
                        <td><input type="text" name="my_id2" class="form-medium" placeholder="myshop@gmail.com"></td>
                    </tr>

                    <tr>
                        <th>
                            <div>店舗名称:</div>
                        </th>
                        <td><input type="text" name="shop_name" class="form-medium" placeholder="マイビジネス美容室"></td>
                    </tr>

                    <tr>
                        <th>
                            <div>業種:</div>
                        </th>
                        <td><input type="text" name="main_cat" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>郵便番号:</div>
                        </th>
                        <td><input type="text" name="zip_code" class="form-medium" placeholder="0190505" onKeyUp="AjaxZip3.zip2addr(this,'','add','add')"></td>
                    </tr>

                    <tr>
                        <th>
                            <div>住所<span class="bikou">ビル名まで正確に入力
                                </span>:</div>
                        </th>
                        <td><input type="text" name="add" class="form-large" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>営業時間<span class="bikou">(営業曜日・定休日も明記)</span>:</div>
                        </th>
                        <td><input type="text" name="open_time" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>電話番号:</div>
                        </th>
                        <td><input type="text" name="shop_phone" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>ホームページURL:</div>
                        </th>
                        <td><input type="text" name="home_page" class="form-medium" placeholder=""></td>
                    </tr>

                    <tr>
                        <th>
                            <div>お支払い手段:</div>
                        </th>
                        <td>
                            <input type="checkbox" name="payment" value="ＮＦＣモバイル決済">ＮＦＣモバイル決済
                            <input type="checkbox" name="payment" value="American Express">American Express
                            <input type="checkbox" name="payment" value="Dinners Club">Dinners Club
                            <input type="checkbox" name="payment" value="Discover">Discover
                            <input type="checkbox" name="payment" value="JCB">JCB
                            <input type="checkbox" name="payment" value="Mastercard">Mastercard
                            <input type="checkbox" name="payment" value="VISA">VISA
                            <input type="checkbox" name="payment" value="中国銀聯">中国銀聯
                            <input type="checkbox" name="payment" value="デビットカード可">デビットカード可
                            <input type="checkbox" name="payment" value="小切手可">小切手可
                            <input type="checkbox" name="payment" value="現金のみ">現金のみ
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <div>ビジネスの説明:</div>
                        </th>
                        <td><textarea name="description" class="form-large" maxlength="750" placeholder="※750字以内"></textarea></td>
                    </tr>


                </tbody>
            </table>
            <div class="btn-inner">
                <input class="next-btn" type="submit" value="確認">
            </div>
        </form>
    </div>
</main>
<?php
include("footer.php");
?>
