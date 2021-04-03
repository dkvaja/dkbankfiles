<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="Images/bank.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="stylish.css" />
  <title>Customers List - DK Bank</title>
</head>
<style>
  .section {
    padding: 3rem;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  h2 {
    text-align: center;
    font-size: 2rem;
    /* text-decoration: underline; */
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

  .tbtn {
    padding: 7px;
    cursor: pointer;
    border-radius: 4px;
    background: linear-gradient(90deg, #e9e9e9, #00d4ff);
    border: 1px solid black;
    width: 5rem;
  }

  .tbtn:hover {
    background: linear-gradient(90deg, #00d4ff, #e9e9e9);
    font-weight: bold;
  }

  #close {
    justify-self: right;
    position: relative;
    top: -20px;
    left: 75px;
    padding: 2px 3px;
    border-radius: 3px;
    cursor: pointer;
    border-style: none;
  }

  #close:hover {
    background-color: black;
    color: white;
  }

  @media screen and (max-width:1000px) {
    .section {
    padding: 2rem;
    height: 100vh;
  }
    .box
    {
      padding-top: 8rem;
    }
  h2 {
    
    font-size: 1.4rem;
    
  }

  table {
    
    width: 80%;
   
  }

  th {
    font-size: 1rem;
    
  }

  td,
  th {
    padding: .2rem;
    font-size: .5rem;
  }

 

  .tbtn {
    width: 2rem;
    font-size: .4rem;
    padding: .1rem;
  }

 

  #close {
    justify-self: right;
    position: relative;
    top: -20px;
    left: 75px;
    padding: 2px 3px;
    border-radius: 3px;
    cursor: pointer;
    border-style: none;
  }

  #close:hover {
    background-color: black;
    color: white;
  }
  }
</style>

<body>
  <?php include 'nav.php'; ?>
  <div class="section">
    <div class="box">
      <h2>Customer List</h2>
      <table border="1">
        <thead>
          <tr>
            <!-- <th>Account No</th> -->
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
            <th>City</th>
            <th>View</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require('connection.php');
          $sql = "SELECT * FROM user";
          $result = $conn->query($sql);
          $cnt = 0;
          if ($result) {
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $cnt++;
          ?>
                <tr>
                  <!-- <td><?php
                            $i = $row['account_no'];
                            echo $row['account_no']; ?></td> -->
                  <td><?php echo $cnt; ?></td>
                  <td><?php echo $row['customer_name']; ?></td>
                  <td><?php echo $row['customer_email']; ?></td>
                  <td><?php echo $row['current_balance']; ?></td>
                  <td><?php echo $row['city']; ?></td>
                  <td><a href="transfer.php"> <button type="submit" name="submit" class="tbtn">Transfer</button></a></td>
                </tr>
          <?php
              }
            } else {
              echo "Not Available";
            }
          }
          $conn->close(); 
          ?>
        </tbody>
      </table>
    </div>
  </div>


  <?php include 'footer.php'; ?>
</body>

</html>