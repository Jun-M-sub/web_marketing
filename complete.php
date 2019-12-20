<?php
include("header.php");
?>
 <?php
        $plan = $_POST['plan'];
        $person_name = $_POST['person_name'];
        $person_phone = $_POST['person_phone'];
        $my_id = $_POST['my_id'];
        $shop_name = $_POST['shop_name'];
        $main_cat = $_POST['main_cat'];
        $zip_code= $_POST['zip_code'];
        $add = $_POST['add'];
        $shop_phone = $_POST['shop_phone'];
        $description = $_POST['description'];
        $card_num = $_POST['card_num'];
        $card_month = $_POST['card_month'];
        $card_year = $_POST['card_year'];
        $card_code = $_POST['card_code'];
        $card_name = $_POST['card_name'];
        $date = date('Y-m-d G:i:s');
?>

<?php try{
    $dsn = 'mysql:dbname=meoform;host=localhost';
    $user = 'root';
    $password ='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    $sql ='INSERT INTO omakase_form (person_name, person_phone, my_id, shop_name, main_cat,zip_code, adds, shop_phone, description, card_num, card_month, card_year, card_code, card_name, date) VALUES ("'.$person_name.'","'.$person_phone.'","'.$my_id.'","'.$shop_name.'","'.$main_cat.'","'.$zip_code.'","'.$add.'","'.$shop_phone.'","'.$description.'","'.$card_num.'","'.$card_month.'","'.$card_year.'","'.$card_code.'","'.$card_name.'","'.$date.'")';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    
    $dbh =null;
    }
    catch(Exception $e){
        print "ただいま停止中<br>";
        print "エラーの理由";
        print $e->getMessage();
        exit();
    }
 ?>



<main>
    <div class="main-first">
       
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>MEOサービス申込完了</h1>
    </div>
    <div class="main-inner">
        <div id="firstBox">
            <div class="wrap">
                <h2>お申込みありがとうございました。</h2>
                <p class="complete_ms"><span class="complete_m">MEOおまかせパック</span>へのお申込みが完了いたしました。</p>
                <p class="thanks">ご登録のGmailアドレスにメールを送信いたしましたのでご確認をお願いします。</p>

                <div class="btn-inner">
                    <form action="form.php">
                        <input class="next-btn btn-flat-vertical-border" type="submit" value="top">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
 <?php
$mail_sub="【MEOおまかせパック】お申込みを受け付けました";
$mail_body=$shop_name."\n";
$mail_body=$person_name."様\n";
$mail_body.="このたびは、MEOおまかせパックにお申込みいただき誠にありがとうございます。\n";
$mail_body.="お客様のご入力いただいた情報を元にお申込みを進めさせていただきます。\n";
$mail_body.="スタッフが内容確認後、メールにて改めてご対応させていただきますので\n";
$mail_body.="ご返信をよろしくお願いいたします。\n\n\n";
$mail_body.="----------------------------------\n";
$mail_body.="e-mail meoassistant@gmail.com\n";
$mail_body.="----------------------------------";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head="From: meoassistant@gmail.com";
$mail_head.="\n";
$mail_head.="Bcc: meoassistant@gmail.com";
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($my_id,$mail_sub,$mail_body,$mail_head);
?>
<?php
include("footer.php");
?>
