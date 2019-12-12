<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="exampleのsample" name="description">
    <title>example</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- ファビコン
    <link rel="shortcut icon" href="namahage-fav2.png">
    <link rel="apple-touch-icon" href="namahage-fav2.png">
-->

    <!-- スタイルシート
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
-->

    <!-- jaquery
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
-->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


    <!--　ドラッグドロップエリア
    <script>
        window.onload = function() {
            var fileArea = document.getElementById('drag-drop-area');
            var fileInput = document.getElementById('fileInput');

            fileArea.addEventListener('dragover', function(evt) {
                evt.preventDefault();
                fileArea.classList.add('dragover');
            });

            fileArea.addEventListener('dragleave', function(evt) {
                evt.preventDefault();
                fileArea.classList.remove('dragover');
            });
            fileArea.addEventListener('drop', function(evt) {
                evt.preventDefault();
                fileArea.classList.remove('dragenter');
                var files = evt.dataTransfer.files;
                fileInput.files = files;
            });
        }

    </script>
-->
</head>

<body>

    <header>

    </header>
