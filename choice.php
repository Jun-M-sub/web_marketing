<?php
include("header.php");
?>

<?php 
if(($_POST['user_name'] == "rinsendo") && ($_POST['pass'] == "rinsendo5500")){ ?>

<main>
    <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>契約者リスト</h1>
    </div>
    <div class="main-inner">
        <h2><a href="list.php">おまかせパック</a></h2>
        <h2> <a href="basic_list.php">ベーシックコース</a></h2>
    </div>
</main>

<?php 
}else{ ?>
    <main>
         <div class="main-first">
        <div class="img">
            <img src="img/image823.png">
        </div>
        <h1>ログインエラー</h1>
    </div>
    <div class="main-inner">
        ログインできませんでした。
    </div>
</main>
<?php } ?>
<?php
include("footer.php");
?>
