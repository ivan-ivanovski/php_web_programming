<?php
    require_once "../config.php";
    require_once "../templates/header.php";
    ?>
<div class="container-fluid">
    <h3>Add new expense form to table</h3>
    <form action="/actions/create.action.php" method="post" style="max-width: 500px;">
        <label for="name">Expense Name</label>
        <input type="text" id="name" name="expenseName" placeholder="Name for expense" class="form-control" required />
        <label for="date">Expense Date</label>
        <input type="date" id="date" name="expenseDate" placeholder="Date for expense" class="form-control" required />
        <label for="price">Expense Price</label>
        <input type="number" id="price" name="expensePrice" placeholder="Price for expense" class="form-control" required />
        <label for="type">Expense Type</label>
        <select id="type" name="type" class="form-control">
            <option value="cash" >Cash</option>
            <option value="card" >Card</option>
        </select>
        <input type="submit" value="Add new expense" name="addNewExpenseBtn" aria-label="addNewExpenseBtn" id="addNewExpenseBtn" class="btn btn-outline-dark rounded-0"/>
    </form>
    <a href="/index.php">Back to index</a>
</div>

<?php require_once "../templates/footer.php";?>