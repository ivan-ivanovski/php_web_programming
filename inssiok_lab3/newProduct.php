<?php
    //Dodavanje na nov produkt
    global $db;
    require_once "templates/header.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $imeProduct = trim($_POST['ime']);
        $opisProduct = trim($_POST['opis']);
        $cenaroduct = trim($_POST['cena']);
        if($imeProduct==="" || $opisProduct==="" || $cenaroduct===""){
            return;
        }
        else{
            $sql="INSERT INTO produkti(ime,opis,cena) VALUES(:ime,:opis,:cena)";
            $stmp=$db->prepare($sql);
            $stmp->bindParam(':ime',$imeProduct,SQLITE3_TEXT);
            $stmp->bindParam(':opis',$opisProduct,SQLITE3_TEXT);
            $stmp->bindParam(':cena',$cenaroduct, SQLITE3_INTEGER);
            if($stmp->execute()){
                header("location:index.php");
            }
            else{
                echo "Greska pri dodavanje na produkt vo tableata";
            }
        }
    }
?>
<div>
    <h1>Dodavanje na nov produkt</h1>
    <div class="mx-0" style="width: 720px;">
        <form action="" method="post">
            <label for="imeProdukt">Ime na produkt</label>
            <input type="text" id="imeProdukt" placeholder="Ime/Naziv na noviot produkt" class="form-control my-3" name="ime">
            <label for="opisProdukt">Opis</label>
            <input type="text" id="imeProdukt" placeholder="Opis na noviot produkt" class="form-control my-3" name="opis">
            <label for="cena">Cena</label>
            <input type="number" min="1" class="form-control"  id="imeProdukt" placeholder="Cena na noviot produkt my-3" name="cena">
            <input type="submit" value="Dodaj produkt" class="btn btn-warning my-2"/>
        </form>
    </div>
    <a href="index.php" class="btn btn-outline-primary">Nazad</a>
</div>
<?php require_once "templates/footer.php"; ?>