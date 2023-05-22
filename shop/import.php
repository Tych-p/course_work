<?php
include_once "connect.php";


//$query = "Select * From `clusters_table`";
//$res = mysqli_query($conn, $query);
//
//foreach ($res as $row)
//{
//    $arr = explode(',', $row['Clusters']);
//    for ($i = 0; $i < count($arr); $i++)
//    {
//        $arr[$i] = trim($arr[$i]);
//        $query = "UPDATE `vector_of_tokens` SET `cluster`='{$row['id']}' WHERE `id`='{$arr[$i]}'";
//        var_dump(mysqli_query($conn, $query));
////        echo $query.' ';
//    }
//    echo '<br />';
//}

//$file = fopen("products_5_0.csv", 'r');
//while (($line = fgetcsv($file, 0, ';')) !== FALSE) {
//
////    echo '<pre>';
////    print_r($line);
////    echo '</pre>';
//
//    for ($i = 2; $i < count($line); $i++)
//    {
//        $str = strstr($line[$i], ']', true);
//        $str = strstr($str, $str[1]);
//        $query = "INSERT INTO `vector_of_tokens`(`cluster`, `product`) VALUES ('0','{$str}')";
//
//        var_dump(mysqli_query($conn, $query));
//    }
//}
//fclose($file);

//$filename = __DIR__ . '/ierh_cluster.txt';
//$fh = fopen($filename, 'r');
//while (!feof($fh)) {
//    $line = fgets($fh);
//    $str = strstr($line, ']', true);
//    $str = strstr($str, $str[1]);
//    echo $str . '<br />';
//    $query = "INSERT INTO `clusters_table`(`Clusters`) VALUES ('{$str}')";
//    var_dump(mysqli_query($conn, $query));
//    echo $conn->error;
//}
//fclose($fh);

//$file = fopen("products_for_site.csv", 'r');
//while (($line = fgetcsv($file, 0, ';', '\n', 'r')) !== FALSE) {
////    echo '<pre>';
////    print_r($line);
////    echo '</pre>';
//
//    for ($i = 13; $i < count($line); $i++)
//    {
//
//        if ($i % 12 == 0)
//        {
//            $query = "INSERT INTO `company`(`url`, `name`, `product1`, `product2`, `product3`,
//                    `product4`, `product5`, `product6`, `product7`, `product8`, `product9`, `product10`)
//                    VALUES ('{$line[$i - 11]}','{$line[$i - 10]}','{$line[$i - 9]}','{$line[$i - 8]}','{$line[$i - 7]}','{$line[$i - 6]}',
//                    '{$line[$i - 5]}','{$line[$i - 4]}','{$line[$i - 3]}','{$line[$i - 2]}','{$line[$i - 1]}','{$line[$i]}')";
//            var_dump(mysqli_query($conn, $query));
//        }
//    }
//
//}
//fclose($file);

//$row = 1;
//if (($handle = fopen("products_for_site.csv", "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 0, "\r")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num полей в строке $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] . "<br />\n";
//        }
//    }
//    fclose($handle);
//}

//$filename = __DIR__ . '/tokken_similarity.txt';
//$fh = fopen($filename, 'r');
//while (!feof($fh)) {
//    $line = fgets($fh);
//    $str = explode(';', $line);
//    echo '<br />';
//    $query = "INSERT INTO `tokenizer_word` VALUES ('{$str[0]}', '{$str[1]}', '{$str[2]}')";
////    echo $query;
//    var_dump(mysqli_query($conn, $query));
//    echo $conn->error;
//}
//fclose($fh);

//$filename = __DIR__ . '/company.txt';
//$fh = fopen($filename, 'r');
//while (!feof($fh)) {
//    $line = fgets($fh);
//    $str = explode(';', $line);
//    echo '<br />';
//    $query = "INSERT INTO `company`(`url`, `name`, `product1`, `product2`, `product3`, `product4`, `product5`, `product6`, `product7`, `product8`, `product9`, `product10`)
//    VALUES ('{$str[1]}', '{$str[2]}', '{$str[3]}', '{$str[4]}', '{$str[5]}', '{$str[6]}', '{$str[7]}', '{$str[8]}', '{$str[9]}', '{$str[10]}', '{$str[11]}', '{$str[12]}')";
////    echo $query;
//    var_dump(mysqli_query($conn, $query));
//    echo $conn->error;
//}
//fclose($fh);