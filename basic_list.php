<?php 
    $dsn = 'mysql:dbname=meoform;host=localhost';
    $user = 'root';
    $password ='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    $sql = 'SELECT * FROM `basic_form` ORDER BY date DESC';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>店舗一覧</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
    <main>
        <div class="main-first">
            <div class="img">
                <img src="img/image823.png">
            </div>
            <h1 class="shosai_h1">ベーシックコース申込一覧</h1>
        </div>
        <div class="main-inner">
            <table>
                <tr class="type06">
                    <th>名前</th>
                    <th>申込日</th>
                    <th>店舗名</th>
                    <th>詳細</th>
                </tr>
                <?php foreach($stmt as $me){ ?>
                <tr>
                    <td><?php echo $me['person_name']; ?></td>
                    <td><?php echo date("Y年m月d日H時i分",strtotime($me['date'])); ?></td>
                    <td><?php echo $me['shop_name']; ?></td>
                    <td><a href="basic_shosai.php?id=<?php echo $me['id']; ?>">詳細</a></td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </main>
</body>

</html>
