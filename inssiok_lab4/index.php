<?php
    require_once "config.php";
    include "templates/header.php";
    global $conn;
    $qry = "SELECT * FROM expenses";
    $stmp=$conn->prepare($qry);
    $expenses=$stmp->execute();

?>
<div class="container-fluid">
    <h2>PHP web system for managing expenses </h2>
    <p>In order to add new expense you will need to login with existing account or create new by register.</p>
    <a href="pages/create.page.php" class="btn btn-outline-dark rounded-0 mb-3">Add new</a>
    <table class="table table-bordered table-striped" style="max-width: 1000px">
        <thead>
            <tr>
                <th>Expense Name</th>
                <th>Expense Price</th>
                <th>Expense Date</th>
                <th>Expense Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if($expenses):?>
            <?php while($expense = $expenses->fetchArray(SQLITE3_ASSOC)):?>
                <tr class="align-items-center">
                    <td><?=$expense['expense_name']?></td>
                    <td><?=$expense['expense_price']?></td>
                    <td><?=$expense['expense_createdAt']?></td>
                    <td><?=$expense['expense_type']?></td>
                    <td>
                        <a href="/pages/edit.page.php?expenseId=<?=$expense['id']?>" class="btn btn-outline-secondary rounded-0">Update</a>
                        <?php if($expense['expense_price'] <= 100):?>
                            <a href="/actions/delete.action.php?expenseId=<?=$expense['id']?>" class="btn rounded-0 btn-outline-danger">Delete</a>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endwhile;?>
        <?php else: ?>
            <tr>
                <td colspan="5">No Expenses found. Add new expense to table by clicking add new button top of table</td>
            </tr>
        <?php endif;?>
        </tbody>
    </table>
</div>

<?php include "templates/footer.php";?>
