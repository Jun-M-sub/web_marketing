<?php include("header.php") ?>
<?php 
$user_name = $_SESSION['user_name'];
$pass_word = $_SESSION['pass_word'];

if($user_name == "rinsendo" && $pass_word == "rinsendo5500"){ ?>
<?php
$id = $_GET['id']; 
    $dsn = 'mysql:dbname=meoform;host=localhost';
    $user = 'root';
    $password ='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    $sql ='SELECT * FROM `omakase_form` WHERE id="'.$id.'"';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <main>
        <div class="main-first">
            <div class="img">
            <img src="img/image823.png">
        </div>
            <h1 class="shosai_h1"><?php echo $rec['shop_name']; ?></h1>
        </div>
        <div class="main-inner">
            <h2>店舗情報</h2>
            <dl class="shosai row">
                <dt class="col-sm-3">店舗電話番号</dt>
                <dd class="col-sm-9"><?php echo $rec['shop_phone']; ?></dd>
                <dt class="col-sm-3">マイビジネスID</dt>
                <dd class="col-sm-9"><?php echo $rec['my_id']; ?></dd>
                <dt class="col-sm-3">サービスカテゴリー</dt>
                <dd class="col-sm-9"><?php echo $rec['main_cat']; ?></dd>
                <dt class="col-sm-3 border-none">店舗説明</dt>
                <dd class="col-sm-9 border-none"><?php echo $rec['description']; ?></dd>

            </dl>

            <dl class="shosai row">
                <dt class="col-sm-3">郵便番号</dt>
                <dd class="col-sm-9"><?php echo $rec['zip_code']; ?></dd>
                <dt class="col-sm-3 border-none">住所</dt>
                <dd class="col-sm-9 border-none"><?php echo $rec['adds']; ?></dd>
            </dl>

            <h2>担当者情報</h2>

            <dl class="shosai row">
                <dt class="col-sm-3">申込日</dt>
                <dd class="col-sm-9"><?php echo date("Y年m月d日H時i分",strtotime($rec['date'])); ?></dd>
                <dt class="col-sm-3">担当者名</dt>
                <dd class="col-sm-9"><?php echo $rec['person_name']; ?></dd>
                <dt class="col-sm-3 border-none">担当者番号</dt>
                <dd class="col-sm-9 border-none"><?php echo $rec['person_phone']; ?></dd>
            </dl>
            <h2>クレジットカード情報</h2>



            <dl class="shosai row">
                <dt class="col-sm-3">カード番号</dt>
                <dd class="col-sm-9"><?php echo $rec['card_num']; ?></dd>
                <dt class="col-sm-3">セキュリティコード</dt>
                <dd class="col-sm-9"><?php echo $rec['card_code']; ?></dd>
                <dt class="col-sm-3">有効期限</dt>
                <dd class="col-sm-9"><?php echo $rec['card_month']; ?>月/ <?php echo $rec['card_year']; ?>年</dd>
                <dt class="col-sm-3 border-none">カード名義</dt>
                <dd class="col-sm-9 border-none"><?php echo $rec['card_name']; ?></dd>
            </dl>


            <?php 
    
$dbh =null;
      
?><div class="btn-inner"><input class="back-confirm-btn" type="button" onclick="history.back()" value="戻る"></div>
        </div>
    </main>
<?php }else{?>
 <main>
         <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>アクセスエラー</h1>
    </div>
    <div class="main-inner">
        <p>不正なアクセスです。</p>
    </div>
</main>
<?php } ?>
<?php include("footer.php"); ?>
