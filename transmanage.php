<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction history - DK Bank</title>
    <link rel="shortcut icon" href="Images/bank.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="stylish.css">
</head>
<style>
    .section {
        padding: 10rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h2 {
        text-align: center;
        font-size: 2rem;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
    }

    th {
        font-size: 1.2rem;
        background-color: #aadddd;
    }

    td,
    th {
        padding: 5px 10px;
    }

    tr:nth-child(odd) {
        background-color: #dddddd;
    }

    @media screen and (max-width:1000px) {
        h2 {
            font-size: 1.4rem;
        }

        .section {
            padding: 9rem 0rem;
        }

        .box {
            width: 80vw;

        }

        table {
            width: 100%;
        }

        th {
            font-size: .7rem;

        }

        td,
        th {
            padding: .3rem;
            font-size: .6rem;
        }
    }
</style>

<body>
    <?php include 'nav.php'; ?>
    <div class="section">
        <div class="box">
            <h2>Transaction History</h2>
            <table border="1">
                <thead>
                    <tr>
                        <!-- <th>Account No</th> -->
                        <th>Transaction No.</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('connection.php');
                    $sql = "SELECT * FROM transaction";
                    $result = $conn->query($sql);
                    $cnt = 0;
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $cnt++;
                    ?>
                                <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php echo $row['sender_name']; ?></td>
                                    <td><?php echo $row['receiver_name']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                </tr>
                    <?php
                            }
                        } else {
                            echo "Not Available";
                        }
                    }
                    $conn->close(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>