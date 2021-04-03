<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="phone.css" media="only screen and (max-width:1000px)">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="stylish.css" />
  <link rel="shortcut icon" href="Images/bank.png" type="image/x-icon">
  <style>
    .sbtn {
      padding: .4rem 1rem;
      margin: 1rem 0rem;
    }
  </style>
  <title>DK Bank - Go cashless</title>
</head>

<body>
<?php include 'nav.php'; ?>
  <div class="section">
    <div class="left ">
      <h1>Welcome to the era of cashless</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditii doloum suscipit odio libero alias. Loremmet consectetur, adipisicing elit. Amet voluptates beatae dolore numquam necessitatibus itaque </p>
      <form action="customer.php" method="post">
        <button class="btn">Let's Start</button>
      </form>
    </div>
    <div class="right">
      <img src="Images/bankvector.jpg" alt="bank vector">
    </div>
  </div>
  <section id="services">
    <h1 class="center">Our Services</h1>
    <div class="service-box">

    <div class="services-items">
      <img src="Images/services2.svg" alt="transcation icon" class="item-img">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta esse pariatur, rerum minus dignissimos quidem labore perspiciatis vel repellendus!
      </p>
      <form action="customerlist.php" method="post">
        <button class="btn sbtn">View Customer</button>
      </form>
    </div>
    <div class="services-items">
      <img src="Images/services1.svg" alt="bank icon" class="item-img">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta esse pariatur, rerum minus dignissimos quidem labore perspiciatis vel repellendus!
      </p>
      <form action="transfer.php" method="post">
        <button class="btn sbtn">Transact Now</button>
      </form>
    </div>
    <div class="services-items">
      <img src="Images/services3.svg" alt="icon" class="item-img">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta esse pariatur, rerum minus dignissimos quidem labore perspiciatis vel repellendus!
      </p>
      <form action="transmanage.php" method="post">
        <button class="btn sbtn">Transactions</button>
      </form>
    </div>
  </div>
  </section>
  <section id="clients">
    <h1 class="center">Our clients</h1>
    <div class="client-box">
        <img src="Images/bank.png" alt="">
        <img src="Images/bank.png" alt="">
        <img src="Images/bank.png" alt="">
        <img src="Images/bank.png" alt="">
    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>

</html>