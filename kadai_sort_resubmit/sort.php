<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array,$order) {
           if($order == "asc"){
           sort($array);
           echo "昇順にソートします。";
           echo "<br>";           
           } else if($order == "desc"){
           rsort($array);
           echo "降順にソートします。";
           echo "<br>";           
           }
          
           foreach ($array as $num) {
           echo $num;
           echo "<br>";
           }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
    
        
        sort_2way($nums,"asc");
        sort_2way($nums,"desc");
        ?>
    </p>
</body>

</html>