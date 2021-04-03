<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="stylish.css" />
  <style>
    .section {
      background-color: rgb(236, 235, 233);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-box {
      /* background-color: rebeccapurple;  */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 30vw;
      font-size: 2rem;
    }

    input,
    select {
      padding: 10px;
      border-radius: 10px;
      border: 2px solid black;
      cursor: pointer;
    }

    option {
      font-size: 1.2rem;
    }

    .btn {
      margin-top: 40px;
    }
    .form-box {
      padding: 8rem;
    }
    @media screen and (max-width:1000px) 
    {
      .section {
      padding-top: 8rem;
    }
      form {
      width: 60vw;
    }
    label{
      font-size: 1.3rem;
    }
    .form-box {
      padding: 0rem 4rem;
    }
    }
  </style>
  <script src="live.js"></script>
  <link rel="shortcut icon" href="Images/bank.png" type="image/x-icon">
  <title>Transact Now - DK Bank</title>
</head>

<body>
  <?php include 'nav.php'; ?>
  <div class="section">
    <div class="form-box">
      <form action="test.php" method="post">
        <label for="sender">Sender:</label>
        <select name="sender" id="sender">
          <option value="name" selected disabled>Select sender</option>
          <?php
          require('connection.php');
          $sql = "SELECT customer_name FROM user";
          $result = $conn->query($sql);
          if ($result) {
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) { ?>
                <option><?php echo $row['customer_name'] ?></option>
          <?php }
            }
          } ?>
        </select>
        <label for="receiver">Receiver:</label>
        <select name="receiver" id="receiver">
          <option value="name" selected disabled >Select receiver</option>
          <?php
          require('connection.php');
          $sql = "SELECT customer_name FROM user";
          $result = $conn->query($sql);
          if ($result) {
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) { ?>
                <option><?php echo $row['customer_name'] ?></option>
          <?php }
            }
          } ?>
        </select>
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" min="1" required>
        <button class="btn">Send Money</button>
      </form>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>