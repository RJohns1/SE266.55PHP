<!DOCTYPE html>
<head>
    <title>Credit Card Interest</title>
</head>
<body>
    <form action="Lab1.php" method="post">
        Amount Owed: <input type="text" name="owed"><br>
        Interest Rate: <input type="text" name="rate"><br>
        Monthly Payment: <input type="text" name="payment"><br>
        <button>Show me the damage</button>
    </form>
    <?php
    if ((isset($_POST['owed'])) && !empty($_POST['owed']) && (isset($_POST['rate'])) && !empty($_POST['rate']) && (isset($_POST['payment'])) && !empty($_POST['payment'])) {
        $owed = $_POST['owed'];
        $rate = $_POST['rate'];
        $payment = $_POST['payment'];
        $total = 0;
        $amount = 0;
        $owedold = 0;
        $month;
        echo "<table>";
        echo "<tr><th>Month</th><th>Interest Paid</th><th>Owed</th></tr>";
        $owedold = $owed;
        for ($month = 1; $owed >= 0; $month++) {
            $total = $owed * (($rate / 100) / 12);
            $owed = $owed - $payment + $total;
            echo "<tr><td>$month</td><td>$$total</td>";
            if ($owed > 0) {
                echo "<td>$$owed</td></tr>";
            } else {
                echo "</tr>";
            }
            $amount = $amount + $total;
        }
        echo "</table>";
        $month = $month - 1;
        $amount = $amount + $owedold;
        echo "Total amount spend over $month months is $$amount";
    } else {
        echo "Please make sure all textboxes are not empty";
    }
    ?>
</body>
