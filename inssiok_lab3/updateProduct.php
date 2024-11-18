<?php
    global $db;
    require_once "templates/header.php";
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM produkti WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        if($stmt->execute()){
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
        }
?>
<div class="container mx-0 my-3">
    <h1>Azuriranje na nov produkt</h1>
        <div class="mx-0" style="width: 720px;">
             <form action="updateProductForm.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>" />
                    <label for="imeProdukt">Ime na produkt</label>
                    <input type="text" id="imeProdukt" placeholder="<?=$row['ime']?>" class="form-control my-3" name="ime">
                    <label for="opisProdukt">Opis</label>
                    <input type="text" id="imeProdukt" placeholder="<?=$row['opis']?>" class="form-control my-3" name="opis">
                    <label for="cena">Cena</label>
                    <input type="number" min="1" class="form-control"  id="cena" placeholder="<?=$row['cena']?>" name="cena">
                    <input type="submit" value="Azuriraj produkt" class="btn btn-info my-2"/>
                </form>

                <a href="index.php" class="btn btn-outline-primary">Nazad</a>
    </div>
</div>
<?php }; require_once "templates/footer.php"; ?>
