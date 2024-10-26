<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $source = $_POST['source'];
    $amount = $_POST['amount'];
    $conn = connectDB();
    $conn->query("INSERT INTO income (source, amount) VALUES ('$source', $amount)");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Income</title>
</head>
<body>
    <h2>Add Income</h2>
    <form action="" method="post">
        <label>Source: <input type="text" name="source" required></label><br>
        <label>Amount: <input type="number" name="amount" required></label><br>
        <button type="submit">Add Income</button>
    </form>
</body>
</html>
