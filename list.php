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


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Example</title>
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

    <table class="">
        <tr class="type06">
            <th>名前</th>
            <th>申込日</th>
            <th>店舗名</th>
            <th>詳細</th>
        </tr>
        <?php foreach($stmt as $me){ ?>
        <tr>
            <td><?php echo $me['person_name']; ?></td>
            <td><?php echo date("Y年m月d日H時i分",strtotime($me['date']));; ?></td>
            <td><?php echo $me['shop_name']; ?></td>
            <td><a href="shosai.php?id=<?php echo $me['id']; ?>">詳細</a></td>
        </tr>
        <?php } ?>

    </table>

</body>

</html>
