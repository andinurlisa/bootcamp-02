<?php
include 'Db.php';
$db=new Db();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-responsive">
                <tr>
                <th>Kategori</th>
                <th>Produk</th>
                </tr>
                <?php
                $conn=$db->getConn();
                $sql="SELECT categoris.name,GROUP_CONCAT(products.name) AS produk FROM products,categoris WHERE categoris.id=products.categoris_id GROUP BY categoris.id";
                $record=$conn->prepare($sql);
                $record->execute();
                while($row = $record->fetchObject())
                {
                   
                    ?>
                    <tr>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->produk;?></td>
                    </tr>
                    <?php
                }
                ?>
               
                </table>
            </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
