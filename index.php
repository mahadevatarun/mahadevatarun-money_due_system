<?php
session_start();
include 'db.php';

function getTotalIncome($conn) {
    $result = $conn->query("SELECT SUM(amount) AS total_income FROM income");
    return $result->fetch_assoc()['total_income'];
}

function getTotalExpense($conn) {
    $result = $conn->query("SELECT SUM(amount) AS total_expense FROM expenses");
    return $result->fetch_assoc()['total_expense'];
}

$conn = connectDB();
$total_income = getTotalIncome($conn);
$total_expense = getTotalExpense($conn);
$balance = $total_income - $total_expense;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Money Due System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Money Due System</h1>
    <p>Total Income: <?php echo $total_income; ?></p>
    <p>Total Expenses: <?php echo $total_expense; ?></p>
    <p>Balance: <?php echo $balance; ?></p>
    <a href="add_income.php">Add Income</a> | <a href="add_expense.php">Add Expense</a>
</body>
</html>
