<?php
    require_once "../config.php";
    require_once "../templates/header.php";
    global $conn;
    if(!$_GET['expenseId']){
        echo "Expense with {$_GET['id']} does not exist with ";
    }
    $id=intval($_GET['expenseId']);
    $sql="SELECT * FROM expenses WHERE id=:id";
    $stmp=$conn->prepare($sql);
    $stmp->bindValue(":id",$id,SQLITE3_INTEGER);
    $result=$stmp->execute()->fetchArray(SQLITE3_ASSOC);
    $conn->close();
?>
<div class="container-fluid my-3">
    <h3>Edit selected expense</h3>
    <form action="../actions/edit.action.php" method="post" style="max-width: 500px;">
        <input type="hidden" value="<?=$id?>" name="id" />
        <label for="name">Expense Name</label>
        <input type="text" id="name" name="expenseName" value="<?=$result['expense_name']?>" placeholder="Update expense name" class="form-control" required />
        <label for="date">Expense Date</label>
        <input type="date" id="date" name="expenseDate" value="<?=$result['expense_createdAt']?>" placeholder="Update expense date" class="form-control" required />
        <label for="price">Expense Price</label>
        <input type="number" id="price" name="expensePrice" value="<?=$result['expense_price']?>" placeholder="Update expense price" class="form-control" required />
        <label for="type">Expense Type</label>

        <select id="type" name="type" class="form-control">
            <option value="cash" <?= $result["expense_type"] === "cash" ? "selected" : "" ?>>Cash</option>
            <option value="card" <?= $result["expense_type"] === "card" ? "selected" : "" ?>>Card</option>
        </select>
        <input type="submit" value="Edit current expense" name="addNewExpenseBtn" aria-label="addNewExpenseBtn" id="addNewExpenseBtn" class="btn btn-outline-dark rounded-0 mt-3 mb-2"/>
    </form>
    <a href="/index.php">Back to index</a>
</div>
<?php require_once "../templates/footer.php";?>
