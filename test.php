<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender_name = $_POST["sender"];
    $receiver_name = $_POST["receiver"];
    $amount = (int)$_POST["amount"];
    if ($sender_name == $receiver_name) {
?>
        <h1 style="color:red;text-align:center;">Enter Valid Parameter!</h1>
        <?php
        include 'transfer.php';
    } else {
        include "connection.php";
        $sql1 = "SELECT * from user WHERE customer_name='$sender_name'";
        $sql2 = "SELECT * from user WHERE customer_name='$receiver_name'";
        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);


        $result1 = mysqli_fetch_assoc($query1);
        $result2 = mysqli_fetch_assoc($query2);

        $sender_balance = $result1['current_balance'];
        $receiver_balance = $result2['current_balance'];

        if ($sender_balance < $amount) {
        ?>
            <script>
                alert("You have not sufficient Balance!");
            </script>
<?php
            include 'transfer.php';
        } else {
            $amount1 = $sender_balance - $amount;
            $amount2 = $receiver_balance + $amount;
            $sql3 = "INSERT INTO transaction (`sender_name`, `receiver_name`, `amount`) VALUES ('$sender_name', '$receiver_name', '$amount')";

            $query3 = mysqli_query($conn, $sql3);

            $sql4 = "UPDATE user SET current_balance='$amount1' WHERE customer_name='$sender_name'";
            $query4 = mysqli_query($conn, $sql4);

            $sql5 = "UPDATE user SET current_balance='$amount2' WHERE customer_name='$receiver_name'";
            $query5 = mysqli_query($conn, $sql5);

            ?>
            <script>
            alert("Transaction Succesfull!");
            </script>
            <?php
            include 'transmanage.php';
        }
    }
}
?>