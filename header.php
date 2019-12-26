<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="MEOサービス申込" name="description">
    <title>MEO申込フォーム</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<!--     ファビコン-->
    <link rel="shortcut icon" href="favicon.ico">


    <!-- スタイルシート
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
-->

    <!-- jaquery
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
-->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


    <script>
        //ドラッグドロップエリア
        //        window.onload = function() {
        //            var fileArea = document.getElementById('drag-drop-area');
        //            var fileInput = document.getElementById('fileInput');
        //
        //            fileArea.addEventListener('dragover', function(evt) {
        //                evt.preventDefault();
        //                fileArea.classList.add('dragover');
        //            });
        //
        //            fileArea.addEventListener('dragleave', function(evt) {
        //                evt.preventDefault();
        //                fileArea.classList.remove('dragover');
        //            });
        //            fileArea.addEventListener('drop', function(evt) {
        //                evt.preventDefault();
        //                fileArea.classList.remove('dragenter');
        //                var files = evt.dataTransfer.files;
        //                fileInput.files = files;
        //            });
        //        }

        var element = document.getElementById("form");

        if (element.checked) {
            // チェックされている
        } else {
            // チェックされていない
        }

        function entryChange1() {
            radio = document.getElementsByName('plan')
            if (radio[0].checked) {
                //フォーム
                document.getElementById('firstBox').style.display = "";
                document.getElementById('secondBox').style.display = "none";
                //特典
                document.getElementById('firstNotice').style.display = "";
            } else if (radio[1].checked) {
                //フォーム
                document.getElementById('firstBox').style.display = "none";
                document.getElementById('secondBox').style.display = "";
                //特典
                document.getElementById('firstNotice').style.display = "none";
            }
        }

        <!--
        function CheckEmail_1(input) {
            //IE対応の為変更
            //var mail = email_2.value; //メールフォームの値を取得
            var mail = document.getElementById("email_1").value; //メールフォームの値を取得
            var mailConfirm = input.value; //メール確認用フォームの値を取得(引数input)

            // パスワードの一致確認
            if (mail != mailConfirm) {
                input.setCustomValidity('メールアドレスが一致しません'); // エラーメッセージのセット
            } else {
                input.setCustomValidity(''); // エラーメッセージのクリア
            }
        }
        // -->
        <!--
        function CheckEmail_2(input) {
            //IE対応の為変更
            //var mail = email_2.value; //メールフォームの値を取得
            var mail = document.getElementById("email_2").value; //メールフォームの値を取得
            var mailConfirm = input.value; //メール確認用フォームの値を取得(引数input)

            // パスワードの一致確認
            if (mail != mailConfirm) {
                input.setCustomValidity('メールアドレスが一致しません'); // エラーメッセージのセット
            } else {
                input.setCustomValidity(''); // エラーメッセージのクリア
            }
        }
        // -->
        
    </script>
</head>

<body onload="entryChange1()">

    <header>

    </header>
