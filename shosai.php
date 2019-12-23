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

    <table>
        <tr>
            <th>申込日</th>
            <th>名前</th>
            <th>電話番号</th>
        </tr>
        <tr>
            <td><?php echo date("Y年m月d日H時i分",strtotime($rec['date'])); ?></td>
            <td><?php echo $rec['person_name']; ?></td>
            <td><?php echo $rec['person_phone']; ?></td>
            
        </tr>
    </table>
    <table>
        <tr>
             <th>店舗名前</th>
            <th>店舗電話番号</th>
            <th>マイビジネスID</th>
            <th>サービスカテゴリー</th>
            <th>郵便番号</th>
            <th>住所</th>
        </tr>
        <tr>
            <td><?php echo $rec['shop_name']; ?></td>
            <td><?php echo $rec['shop_phone']; ?></td>
            <td><?php echo $rec['my_id']; ?></td>
            <td><?php echo $rec['main_cat']; ?></td>
            <td><?php echo $rec['zip_code']; ?></td>
            <td><?php echo $rec['adds']; ?></td>
        </tr>
    </table>
    <div>
    <div>店舗説明</div>
    <div><?php echo $rec['description']; ?></div>
        </div>
    <table>
        <tr>
            <th>カード番号</th>
            <th>セキュリティコード</th>
            <th>有効期限</th>
            <th>カード名義</th>
        </tr>
        <tr>
            <td><?php echo $rec['card_num']; ?></td>
            <td><?php echo $rec['card_code']; ?></td>
            <td><?php echo $rec['card_month']; ?>月/ <?php echo $rec['card_year']; ?>年</td>
            <td><?php echo $rec['card_name']; ?></td>
        </tr>
    </table>
    <?php 
    
$dbh =null;
      
?>



</body>

</html>
