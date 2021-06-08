<?php
include("../config/config.php");
$sql_sanpham="SELECT*FROM tb_product LIMIT 10";
$query_sanpham=pg_query($mysqli,$sql_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="../css/shop.css">
    <style>
            img.\31 23 {
            width: 80%;
            }
    </style>
</head>
    <body>
            <section>
            <?php while($row_sanpham=pg_fetch_array($query_sanpham)){ ?>
                <article>
                    <h1><?php echo $row_sanpham['PName'] ?></h1>
                    <img src="<?php echo $row_sanpham['Picture'] ?>" class="123"> 
                    <div class="price"><?php echo $row_sanpham['Price'].'$' ?></div>
                    <ul>
                    </ul>
                    <button>View product</button>
                </article>
                <?php }?>
             </section>
        </body>
        </body>
            