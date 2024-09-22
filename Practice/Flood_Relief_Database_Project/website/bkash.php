<?php
include 'database.php';
session_start();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKASH-PORTAL</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div align="center">
        <br>
        <img style="border-radius: 40px;" src="data:image/png;base64,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">
 
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="sent">
            <label for="bkash_number" style="color: white;">BKASH NUMBER</label>
            <input type="tel" id="bkash_number" name="bkash_number" required><br><br>

            <label for="amount" style="color: white; ">Amount</label>
            <input type="number" id="amount" name="amount" max="25000" min="50" required><br><br>

            <button type="submit" style="width: 100px; background-color:rgba(255, 255, 255, 0.1); border-radius: 20px; height: 40px; border: 0; color: white; " >Send</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!isset($_SESSION["username"])) {
                echo "Session username number is not set.";
                exit;
            }

            $bkash_number = mysqli_real_escape_string($conn, $_POST["bkash_number"]);
            $amount = mysqli_real_escape_string($conn, $_POST["amount"]);
            $username = mysqli_real_escape_string($conn, $_SESSION["username"]);
            $time = new DateTime();
            $timey = $time->format("H:i:s Y-m-d");
            $timex = $time->format('YmdHis');
            $id = $timex . $username;

            $sql_bkash = "INSERT INTO `funds_received` (`donation_id`, `Amount`, `Payment_Method`, `Payment_From`, `Payment_Date`) VALUES('$id', '$amount', 'bkash', '$username', '$timey')";
            
            if (mysqli_query($conn, $sql_bkash)) {
                echo "<p>Amount of $amount has been sent from BKASH number $bkash_number.</p>";
            } else {
                echo "Error: " . $sql_bkash . "<br>" . mysqli_error($conn);
            }
        }
        ?>
    </div>
</body>
</html>
