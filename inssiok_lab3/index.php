<?php
    global $db;
    require_once "templates/header.php";
?>
<div class="container mx-0">
        <h3>Систем за менаџирање со продукти</h3>
    </div>
    <div class="container mx-0">
        <?php
            $sql = "SELECT * from produkti";
            $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            if($rows>0):
        ?>
        <a href="newProduct.php" class="btn btn-outline-warning my-2">Нов продукт</a>
        <table class="table table-bordered" style="max-width: 800px">
            <thead>
                <tr>
                    <th>Назив</th>
                    <th>Опис</th>
                    <th>Цена</th>
                    <th>Акции</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row):?>
                <tr>
                    <td><?="{$row['ime']}"?></td>
                    <td><?="{$row["opis"]}"?></td>
                    <td><?="{$row['cena']} den"?></td>
                    <td>
                        <a href="/updateProduct.php?id=<?php echo $row['id']?>" class="btn btn-outline-primary">Ажурирај</a>
                        <a href="/deleteProduct.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger">
                            Избриши
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php endif?>
    </div>
<?php require_once "templates/footer.php";?>

