<?php
include("header.php");
?>
<main>
    <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>MEOサービス申込フォーム</h1>
    </div>
    <div class="main-inner">


        <form action="" method="post" id="form">


            <div class="wrap">
                <h2><i class="fas fa-map-marker-alt"></i>プラン選択</h2>
                <div class="cp_ipradio row">
                    <label class="label-title col-md-6" for="d_rb1">
                        <input type="radio" name="plan" value="おまかせ" checked = "checked" class="radio" onclick="entryChange1();">
                        <div class="plan-pack"><b>MEO対策まるごとおまかせパック<br>月額 19,800円 + 10,000円</b><span class="plan-biko1">安心！オススメ！！</span></div>
                        <p>店舗紹介の整備から日々のメンテナンスまですべてお任せ。<br>必須(<span style="color:#f00;">*</span>)以外の不明な項目は<b class="plan-info1">未入力でもOK！</b><br>ご登録後に詳しくご説明いたします。</p>
                    </label>


                    <label class="label-title col-md-6" for="d_rb2">
                        <input id="plan" type="radio" name="plan" value="ベーシック" class="radio" onclick="entryChange1();">
                        <div class="plan-pack"><b>MEO対策ベーシックコース<br>月額 19,800円</b><span class="plan-biko">セルフ更新</span></div>
                        <p>マイビジネス情報の整備及び週1回以上の記事投稿・ユーザー評価への返信をご自身で行っていただく必要があります。<br>また、以下の<b class="plan-info2">すべての項目を正しく入力</b>する必要があります。</p>
                    </label>

                </div>
            </div>
            <div id="firstBox">
                <div class="wrap">
                    <h2><i class="fas fa-map-marker-alt"></i>おまかせパックサービス情報</h2>

                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>
                            <tr>
                                <th>
                                    <div><span class="table-contactform7">担当者氏名<span style="color:#f00;">*</span></span></div>
                                </th>
                                <td><input type="text" name="person_name" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>担当者電話<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="tel" name="person_phone" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>業種</div>
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

                            <!--
                            <tr>
                                <th>
                                    <div>お店の特徴・強み<span class="bikou"><br>(理由と共に３つ以上)</span></div>
                                </th>
                                <td><textarea name="shop_str" class="form-large text-large" placeholder=""></textarea></td>
                            </tr>
-->

                            <!--
                            <tr>
                                <th>
                                    <div>利用してほしくないキーワード</div>
                                </th>
                                <td><input type="text" name="ng_key" class="form-medium" placeholder="激安,ファミリー,大混雑"></td>
                            </tr>
-->
                        </tbody>
                    </table>
                </div>
                <div class="wrap">

                    <h2><i class="fas fa-map-marker-alt"></i>決済情報</h2>

                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>

                            <tr>
                                <th>
                                    <div>カード番号<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_num" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>有効期限<span style="color:#f00;">*</span></div>
                                </th>
                                <td><select name="card_month">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>月
                                    <select name="card_year">
                                        <?php 
                                        for($i=0;$i<=7;$i++){
                                            $year = date('y') + $i;
                                        echo "<option>".$year."</option>";
                                            
                                        }?>
                                    </select>年
                                </td>
                            </tr>


                            <tr>
                                <th>
                                    <div>セキュリティコード<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_code" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>カード名義<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_name" class="form-medium" placeholder="" required></td>
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
                                    <div>マイビジネスID<span style="color:#f00;">*</span><span class="content-biko">マイビジネス未登録の場合、連絡先メールアドレスでもOK</span></div>
                                </th>
                                <td><input type="email" name="my_id" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>マイビジネスID(確認)<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="email" name="my_id2" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>店舗名称</div>
                                </th>
                                <td><input type="text" name="shop_name" class="form-medium" placeholder="マイビジネス美容室"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>業種</div>
                                </th>
                                <td><input type="text" name="main_cat" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>郵便番号<span class="content-biko">住所自動入力</span></div>
                                </th>
                                <td><input type="text" name="zip_code" class="form-medium" placeholder="0190505" onKeyUp="AjaxZip3.zip2addr(this,'','add','add')"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>住所<span class="content-biko">ビル名まで正確に入力
                                        </span></div>
                                </th>
                                <td><input type="text" name="add" class="form-large" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>営業時間<br><span class="content-biko">営業曜日・定休日も明記</span></div>
                                </th>
                                <td><input type="text" name="open_time" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>電話番号</div>
                                </th>
                                <td><input type="text" name="shop_phone" class="form-medium" placeholder=""></td>
                            </tr>

                            <!--
                            <tr>
                                <th>
                                    <div>ホームページURL</div>
                                </th>
                                <td><input type="url" name="home_page" class="form-medium" placeholder=""></td>
                            </tr>
