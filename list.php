<?php include("header.php") ?>
<?php 
$user_name = $_SESSION['user_name'];
$pass_word = $_SESSION['pass_word'];

if($user_name == "rinsendo" && $pass_word == "rinsendo5500"){ ?>
<style>
    table,
    th,
    td {
        border-collapse: collapse;
        border: 1px solid #ccc;
        line-height: 1.5;
    }

    th {
        width: 150px;
        padding: 10px;
        font-weight: bold;
        vertical-align: top;
        background: #3f3f3f;
        color: #ffffff;
    }

    td {
        width: 350px;
        padding: 10px;
        vertical-align: top;
    }

</style>
<?php 
    $dsn = 'mysql:dbname=meoform;host=localhost';
    $user = 'root';
    $password ='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    $sql = 'SELECT * FROM `omakase_form` ORDER BY date DESC';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    ?>
<main>
    <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1 class="shosai_h1">おまかせパック申込一覧</h1>
    </div>
    <div class="main-inner">
        <table>
            <tr class="type06">
                <th>名前</th>
                <th>申込日</th>
                <th>店舗名</th>
                <th>詳細</th>
            </tr>
            <?php foreach($stmt as $me){ 
        foreach($me as $value => $key){
            $value = htmlspecialchars($key);
        } ?>
            <tr>
                <td><?php echo $me['person_name']; ?></td>
                <td><?php echo date("Y年m月d日H時i分",strtotime($me['date'])); ?></td>
                <td><?php echo $me['shop_name']; ?></td>
                <td><a href="shosai.php?id=<?php echo $me['id']; ?>">詳細</a></td>
            </tr>
            <?php } ?>

        </table>
        <div class="btn-inner"><input class="next-confirm-btn" type="button" onclick="location.href='basic_list.php'" value="ベーシック">
            <input class="back-confirm-btn" type="button" onclick="location.href='login.php'" value="ログイン">
        </div>
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
        <div class="btn-inner"><input class="back-confirm-btn" type="button" onclick="history.back()" value="戻る"></div>
    </div>
</main>
<?php } ?>
<?php include("footer.php"); ?>
