<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php

function sort_2way(array $nums, bool $order): array {
    if ($order) {
        sort($nums); // 昇順
    } else {
        rsort($nums); // 降順
    }
    return $nums;
}

// ソート対象の配列
$nums = [15, 4, 18, 23, 10];

// 昇順ソート
$result_asc = sort_2way($nums, true);
// 降順ソート
$result_desc = sort_2way($nums, false);

echo "昇順にソートします。<br>";
foreach ($result_asc as $num) {
    echo $num . "<br>";
}

echo "降順にソートします。<br>";
foreach ($result_desc as $num) {
    echo $num . "<br>";
}

?>

        </p>
</body>

</html>