-->

                            <tr>
                                <th>
                                    <div>お支払い方法</div>
                                </th>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <p><input type="checkbox" name="payment" value="ＮＦＣモバイル決済">ＮＦＣモバイル決済</p>
                                            <p><input type="checkbox" name="payment" value="Dinners Club">Dinners Club</p>
                                            <p><input type="checkbox" name="payment" value="JCB">JCB</p>
                                            <p><input type="checkbox" name="payment" value="VISA">VISA</p>
                                            <p><input type="checkbox" name="payment" value="デビットカード可">デビットカード可</p>
                                            <p><input type="checkbox" name="payment" value="現金のみ">現金のみ</p>

                                        </div>
                                        <div class="col-6">
                                            <p><input type="checkbox" name="payment" value="American Express">American Express</p>
                                            <p><input type="checkbox" name="payment" value="Discover">Discover</p>
                                            <p><input type="checkbox" name="payment" value="Mastercard">Mastercard</p>
                                            <p><input type="checkbox" name="payment" value="中国銀聯">中国銀聯</p>
                                            <p><input type="checkbox" name="payment" value="小切手可">小切手可</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div>ビジネスの説明</div>
                                </th>
                                <td><textarea name="description" class="form-large text-large" maxlength="750" placeholder="※750字以内"></textarea></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div id="secondBox">
                <div class="wrap">
                    <h2><i class="fas fa-map-marker-alt"></i>ベーシックコースサービス情報</h2>

                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>
                            <tr>
                                <th>
                                    <div><span class="table-contactform7">担当者氏名<span style="color:#f00;">*</span></span></div>
                                </th>
                                <td><input type="text" name="person_name" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>担当者電話<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="tel" name="person_phone" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>業種</div>
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
                                    <div>お店の特徴・強み<span class="bikou"><br>(理由と共に３つ以上)</span></div>
                                </th>
                                <td><textarea name="shop_str" class="form-large text-large" placeholder=""></textarea></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>利用してほしくないキーワード</div>
                                </th>
                                <td><input type="text" name="ng_key" class="form-medium" placeholder="激安,ファミリー,大混雑"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wrap">

                    <h2><i class="fas fa-map-marker-alt"></i>決済情報</h2>

                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>

                            <tr>
                                <th>
                                    <div>カード番号<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_num" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>有効期限<span style="color:#f00;">*</span></div>
                                </th>
                                <td><select name="card_month">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>月
                                    <select name="card_year">
                                        <?php 
                                        for($i=0;$i<=7;$i++){
                                            $year = date('y') + $i;
                                        echo "<option>".$year."</option>";
                                            
                                        }?>
                                    </select>年</td>
                            </tr>


                            <tr>
                                <th>
                                    <div>セキュリティコード<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_code" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>カード名義<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="text" name="card_name" class="form-medium" placeholder="" required></td>
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
                                    <div>マイビジネスID<span style="color:#f00;">*</span><span class="content-biko">おまかせプランの方は連絡先メールアドレスでもOK</span></div>
                                </th>
                                <td><input type="email" name="my_id" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>マイビジネスID(確認)<span style="color:#f00;">*</span></div>
                                </th>
                                <td><input type="email" name="my_id2" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>店舗名称</div>
                                </th>
                                <td><input type="text" name="shop_name" class="form-medium" placeholder="マイビジネス美容室"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>業種</div>
                                </th>
                                <td><input type="text" name="main_cat" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>郵便番号<span class="content-biko">住所自動入力</span></div>
                                </th>
                                <td><input type="text" name="zip_code" class="form-medium" placeholder="0190505" onKeyUp="AjaxZip3.zip2addr(this,'','add','add')"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>住所<span class="content-biko">ビル名まで正確に入力
                                        </span></div>
                                </th>
                                <td><input type="text" name="add" class="form-large" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>営業時間<br><span class="content-biko">営業曜日・定休日も明記</span></div>
                                </th>
                                <td><input type="text" name="open_time" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>電話番号</div>
                                </th>
                                <td><input type="text" name="shop_phone" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>ホームページURL</div>
                                </th>
                                <td><input type="url" name="home_page" class="form-medium" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>お支払い方法</div>
                                </th>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <p><input type="checkbox" name="payment" value="ＮＦＣモバイル決済">ＮＦＣモバイル決済</p>
                                            <p><input type="checkbox" name="payment" value="Dinners Club">Dinners Club</p>
                                            <p><input type="checkbox" name="payment" value="JCB">JCB</p>
                                            <p><input type="checkbox" name="payment" value="VISA">VISA</p>
                                            <p><input type="checkbox" name="payment" value="デビットカード可">デビットカード可</p>
                                            <p><input type="checkbox" name="payment" value="現金のみ">現金のみ</p>

                                        </div>
                                        <div class="col-6">
                                            <p><input type="checkbox" name="payment" value="American Express">American Express</p>
                                            <p><input type="checkbox" name="payment" value="Discover">Discover</p>
                                            <p><input type="checkbox" name="payment" value="Mastercard">Mastercard</p>
                                            <p><input type="checkbox" name="payment" value="中国銀聯">中国銀聯</p>
                                            <p><input type="checkbox" name="payment" value="小切手可">小切手可</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div>ビジネスの説明</div>
                                </th>
                                <td><textarea name="description" class="form-large text-large" maxlength="750" placeholder="※750字以内"></textarea></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="btn-inner">
                <input class="next-btn btn-flat-vertical-border" type="submit" value="確認">
            </div>
        </form>
    </div>
</main>
<?php
include("footer.php");
?>
