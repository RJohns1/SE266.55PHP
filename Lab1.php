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
    $owed = $_POST['owed'];
    $rate = $_POST['rate'];
    $payment = $_POST['payment'];
    if ((isset($_POST['owed'])) && (isset($_POST['rate'])) && (isset($_POST['payment']))) {
        $total = 0;
        $total = $owed * (($rate / 100) / 12);
        $owed = $owed - $payment + $total;
        echo "$total<br>";
        echo $owed;
    }
    ?>
</body>
