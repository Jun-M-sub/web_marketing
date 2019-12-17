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
        <div class="wrap">
            <h2><i class="fas fa-map-marker-alt"></i>プラン選択</h2>
            <div class="cp_ipradio row">
                <label class="label-title col-md-6" for="d_rb1">
                    <input type="radio" name="plan" value="おまかせ" checked="checked" class="radio" onclick="entryChange1();">
                    <div class="plan-pack"><b>MEOおまかせパック<br>月額 19,800円 + 10,000円</b><span class="plan-biko1">安心！オススメ！！</span></div>
                    <p>マイビジネスの整備から開始後のメンテナンスまですべてお任せ。</p>
                </label>


                <label class="label-title col-md-6" for="d_rb2">
                    <input id="plan" type="radio" name="plan" value="ベーシック" class="radio" onclick="entryChange1();">
                    <div class="plan-pack"><b>MEOベーシックコース<br>月額 19,800円</b><span class="plan-biko">セルフ更新</span></div>
                    <p>マイビジネス情報の整備及び、毎週1回以上の記事投稿、ユーザーからの評価投稿に対してご返信をご自身で行っていただく必要があります。</p>
                </label>
            </div>
        </div>

        <!--        おまかせ-->
        <div id="firstBox">
            <form action="confirm.php" method="post" id="form1">
                <input type="hidden" value="おまかせ" name="plan">
                <div class="wrap">
                    <h2><i class="fas fa-map-marker-alt"></i>ご担当者情報</h2>
                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>
                            <tr>
                                <th>
                                    <div><span class="table-contactform7">ご担当者氏名</span></div>
                                </th>
                                <td><input type="text" name="person_name" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>ご担当者電話番号<span class="content-biko">担当する方に直接つながるお電話番号を記載ください。</span></div>
                                </th>
                                <td><input type="tel" name="person_phone" class="form-medium" placeholder="090-1234-5678" required></td>
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
                                    <div>Gmailアドレス<span class="content-biko">Gmail未登録の場合、連絡先メールアドレスでOK</span></div>
                                </th>
                                <td><input type="email" id="email_1" name="my_id" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>Gmailアドレス(確認)</div>
                                </th>
                                <td><input type="email" id="emailConfirm_1" name="my_id2" class="form-medium" placeholder="myshop@gmail.com" required oninput="CheckEmail_1(this)"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>店舗名称</div>
                                </th>
                                <td><input type="text" name="shop_name" class="form-medium" placeholder="マイビジネス美容室" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>業種</div>
                                </th>
                                <td><input type="text" name="main_cat" class="form-medium" placeholder="美容院" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>郵便番号<span class="content-biko">住所自動入力</span></div>
                                </th>
                                <td><input type="text" name="zip_code" class="form-medium" placeholder="0190505" onKeyUp="AjaxZip3.zip2addr(this,'','add','add')" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>住所<span class="content-biko">ビル名まで正確に入力
                                        </span></div>
                                </th>
                                <td><input type="text" name="add" class="form-large" placeholder="" required></td>
                            </tr>

                            
                            <tr>
                                <th>
                                    <div>電話番号</div>
                                </th>
                                <td><input type="text" name="shop_phone" class="form-medium" placeholder="" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>お店の概要など</div>
                                </th>
                                <td><textarea name="description" class="form-large text-large" maxlength="750" placeholder=""></textarea></td>
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
                                <td><input type="text" name="card_num" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>有効期限</div>
                                </th>
                                <td><select name="card_month" required>
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
                                    </select>月 / 
                                    <select name="card_year" required>
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
                                    <div>セキュリティコード</div>
                                </th>
                                <td><input type="text" name="card_code" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>カード名義</div>
                                </th>
                                <td><input type="text" name="card_name" class="form-medium" placeholder="" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-inner">
                    <input class="next-btn btn-flat-vertical-border" type="submit" value="確認">
                </div>
            </form>
        </div>

        <!--        ベーシックコース-->

        <div id="secondBox">
            <form action="basic_confirm.php" method="post" id="form2">
                <input type="hidden" value="ベーシック" name="plan">
                <div class="wrap">
                    <h2><i class="fas fa-map-marker-alt"></i>ご担当者情報</h2>

                    <table class="table table-bordered table-striped table-contactform7">
                        <tbody>
                            <tr>
                                <th>
                                    <div><span class="table-contactform7">ご担当者氏名</span></div>
                                </th>
                                <td><input type="text" name="person_name" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>ご担当者電話番号<span class="content-biko">担当する方に直接つながるお電話番号を記載ください。</span></div>
                                </th>
                                <td><input type="tel" name="person_phone" class="form-medium" placeholder="090-1234-5678" required></td>
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
                                    <div>Gmailアドレス<span class="content-biko">必ずgmailアドレスをご記載ください。</span></div>
                                </th>
                                <td><input type="email" id="email_1" name="my_id" class="form-medium" placeholder="myshop@gmail.com" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>Gmailアドレス(確認)</div>
                                </th>
                                <td><input type="email" id="emailConfirm_1" name="my_id2" class="form-medium" placeholder="myshop@gmail.com" required oninput="CheckEmail_2(this)"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>店舗名称</div>
                                </th>
                                <td><input type="text" name="shop_name" class="form-medium" placeholder="マイビジネス美容室" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>業種選択</div>
                                </th>
                                <td><select name="shop_cat" class="form-medium" required>
                                        <option value="店舗型（エステ・美容院など）">店舗型（エステ・美容院など）</option>
                                        <option value="店舗型（飲食関係）">店舗型（飲食関係）</option>
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
                                    <div>業種</div>
                                </th>
                                <td><input type="text" name="main_cat" class="form-medium" placeholder="美容院" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>郵便番号<span class="content-biko">住所自動入力</span></div>
                                </th>
                                <td><input type="text" name="zip_code" class="form-medium" placeholder="0190505" onKeyUp="AjaxZip3.zip2addr(this,'','add','add')" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>住所<span class="content-biko">必ずすべて正確に入力ください
                                        </span></div>
                                </th>
                                <td><input type="text" name="add" class="form-large" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>営業時間<br><span class="content-biko">営業曜日・定休日も明記</span></div>
                                </th>
                                <td><input type="text" name="open_time" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>電話番号<span class="content-biko">予約などに使われるお電話番号をご記載ください</span></div>
                                </th>
                                <td><input type="text" name="shop_phone" class="form-medium" placeholder="" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>店舗のサイトまたはURL<span class="content-biko">その他の店舗のサイトまたはURL（ある場合のみ）ない場合は空欄</span></div>
                                </th>
                                <td><input type="url" name="home_page" class="form-medium" placeholder="" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>その他の店舗のサイトまたはURL<span class="content-biko">その他の店舗のサイトまたはURL（ある場合のみ）ない場合は空欄</span></div>
                                </th>
                                <td><input type="url" name="home_page2" class="form-medium" placeholder=""></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>お客様のサービス提供ターゲットの最寄り駅名</div>
                                </th>
                                <td><input type="text" name="station" class="form-medium" placeholder="新宿駅" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>【複数ある場合】お客様のサービス提供ターゲットの最寄り駅名</div>
                                </th>
                                <td><input type="text" name="station" class="form-medium" placeholder="西武新宿駅"></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>お店の特徴・強み<span class="content-biko">理由と共に3つ以上記載してください</span></div>
                                </th>
                                <td><textarea name="shop_str" class="form-large text-large" placeholder="" required></textarea></td>
                            </tr>

                            <tr>
                                <th>
                                    <div>利用してほしくないキーワード<span class="content-biko">複数ある場合はカンマを入れてご入力ください</span></div>
                                </th>
                                <td><input type="text" name="ng_key" class="form-medium" placeholder="激安,ファミリー,大混雑" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <div>一番人気商品、またサービスの詳細<span class="content-biko">飲食であれば料理レシピや作り方<br>エステ・美容院などであれば施術内容や時間、施術効果を細かく魅力的に説明をしてください</span></div>
                                </th>
                                <td><textarea name="description" class="form-large text-large" maxlength="750" placeholder="※750字以内" required></textarea></td>
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
                                <td><input type="text" name="card_num" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>有効期限</div>
                                </th>
                                <td><select name="card_month" required>
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
                                    </select>月 / 
                                    <select name="card_year" required>
                                        <?php 
                                        for($i=0;$i<=7;$i++){
                                            $year = date('y') + $i;
                                        echo "<option>".$year."</option>";
                                            
                                        }?>
                                    </select>年</td>
                            </tr>


                            <tr>
                                <th>
                                    <div>セキュリティコード</div>
                                </th>
                                <td><input type="text" name="card_code" class="form-medium" placeholder="" required></td>
                            </tr>


                            <tr>
                                <th>
                                    <div>カード名義</div>
                                </th>
                                <td><input type="text" name="card_name" class="form-medium" placeholder="" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-inner">
                    <input class="next-btn btn-flat-vertical-border" type="submit" value="確認">
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
