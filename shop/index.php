<?php
include_once "connect.php";
//$query = "Select token from `tokenizer_word` where word='женское'";
//$result = mysqli_query($conn, $query);



function get_clusters($arr, $subject)
{
    foreach ($arr as $elem) {
        if ($elem == $subject)
            return true;
    }
    return false;
}

//echo $_POST['word'];
if (isset($_POST['word'])) {
    $query = "Select token from `tokenizer_word` where word='{$_POST['word']}'";
    $result = mysqli_query($conn, $query);


    $term = mysqli_fetch_assoc($result);
    $subject = $term['token'];
//    $subject = '560';
    echo $subject . '<br />';
    $query = "Select * from `vector_of_tokens`";
    $result = mysqli_query($conn, $query);

    foreach ($result as $row) {
        $arr = explode(',', $row['product']);
        if (get_clusters($arr, $subject)) {
            $cluster = $row['cluster'];
            echo "Clusters: " . $cluster . "<br />";
            break;
        }
    }

    if (isset($cluster)) {
        $query = "Select Clusters From `clusters_table` Where `id`='{$cluster}'";
        $result = mysqli_query($conn, $query);
        foreach ($result as $row)
            echo $row['Clusters'] . '<br />';
    } else {
        echo "Sorry, your data is incorrect";
    }
}




?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
    <form name="search" method="post">
        <input type="search" name="query" placeholder="Поиск">
        <button type="submit">Найти</button>
    </form>
<!--    <div class="container">-->
<!--        <form method="post">-->
<!--            <input type="text" id="word" name="word">-->
<!--            <input type="submit" name="add" value="Найти"/>-->
<!--        </form>-->
<!--    </div>-->
<!--    <table class="table table-striped table-bordered" border="1">-->
<!--        <tr>-->
<!--            <th>Номер</th>-->
<!--            <th>id компании</th>-->
<!--            <th>Ссылка</th>-->
<!--            <th>Название компании</th>-->
<!--            <th>Товар 1</th>-->
<!--            <th>Товар 2</th>-->
<!--            <th>Товар 3</th>-->
<!--            <th>Товар 4</th>-->
<!--            <th>Товар 5</th>-->
<!--            <th>Товар 6</th>-->
<!--            <th>Товар 7</th>-->
<!--            <th>Товар 8</th>-->
<!--            <th>Товар 9</th>-->
<!--            <th>Товар 10</th>-->
<!--        </tr>-->
        <?php if (isset($cluster)) {
            $query = "Select Clusters From `clusters_table` Where `id`='{$cluster}'";
            $result = mysqli_query($conn, $query);
            $term_1 = mysqli_fetch_assoc($result);

            $arr = explode(',', $term_1['Clusters']);
            $k = 0;
            foreach ($arr as $elem) {
                $k++;
                $query = "Select * From `company` Where `id`='{$elem}'";
                $res = mysqli_query($conn, $query);
                $term = mysqli_fetch_assoc($res);

                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $k ?><!--</td>-->
<!--                    <td>--><?php //echo $term['id']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['url']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product1']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product2']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product3']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product4']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product5']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product6']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product7']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product8']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product9']; ?><!--</td>-->
<!--                    <td>--><?php //echo $term['product10']; ?><!--</td>-->
<!--                </tr>-->
            <?php }
        } ?>
