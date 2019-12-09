<?php
include("header.php");
?>
<main>
    <div class="main-inner">
        <?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $content = $_POST['content'];
    $company = $_POST['company'];
    $tel = $_POST['tel'];
    $date = date("Y-m-d");
        
        
    try{
    $dsn = 'mysql:dbname=_meo_data;host=mysql011.phy.heteml.lan';
    $user = '_meo_data';
    $password ='rinsendo5500';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    $sql ='INSERT INTO test_form (name, mail, content, company, tell, date) VALUES ("'.$name.'","'.$mail.'","'.$content.'","'.$company.'","'.$tel.'","'.$date.'")';
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

 
        



        <h2>お問い合わせ完了</h2>

        <dl class="contact">

            <dt>メールアドレス</dt>
            <dd><?php print $mail ?></dd>
            <dt>お問い合わせ内容</dt>
            <dd><?php print $content ?></dd>

        </dl>
        <br>
        <div class="member"><?php print $name ?>様</div>

        <p>このたびは、お問い合わせいただきありがとうございました。</p>
        <p>お問い合わせの内容は入力していただいたメールアドレスに確認のため送信しております。</p>
        <p>確認メールが届いていない場合、メールアドレスが間違っている場合があります。メールアドレスをご確認の上、再度お問い合わせください。</p>
        <p>お問い合わせの内容につきましては、スタッフが内容確認後返信いたしますので、もうしばらくお待ちください。</p>

        <?php
$mail_sub="【sample】お問い合わせを受け付けました";
$mail_body=$name."様\n";
$mail_body.="このたびは、sampleをご利用いただき誠にありがとうございます。\n";
$mail_body.="お客様のお問い合わせを受け付けました。\n\n";
$mail_body.="お問い合わせ内容\n";
$mail_body.="会社名:".$company."\n";
$mail_body.="電話番号:".$tell."\n";
$mail_body.="『".$content."』\n\n";
$mail_body.="スタッフが内容確認後返信いたしますので、もうしばらくお待ちください。\n\n";
$mail_body.="----------------------------------\n";
$mail_body.="サービス名\n";
$mail_body.="example\n";
$mail_body.="URL https://example.jp/\n";
$mail_body.="e-mail sample@example.jp\n";
$mail_body.="電話 0120-321-123\n";
$mail_body.="受付時間 平日9:00～18:00\n";
$mail_body.="----------------------------------";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head="From: sample@example.jp";
$mail_head.="\n";
$mail_head.="Bcc: ishida@rinsendo.com";
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($mail,$mail_sub,$mail_body,$mail_head);
?>

        <div class='btn-inner'>
            <a href='index.php'>
                <div class='top-btn'>TOPへ</div>
            </a>
        </div>

    </div>
</main>
<?php
include("footer.php");
?>
