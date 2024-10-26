<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $amount = $_POST['amount'];
    $conn = connectDB();
    $conn->query("INSERT INTO expenses (item, amount) VALUES ('$item', $amount)");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Expense</title>
</head>
<body>
    <h2>Add Expense</h2>
    <form action="" method="post">
        <label>Item: <input type="text" name="item" required></label><br>
        <label>Amount: <input type="number" name="amount" required></label><br>
        <button type="submit">Add Expense</button>
    </form>
</body>
</html>
