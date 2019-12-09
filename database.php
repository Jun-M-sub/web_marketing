<?php
$id = $_GET['id'];
try {

    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */

    // データベースに接続
    $pdo = new PDO(
        'mysql:dbname=_wp_phototherapy;host=mysql137.heteml.jp;charset=utf8mb4',
        '_wp_phototherapy',
        'rinsendo5500',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    /* データベースから値を取ってきたり， データを挿入したりする処理 */

} catch (PDOException $e) {

    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage()); 

}

// Webブラウザにこれから表示するものがUTF-8で書かれたHTMLであることを伝える
// (これか <meta charset="utf-8"> の最低限どちらか1つがあればいい． 両方あっても良い．)
header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>個人ページ</title>
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
    <?php 
        $sql = 'SELECT *  FROM `SaveContactForm7_1` WHERE `id` = '.$id.'';
        // SQLステートメントを実行し、結果を変数に格納
        $stmt = $pdo->query($sql);
        $data = $stmt -> fetch(); 
    ?>
    <table>
        <tr>
            <th>名前</th>
            <th>電話番号</th>
            <th>住所</th>
            <th>郵便番号</th>
        </tr>
        <tr>
            <td><?php echo $data['your_name']; ?></td>
            <td><?php echo $data['your_tel']; ?></td>
            <td><?php echo $data['your_address']; ?></td>
            <td><?php echo $data['your_zip_code']; ?></td>
        </tr>


    </table>
    <div><a href="/pdf.php/?id=<?php echo $id; ?>">PDF作成</a></div>
</body>

</html>
