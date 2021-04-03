<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="Images/bank.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      .section 
      {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 18.5rem;
      }
      
      @media screen and (max-width:1000px) {
        
        .section 
        {

          padding: 10rem 0rem;
          height: 100vh;
        }
        
      }
    </style>
    <link rel="stylesheet" href="stylish.css" />
    <script src="live.js"></script>
    <title>View all Customers</title>
  </head>
  <body>
  <?php include 'nav.php'; ?>
    <div class="section">
      <div class="box">
        <form action="" method="post">
          <button class="btn" formaction="customerlist.php" >View All Customer</button>
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
