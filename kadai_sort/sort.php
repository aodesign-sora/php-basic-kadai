<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
function sort_2way(string $order) {
    $nums = [15, 4, 18, 23, 10];

    // 文字列をboolに変換（大文字小文字を無視）
    $order = strtolower($order) === 'true';

    if ($order) {
        sort($nums);
    } else {
        rsort($nums);
    }

    return $nums;
}

$result_asc = sort_2way("TRUE");
$result_desc = sort_2way("FALSE");

echo "昇順にソートします。" . '<br>' . implode('<br> ', $result_asc) . '<br>' . PHP_EOL;
echo "降順にソートします。" . '<br>' . implode('<br> ', $result_desc) . '<br>' .PHP_EOL;
?>

       
    </p>
</body>

</html>