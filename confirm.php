<?php
include("header.php");
?>

<?php $name = $_POST['name'];
      $tel = $_POST['tel'];
      $company = $_POST['company'];
      $mail = $_POST['mail'];
      $mail2 = $_POST['mail2'];
      $content = $_POST['content'];    
?>
<main>
<div class="main-inner">
<h2>お問い合わせ</h2>
<dl class="contact">
        <dt>お名前</dt>
        <dd><?php 
            if($name == ""){
                print "<span>入力必須です。</span>";
            }elseif(mb_strlen($name) > 20){
                print "<span>お名前は20字以内で入力してください。</span>";
            }else{
                print $name;
            } ?>
        </dd>
        <dt>電話番号</dt>
        <dd><?php 
            if(!preg_match('/^[0-9]*$/',$tel)){
                print "<span>電話番号は半角数字で入力してください。</span>";
            }elseif($tel == ""){
                print "&nbsp;";
            }else{
                print $tel;
            } ?>
        </dd>
        <dt>会社名</dt>
        <dd><?php 
            if(mb_strlen($company)>20){
                print "<span>会社名は20字以内で入力してください。</span>";
            }elseif($company == ""){
                print "&nbsp;";
            }
            else{
                print $company;                
            } ?>
        </dd>
        <dt>メールアドレス</dt>
        <dd><?php 
            if($mail == "" | $mail2 == ""){
                print "<span>入力必須です。</span>";
            }elseif($mail != $mail2){
                print "<span>メールアドレスが一致しません。</span>";
            }elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$mail)){
                print "<span>有効なメールアドレスを入力してください。</span>";
            }else{
                print $mail;
            } ?>
        </dd>
        <dt>お問い合わせ内容</dt>
        <dd><?php 
            if($content == ""){
                print "<span>入力必須です。</span>";
            }elseif(mb_strlen($content)>1000){
                print "<span>お問い合わせは1000字以内で入力してください。</span>";
            }else{
                print $content;                
            } ?>
        </dd>
</dl>
<p>よろしければ「送信」ボタンを押してください。</p>

<?php
    
print '<form action="complete.php" method="post">';    
    
print'<input name="name" type="hidden" value="'.$name.'">';
print'<input name="tel" type="hidden" value="'.$tel.'">';
print'<input name="company" type="hidden" value="'.$company.'">';
print'<input name="mail" type="hidden" value="'.$mail.'">';
print'<input name="content" type="hidden" value="'.$content.'">';

if($name == "" ||$mail == "" ||$content == ""){ ?>
    <div class="btn-inner">
        <input class="back-btn" type="button" onclick="history.back()" value="戻る">
    </div>
<?php }else{ ?>
    
    <div class="btn-inner">
    <input class="back-btn" type="button" onclick="history.back()" value="戻る">
    
    <input class="next-btn" type="submit" name="submit" value="送信">
    </div>
    
<?php } ?>

</form>

</div>
</main>
<?php
include("footer.php");
?>