<!--    </table>-->
    <?php if (isset($cluster)) {
    $query = "Select Clusters From `clusters_table` Where `id`='{$cluster}'";
    $result = mysqli_query($conn, $query);
    $term_1 = mysqli_fetch_assoc($result);

    $arr = explode(',', $term_1['Clusters']);
    $k = 0;
    foreach ($arr as $elem) {
        $k++;
        $query = "Select * From `company` Where `id`='{$elem}'";
        $res = mysqli_query($conn, $query);
        $term = mysqli_fetch_assoc($res);
        for ($i = 0; $i < 10; $i++)
        {
            $products[$i] = $term['product' . ($i + 1)];
        }
        $i = 0;
    ?>
<!--    <div class="container">-->
<!--        <div class="company_wrapper">-->
<!--            <div class="title">-->
<!--                <h2>--><?php //echo $term['name']?><!--</h2>-->
<!--            </div>-->
<!--            <div class="product_wrapper">-->
<!--                --><?php //foreach ($products as $product){ $i++;?>
<!--                <div class="card_product">-->
<!--                    <div class="product_title">--><?php //if ($product != '0'){echo $i . ':' .$product;}?><!--</div>-->
<!--                </div>-->
<!--            --><?php //}?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <?php }
    } ?>


    <?php
    if(isset($_POST['query']))
    {
        $query = trim($_POST['query']);
        #$query = mysqli_real_escape_string($query);
        #$query = htmlspecialchars($query);

        if (!empty($query))
        {
            if (strlen($query) < 3) {
                $text = '<p>Слишком короткий поисковый запрос.</p>';
                echo $text;
            } else if (strlen($query) > 128) {
                $text = '<p>Слишком длинный поисковый запрос.</p>';
                echo $text;
            } else {

                $q = "SELECT *
                  FROM `company` WHERE `product1` LIKE '%$query%'
                  OR `product2` LIKE '%$query%' OR `product3` LIKE '%$query%'
                  OR `product4` LIKE '%$query%' OR `product5` LIKE '%$query%' 
                  OR `product6` LIKE '%$query%' OR `product7` LIKE '%$query%'
                  OR `product8` LIKE '%$query%' OR `product9` LIKE '%$query%'
                  OR `product10` LIKE '%$query%'";

                $result = mysqli_query($conn, $q);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $num = mysqli_num_rows($result);

                    $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';
                    echo $text;
                    do {
                        for ($i = 1; $i < 11; $i++)
                        {
                            if ($row['product'.$i] != "0")
                            {
                                $arr_product[$i] = $row['product' . $i];
                            }

                        }
                        // Делаем запрос, получающий ссылки на статьи
                        $text = "<details>
	                            <summary>".$row['name']."</summary>
	                            
                                <details open>
	                                <summary>Контактная информация</summary>
	                                <p><span>Телефон:</span> 88002222222</p>
	                                <p><span>Электронная почта:</span> test@test.com</p>
	                                <p><span>Адрес:</span> г. Челябинск, ул. Братьев Кашириных, 129</p>
                                </details>	                           
	                            <details>
	                                <summary>Резквезиты компании</summary>
	                                <p><span>Юридическое название:</span> ООО ".$row['name']."</p>
	                                <p><span>ОГРН:</span> 1187456022050</p>
	                                <p><span>ИНН:</span> 7415100485</p>
	                                <p><span>КПП:</span> 741501001</p>
	                                <p><span>Юридический адрес:</span> 454001, Челябинская область, г. Челябинск, ул. Братьев Кашириных, д. 129 офис 447</p>
	                                <p><span>Дата регистрации:</span> 01.01.2001 </p>
                                </details> 
                                <details>
	                                <summary>Продукция</summary>
	                                <ul>
	                                    <li>".$row['product1']."</li>
	                                    <li>".$row['product2']."</li>
	                                    <li>".$row['product3']."</li>
	                                    <li>".$row['product4']."</li>
	                                    <li>".$row['product5']."</li>
	                                    <li>".$row['product6']."</li>
	                                    <li>".$row['product7']."</li>
	                                    <li>".$row['product8']."</li>
	                                    <li>".$row['product9']."</li>
	                                    <li>".$row['product10']."</li>
                                    </ul>   
                                </details>
                            </details>";

                        echo $text;
                    } while ($row = mysqli_fetch_assoc($result));
                } else {
                    $text = '<p>По вашему запросу ничего не найдено.</p>';
                    echo $text;
                }
            }
        } else {
            $text = '<p>Задан пустой поисковый запрос.</p>';
            echo $text;
        }

    }
    ?>
</body>
</html>
